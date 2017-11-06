<?php

function getDatabaseConnection()
{
    /*
    $host = "localhost";
    $username = "root";
    $password = "cst336";
    $dbname="tech_devices_app";
    */
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    //$host = "mysql://b27252d3fdf511:0f2a27bd@us-cdbr-iron-east-05.cleardb.net/heroku_802607ade1b72d2?reconnect=true"
    $username = "b27252d3fdf511";
    $password = "0f2a27bd";
    $dbname= "heroku_802607ade1b72d2";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>