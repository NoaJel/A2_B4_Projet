<?php
    $host = "127.1.0.0";
    $dbname = "a2_web_projet3";
    $charset = "utf8";
    $username = "root";
    $password = null;
    
    try {
        $connect = new PDO (
            "mysql:host=$host;dbname=$dbname;charset=$charset", // data source name (DSN)
            "$username", // username
            "$password" // password
        );
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $exc) {
        die("Error: " . $exc->getMessage());
    }