<?php
     
     $servername = "localhost";
     $username = "root";
     $password = "cst336";
     $dbname = "tech_devices_app";
     
     
     $conn = new mysqli($servername, $username, $password, $dbname);
     
     
     if($conn->connect_error)
     {
        die("Connection failed: " . $conn->connect_error);
     }
     $conn->close();
 
 if(isset($_POST['loginForm']))
 {
    $sql = "SELECT *
    FROM Admin
    WHERE userName = '$username'
    AND password = '$password'";
    
    
    echo $sql;
    
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    
    if(empty($record))
    {
        echo "Wrong username or password";
    }
    else
    {
        echo $record['firstName'];
    }
    print_r($record);
    
    
     //echo "form has been submitted!";
     //print_r($_POST['username']);
 }
 ?>
 
<html>
    <body>
        <form action="welcome.php" method="post">
            Username: <input type="text" name="name"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="loginForm" value="login!"/>
            
            
        </form>
    </body>
</html>