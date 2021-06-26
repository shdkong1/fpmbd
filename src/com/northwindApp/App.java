package com.northwindApp;

import java.sql.*;

public class App {
    public static void main(String[] args) {

        Connection db = null;

        try {
            db = DriverManager.getConnection("jdbc:postgresql://localhost:5432/northwind", "postgres", "Sh29@Oct23");
        } catch (Exception e) {
            e.printStackTrace();
        }
        if (db != null) System.out.println("Database Connected.");


    }
}
