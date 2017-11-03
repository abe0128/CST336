<?php
     
    $servername = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b27252d3fdf511";
    $password = "0f2a27bd";
    $dbname = "heroku_802607ade1b72d2";
     
     
    $conn = new mysqli($servername, $username, $password, $dbname);
     
     
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    $sql = "SELECT id, firstname, lastname FROM user";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "user id: ".$row["id"].": ".$row["firstname"]." ".$row["lastname"]."<br>";
        }
    }
    else
    {
        echo "0 results";
    }
    
    $conn->close();
 
?>
 