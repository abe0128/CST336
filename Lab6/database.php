<?php

function getDatabaseConnection()
{
    $host = "localhost";
    $username = "root";
    $password = "cst336";
    $dbname="tech_devices_app";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>