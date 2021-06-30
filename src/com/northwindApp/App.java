package com.northwindApp;

import java.sql.*;

public class App {
    public static void main(String[] args) {

        Connection db = null;

        try {
            db = DriverManager.getConnection("jdbc:postgresql://localhost:5432/northwind", "postgres", "password"); //change password before use
        } catch (Exception e) {
            e.printStackTrace();
        }
        if (db != null) System.out.println("Database Connected.");

    }
}
