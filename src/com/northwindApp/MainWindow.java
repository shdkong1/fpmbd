package com.northwindApp;

import javax.swing.*;

public class MainWindow extends JFrame {
    public MainWindow() {
        initUI();
    }

    private void initUI() {
        setTitle("Northwind App Client");
        setSize(1280, 720);
        setLocationRelativeTo(null);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
    }
}
