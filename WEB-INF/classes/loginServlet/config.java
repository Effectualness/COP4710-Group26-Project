package loginServlet;
 
import java.sql.*;
 
public class config 
{
  public User checkLogin(String email, String password) throws SQLException,
    ClassNotFoundException 
    {
      //Gather database connection information and connect
      String dbName = System.getenv("DB_NAME");
      dbName = dbName.replaceAll("\r", "");
      String dbUser = System.getenv("DB_USERNAME"); // assumes database name is the same as username
      dbUser = dbUser.replaceAll("\r", "");
      String dbPassword = System.getenv("DB_PASSWORD");
      dbPassword = dbPassword.replaceAll("\r", "");
      String dbServer = System.getenv("DB_SERVER");
      dbServer = dbServer.replaceAll("\r", "");
      Class.forName("com.mysql.jdbc.Driver");
      java.sql.Connection con;
      con = DriverManager.getConnection("jdbc:mysql://"+dbServer+"/"+dbName, dbUser, dbPassword);

      //Execute database query
      String sql = "SELECT * FROM users WHERE email = ? and password = ?";
      PreparedStatement statement = con.prepareStatement(sql);
      statement.setString(1, email);
      statement.setString(2, password);

      ResultSet result = statement.executeQuery();

      User user = null;

      if (result.next()) {
          user = new User();
          user.setFullname(result.getString("fullname"));
          user.setEmail(email);
      }

      con.close();

      return user;
    }
}