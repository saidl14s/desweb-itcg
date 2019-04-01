<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
</head>

<body>

<?php
require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


    <label for="">Seleccionar un usuario</label>
    <form action="delete.php" method="post">
        <select name="idUser" >
            <?php

            $sql = "SELECT * FROM agenda";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["id"]."'>" . $row["nombre"]. "</option>";
                }
            } 
            $conn->close();

            ?>
        </select>
        <input type="submit" value="Eliminar">
    </form>

</body>

</html>