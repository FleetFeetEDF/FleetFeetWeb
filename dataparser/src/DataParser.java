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
import java.util.Date;
import java.util.Properties;
import java.util.zip.GZIPOutputStream;

public class DataParser {

    public static int INTERVAL = 5;
    public static int EPOCH_INDEX = 3;
    public static int NANOSEC_INDEX = 4;
    public static int LAT_INDEX = 6;
    public static int LONG_INDEX = 7;
    public static int CH4_INDEX = 25;
    public static int BUFFER_SIZE = 1000;
    public static String BLOB_PATH = "blob.csv";
    public static String GZIP_PATH = "blob.gz";
    public static String USERNAME = "default_user";

    private static String getChecksum(FileInputStream fis, String algorithm) throws IOException, NoSuchAlgorithmException {
        MessageDigest md = MessageDigest.getInstance(algorithm);
        byte[] dataBytes = new byte[1024];

        int nread = 0;

        while ((nread = fis.read(dataBytes)) != -1) {
            md.update(dataBytes, 0, nread);
        }
        ;

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

            GZIPOutputStream gzos =
                    new GZIPOutputStream(new FileOutputStream(outputPath));

            FileInputStream in =
                    new FileInputStream(inputPath);

            int len;
            while ((len = in.read(buffer)) > 0) {
                gzos.write(buffer, 0, len);
            }

            in.close();

            gzos.finish();
            gzos.close();

//            System.out.println("Done")
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

    private static void parseFile(File file, Connection connection) throws IOException, NoSuchAlgorithmException, SQLException {
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
                        br.mark(1000);
                    } else {//exceeds the interval, then import to db

                        out.flush();
                        out.close();
                        gzipIt(BLOB_PATH, GZIP_PATH);
                        FileInputStream fis = new FileInputStream(GZIP_PATH);
                        System.out.println(userID);
                        String checksum = getChecksum(fis, "SHA1");
                        fis.close();
                        Double avgCH4 = accuCH4 / dataPointsCount;
                        Double avgLat = accuLat / dataPointsCount;
                        Double avgLong = accuLong / dataPointsCount;
                        Double avgWind = accuWind / dataPointsCount;
                        Date startTime = new Date(startEpoch*1000);
                        Date endTime = new Date((startEpoch + INTERVAL)*1000);
                        System.out.println(startTime);
                        // import to db
                        String statement = "INSERT INTO fleetfeet(table_key, user_id, begin_time, end_time, location, avg_ch4, avg_wind, comp_alg, checksum, data_blob) " +
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
                        ps.setInt(9, 1);
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
        }
    }

    private static Double getAvgWind() {
        //TODO: calculate average wind speed
        return 0.0;
    }

    public static void main(String[] args) {
        try {
            String strSshUser = "yqiu";                  // SSH loging username
            String strSshPassword = "830457580";                   // SSH login password
            String strSshHost = "phoenix.cs.colostate.edu";          // hostname or ip or SSH server
            int nSshPort = 22;                                    // remote SSH host port number
            String strRemoteHost = "faure.cs.colostate.edu";  // hostname or ip of your database server
            int nLocalPort = 5431;                                // local port number use to bind SSH tunnel
            int nRemotePort = 5432;                               // remote port number of your database
            String strDb = "fleetfeet";                       // database name
            String strDbUser = "fleetfeet";                    // database loging username
            String strDbPassword = "M52eCsteFYd7fw";                    // database login password

            DataParser.doSshTunnel(strSshUser, strSshPassword, strSshHost, nSshPort, strRemoteHost, nLocalPort, nRemotePort);

            Class.forName("org.postgresql.Driver");
            Connection con = DriverManager.getConnection("jdbc:postgresql://localhost:" + nLocalPort + "/" + strDb, strDbUser, strDbPassword);
            parseFile(new File("/Users/Qiu/Documents/Github/FleetFeetWeb/dataparser/data3"), con);
            con.close();
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            System.exit(0);
        }
    }
}
