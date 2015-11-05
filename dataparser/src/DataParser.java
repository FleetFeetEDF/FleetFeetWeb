/**
 * Created by Qiu on 10/21/15.
 * This Parser imports raw data to the postgres SQL database.
 */

import com.jcraft.jsch.JSch;
import com.jcraft.jsch.JSchException;
import com.jcraft.jsch.Session;

import java.io.*;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.*;
import java.util.Arrays;
import java.util.Date;
import java.util.List;
import java.util.Properties;
import java.util.zip.GZIPInputStream;
import java.util.zip.GZIPOutputStream;

public class DataParser {

    public static final List<String> COL_HEADERS = Arrays.asList("DATA_HEADER",
            "DATE",
            "TIME",
            "SECONDS",
            "NANOSECONDS",
            "DIAG",
            "GPS_LAT",
            "GPS_LONG",
            "GPS_ELEV",
            "GPS_NUMSAT",
            "GPS_HORIZDILUTION",
            "GPS_GEOIDALHEIGHT",
            "GPS_VELOCITY",
            "GPS_DIRECTION",
            "SONIC_U",
            "SONIC_V",
            "SONIC_W",
            "SONIC_SOS",
            "SONIC_TEMP",
            "SONIC_AIN1",
            "SONIC_AIN2",
            "SONIC_AIN3",
            "SONIC_AIN4",
            "SONIC_PRT",
            "CH4D",
            "CH4",
            "CH4_TEMP",
            "CH4_PRESSURE",
            "CH4_RSSI",
            "CH4_DROPRATE",
            "CH4_AUX1",
            "CH4_AUX2",
            "CH4_AUX3",
            "CH4_AUX4");
    public static final int INTERVAL = 5;
    public static final int EPOCH_INDEX = COL_HEADERS.indexOf("SECONDS");
    public static final int NANOSEC_INDEX = COL_HEADERS.indexOf("NANOSECONDS");
    public static final int LAT_INDEX = COL_HEADERS.indexOf("GPS_LAT");
    public static final int LONG_INDEX = COL_HEADERS.indexOf("GPS_LONG");
    public static final int CH4_INDEX = COL_HEADERS.indexOf("CH4");
    public static final int BUFFER_SIZE = 1000;
    public static final String BLOB_PATH = "tmp/blob_" + String.valueOf(System.currentTimeMillis() / 1000);
    public static final String GZIP_PATH = BLOB_PATH + ".gz";
    public static final String USERNAME = "default_user";
    public static final String CHECKSUM_ALGORITHM = "SHA1";

    // DB info
    private static final String strSshUser = "yqiu";                  // SSH loging username
    private static final String strSshPassword = "830457580";                   // SSH login password
    private static final String strSshHost = "phoenix.cs.colostate.edu";          // hostname or ip or SSH server
    private static final int nSshPort = 22;                                    // remote SSH host port number
    private static final String strRemoteHost = "faure.cs.colostate.edu";  // hostname or ip of your database server
    private static final int nLocalPort = 5431;                                // local port number use to bind SSH tunnel
    private static final int nRemotePort = 5432;                               // remote port number of your database
    private static final String strDb = "fleetfeet";                       // database name
    private static final String strDbUser = "fleetfeet";                    // database loging username
    private static final String strDbPassword = "M52eCsteFYd7fw";                    // database login password
    private static final String tableName = "fleetfeet_test";

    public static String OUTPUT_PATH = "download_provider/dl_" + String.valueOf(System.currentTimeMillis() / 1000);

    private static String getChecksum(InputStream fis, String algorithm) throws IOException, NoSuchAlgorithmException {
        MessageDigest md = MessageDigest.getInstance(algorithm);
        byte[] dataBytes = new byte[1024];

        int nread;

        while ((nread = fis.read(dataBytes)) != -1) {
            md.update(dataBytes, 0, nread);
        }

        byte[] mdbytes = md.digest();

        //convert the byte to hex format
        StringBuffer sb = new StringBuffer("");
        for (int i = 0; i < mdbytes.length; i++) {
            sb.append(Integer.toString((mdbytes[i] & 0xff) + 0x100, 16).substring(1));
        }

        return sb.toString();
    }

