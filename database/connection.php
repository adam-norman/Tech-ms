<?php
define('DB_HOST', 'localhost:4306');
define('DB_USER', 'root');
define('DB_PASS', 'AQ234AcvAA');
define('DB_NAME', 'techdb');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

//echo 'Connected successfully';