<%@ page import="java.sql.*"%>
<%
  String db = System.getenv("DB_NAME");
  db = db.replaceAll("\r", "");
  String user = System.getenv("DB_USERNAME"); // assumes database name is the same as username
  user = user.replaceAll("\r", "");
  String password = System.getenv("DB_PASSWORD");
  password = password.replaceAll("\r", "");
  String server = System.getenv("DB_SERVER");
  server = server.replaceAll("\r", "");
  try {
    java.sql.Connection con;
    Class.forName("com.mysql.jdbc.Driver");
    con = DriverManager.getConnection("jdbc:mysql://"+server+"/"+db, user, password);
    //out.println (db+ "database successfully opened.");
  }
  catch(SQLException e) {
    //out.println("SQLException caught: " +e.getMessage());
  }
%>