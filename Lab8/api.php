<?php



function getDatabaseConnection()
{
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b27252d3fdf511";
    $password = "0f2a27bd";
    $dbname= "heroku_802607ade1b72d2";

// Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
  }
  
  function getUsersThatMatchUserName()
  {
    $username = $_GET['username'];
      
      
    $dbConn = getDatabaseConnection();
      
    $sql = "SELECT * from User WHERE username='$username'";
      
    $statement = $dbConn->prepare($sql);
      
    $statement->execute();
    $records = $statement->fetchAll();
    echo json_encode($records);
  }
  
  function validatePassword()
  {
      $username = $_GET['username'];
      $password = $_GET['password'];
      
      echo sha1($password);
  }
  
  if($_GET['action'] == 'validate-username')
  {
      getUsersThatMatchUserName();
  }
  else if($_GET['action'] == 'validate-password')
  {
      
  }
  

?>
