<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$serverhost = "localhost";
$username = "root";
$password = "root";
$dbname = "contact_db";

// Create connection
$connect = new mysqli($serverhost, $username, $password, $dbname);

// Check connection
if ($connect -> connect_error) {
  die("Connection failed: " . mysqli_connect_error());
  
} else {

  return $connect;
  
}