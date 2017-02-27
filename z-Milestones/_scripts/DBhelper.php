<?php
 
  $servername = getenv('IP');
  $username = bweber9;
  $password = "";
  $database = "milestoneDB";
    $dbport = 3306;

  // Create database connection
  global $db;
  
  $db = new mysqli($servername, $username, $password, $database, $dbport);

  // Check if database connection was created
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
  }

?>