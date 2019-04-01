<?php

require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "DROP DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "Database destroy successfully <br>";
    
}

$conn->close();
