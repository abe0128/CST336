<?php

function getDatabaseConnection()
{
    /*
    $host = "localhost";
    $username = "root";
    $password = "cst336";
    $dbname="tech_devices_app";
    */
    
    $host = getenv("CLEARDB_DATABASE_URL");
    $username = "b27252d3fdf511";
    $password = "0f2a27bd";
    $dbname="tech_devices_app";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>