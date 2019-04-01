<?php

require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ID = $_POST['id'];
$new_nombre = $_POST['nombre'];
$new_phone = $_POST['telefono'];
$sql = "UPDATE ".$tbname." SET nombre='', SET telefono='' WHERE id=";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>