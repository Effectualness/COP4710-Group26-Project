<%@ page import="java.sql.*"%>
<html>
<head>
<title>JDBC Connection example</title>
</head>

<body>
<h1>JDBC Connection example</h1>

<%
  String db = System.getenv("DB_NAME");
  String user = System.getenv("DB_USERNAME"); // assumes database name is the same as username
  String password = System.getenv("DB_PASSWORD");
  String server = System.getenv("DB_SERVER");
  try {
    java.sql.Connection con;
    //Class.forName("org.gjt.mm.mysql.Driver");
    con = DriverManager.getConnection("jdbc:mysql://"+server+"/"+db, user, password);
    out.println (db+ "database successfully opened.");
  }
  catch(SQLException e) {
    out.println("SQLException caught: " +e.getMessage());
  }
%>

</body>
</html>
