/**
 * Created by Qiu on 10/21/15.
 * This Parser imports raw data to the postgres SQL database.
 */

import com.jcraft.jsch.JSch;
import com.jcraft.jsch.JSchException;
import com.jcraft.jsch.Session;

import java.io.*;
import java.sql.Connection;
import java.sql.DatabaseMetaData;
import java.sql.DriverManager;
import java.util.Map;
import java.util.Properties;

public class DataParser {

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
        System.out.println(session.isConnected());
    }

    private static void parseFile(File file, Connection connection) throws IOException {
        try (BufferedReader br = new BufferedReader(new FileReader(file))) {
            String line;
            while ((line = br.readLine()) != null) {
                // process the line.
                String[] cols = line.split("\\t");

            }
        }
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
            con.close();
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            System.exit(0);
        }


    }
}
