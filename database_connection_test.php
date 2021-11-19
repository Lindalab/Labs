<?php

// requring the file "database_credentials.php"
require ("database_credentials.php");

// Create connection
$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  echo "Connected successfully";
}
?>