    private static void gzipIt(String inputPath, String outputPath) {
        byte[] buffer = new byte[1024];
        try {
            GZIPOutputStream gzos = new GZIPOutputStream(new FileOutputStream(outputPath));
            FileInputStream in = new FileInputStream(inputPath);
            int len;
            while ((len = in.read(buffer)) > 0) {
                gzos.write(buffer, 0, len);
            }
            in.close();
            gzos.finish();
            gzos.close();

        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }

    private static void gunzipIt(String inputPath, String outputPath) {
        byte[] buffer = new byte[1024];
        try {
            GZIPInputStream gzis = new GZIPInputStream(new FileInputStream(inputPath));
            FileOutputStream out = new FileOutputStream(outputPath);
            int len;
            while ((len = gzis.read(buffer)) > 0) {
                out.write(buffer, 0, len);
            }
            gzis.close();
            out.close();
        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }

    private static void gunzipIt(InputStream inputStream, OutputStream outputStream) {
        byte[] buffer = new byte[1024];

        try {
            GZIPInputStream gzis = new GZIPInputStream(inputStream);
            int len;
            while ((len = gzis.read(buffer)) > 0) {
                outputStream.write(buffer, 0, len);
            }
            gzis.close();
        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }

    private static void doSshTunnel(String strSshUser, String strSshPassword, String strSshHost,
                                    int nSshPort, String strRemoteHost, int nLocalPort, int nRemotePort) throws JSchException {
        final JSch jsch = new JSch();
        Session session = jsch.getSession(strSshUser, strSshHost, nSshPort);
        session.setPassword(strSshPassword);

        final Properties config = new Properties();
        config.put("StrictHostKeyChecking", "no");
        session.setConfig(config);

        session.connect();
        session.setPortForwardingL(nLocalPort, strRemoteHost, nRemotePort);
    }

    /**
     * @param queries    Queries that contains multiple table_keys (user_starttime)
     * @param selections Column selections needs to be extracted
     * @return File
     * File returned to be downloaded
     */
    public static String getFile(String[] queries, String[] selections, Connection connection) throws IOException, SQLException, NoSuchAlgorithmException {
        String filename = OUTPUT_PATH;
        FileOutputStream fout = new FileOutputStream(filename);
        for (String query : queries) {
            String statement = "SELECT * FROM " + tableName + " WHERE table_key = ?";
            PreparedStatement ps = connection.prepareStatement(statement);
            ps.setString(1, query);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                InputStream inputStream = rs.getBinaryStream("data_blob");
                InputStream inputStream4Verify = rs.getBinaryStream("data_blob");
                String storedChecksum = rs.getString("checksum");

                if (getChecksum(inputStream4Verify, CHECKSUM_ALGORITHM).equals(storedChecksum)) {
                    gunzipIt(inputStream, fout);
                } else {
                    //TODO: Checksum not match, handle?
                }
            }
            rs.close();
            ps.close();
        }

        String processedFilename = filename + ".csv";
        applySelections(filename, processedFilename, selections);
        File interFile = new File(filename);
        interFile.delete();
        return processedFilename;
    }

    private static void applySelections(String inputPath, String outputPath, String[] selections) throws IOException {
        boolean[] isSelected = new boolean[COL_HEADERS.size()];
        for (String feature : selections) {
            int idx = COL_HEADERS.indexOf(feature);
            isSelected[idx] = true;
        }

        FileOutputStream fis = new FileOutputStream(outputPath);
        try (BufferedReader br = new BufferedReader(new FileReader(inputPath))) {
            String line, header = "";

            // build and write header
            for (int i = 0; i < COL_HEADERS.size(); i++) {
                if (isSelected[i]) {
                    header += COL_HEADERS.get(i) + ",";
                }
            }
            header = header.substring(0, header.length() - 1) + "\n";
            fis.write(header.getBytes());

            // build and write content
            while ((line = br.readLine()) != null) {
                String out = "";
                String[] splits = line.split(",");
                for (int i = 0; i < COL_HEADERS.size(); i++) {
                    if (isSelected[i]) {
                        out += splits[i] + ",";
                    }
                }
                out = out.substring(0, out.length() - 1) + "\n";
                fis.write(out.getBytes());
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        fis.close();
    }

    public static void storeFile(File file, Connection connection) throws IOException, NoSuchAlgorithmException, SQLException {
        try (BufferedReader br = new BufferedReader(new FileReader(file))) {
            String line;
            Long startEpoch = null;
            Double maxCH4 = null;

            int dataPointsCount = 0;
            Double accuCH4 = 0.0, accuLat = 0.0, accuLong = 0.0, accuWind = 0.0;
//            int i = 1;
            FileOutputStream out = new FileOutputStream(BLOB_PATH);
            String userID = "";
            while ((line = br.readLine()) != null) {
                // process the line.
                String[] cols = line.split("\\t");
                if (cols[0].equals("DATA")) {
                    Long curEpoch = Long.parseLong(cols[EPOCH_INDEX]);
                    //assign some init values
                    if (startEpoch == null) {
                        startEpoch = curEpoch;
                        maxCH4 = Double.parseDouble(cols[CH4_INDEX]);
                        userID = USERNAME + "_" + cols[EPOCH_INDEX];

                    }
                    // if within interval, then include in blob (same data point)
                    if (curEpoch - startEpoch <= INTERVAL) {
                        dataPointsCount++;
                        //update max CH4
                        Double cur_CH4 = Double.parseDouble(cols[CH4_INDEX]);
                        if (cur_CH4 > maxCH4) {
                            maxCH4 = cur_CH4;
                        }

                        accuCH4 += cur_CH4;
                        Double curLat = Double.parseDouble(cols[LAT_INDEX]);
                        Double curLong = Double.parseDouble(cols[LONG_INDEX]);
                        Double curWind = getAvgWind(); // TODO: get current wind speed
                        accuLat += curLat;
                        accuLong += curLong;
                        //write current line to the blob
                        out.write(line.replaceAll("\\t", ",").getBytes());
                        out.write("\n".getBytes());
                        //mark current line
                        br.mark(BUFFER_SIZE);
                    } else {//exceeds the interval, then import to db

                        out.flush();
                        out.close();
                        gzipIt(BLOB_PATH, GZIP_PATH);
                        FileInputStream fis = new FileInputStream(GZIP_PATH);
                        System.out.println(userID);
                        String checksum = getChecksum(fis, CHECKSUM_ALGORITHM);
                        fis.close();
                        Double avgCH4 = accuCH4 / dataPointsCount;
                        Double avgLat = accuLat / dataPointsCount;
                        Double avgLong = accuLong / dataPointsCount;
                        Double avgWind = accuWind / dataPointsCount;
                        Date startTime = new Date(startEpoch * 1000);
                        Date endTime = new Date((startEpoch + INTERVAL) * 1000);
                        System.out.println(startTime);
                        // import to db
                        String statement = "INSERT INTO " + tableName + " (table_key, user_id, begin_time, end_time, location, avg_ch4, avg_wind, comp_alg, checksum, data_blob) " +
                                "VALUES(?, ?, ?, ?, POINT(?,?), ?, ?, ?, ?, ?)";
                        PreparedStatement ps = connection.prepareStatement(statement);
                        ps.setString(1, userID);
                        ps.setString(2, USERNAME);
                        ps.setTimestamp(3, new Timestamp(startTime.getTime()));
                        ps.setTimestamp(4, new Timestamp(endTime.getTime()));
                        ps.setDouble(5, avgLong);
                        ps.setDouble(6, avgLat);
                        ps.setString(7, avgCH4.toString());
                        ps.setString(8, avgWind.toString());
                        ps.setString(9, "GZip");
                        ps.setString(10, checksum);
                        File f = new File(GZIP_PATH);
                        FileInputStream fileInputStream = new FileInputStream(f);
                        ps.setBinaryStream(11, fileInputStream, (int) f.length());
                        ps.executeUpdate();
                        ps.close();
                        fis.close();

                        // open another stream for next record
//                        i++;
                        out = new FileOutputStream(BLOB_PATH);
                        // re-initiate values
                        startEpoch = null;
                        dataPointsCount = 0;
                        maxCH4 = 0.0;
                        accuCH4 = 0.0;
                        accuLat = 0.0;
                        accuLong = 0.0;
                        // reset buffered reader to the previous line
                        System.out.println(line);
                        br.reset();
                    }
                }
            }
        } finally {
            File interFile1 = new File(BLOB_PATH);
            File interFile2 = new File(GZIP_PATH);
            interFile1.delete();
            interFile2.delete();
        }
    }

    private static Double getAvgWind() {
        //TODO: calculate average wind speed
        return 0.0;
    }

    public static Connection getConnection() throws JSchException, ClassNotFoundException, SQLException {
        DataParser.doSshTunnel(strSshUser, strSshPassword, strSshHost, nSshPort, strRemoteHost, nLocalPort, nRemotePort);

        Class.forName("org.postgresql.Driver");
        Connection con = DriverManager.getConnection("jdbc:postgresql://localhost:" + nLocalPort + "/" + strDb, strDbUser, strDbPassword);
        return con;
    }

    public static void main(String[] args) {
        try {
            Connection con = getConnection();
//            storeFile(new File("/Users/Qiu/Documents/Github/FleetFeetWeb/dataparser/data3 (randomly moving)"), con);
            String[] queries = {"default_user_1444765339", "default_user_1444765357"};
            String[] test_header = new String[]{"DATA_HEADER",
                    "DATE",
                    "TIME",
                    "SECONDS",
                    "NANOSECONDS",
                    "DIAG",
                    "GPS_LAT",
                    "GPS_LONG",
                    "GPS_ELEV"};
            getFile(queries, (String[]) test_header, con);
            con.close();
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            System.exit(0);
        }
    }
}
