<?php

require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
    $sql = "USE ".$dbname;
    if ($conn->query($sql) === TRUE) {
        // sql to create table
        echo "Database select successfully <br>";
        $sql = "CREATE TABLE ".$tbname." (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nombre VARCHAR(30) NOT NULL,
            telefono VARCHAR(10)
            )";
        if ($conn->query($sql) === TRUE) {
            echo "Table agenda created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
    
} else {

echo '¿desea eliminar la base de datos? <br> <a href="eliminarDB.php">Sí</a> <a href="index.html">No</a>';
}

$conn->close();
