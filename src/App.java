import java.sql.*;

public class App {
    public static void main(String[] args) {
        try {
            Connection db = DriverManager.getConnection("jdbc:postgresql://localhost:5432/latihan2", "postgres", "Sh29@Oct23");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
