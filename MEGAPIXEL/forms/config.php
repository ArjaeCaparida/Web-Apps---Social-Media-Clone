<?php

// Define the database connection parameters
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "megapixel_db";

// Create a new mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check if the connection was successful
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Set the default character set
$mysqli->set_charset("utf8");

// Save the database connection object in a global variable
$GLOBALS['db'] = $mysqli;

?>
