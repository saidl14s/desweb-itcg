<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
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

    <label for="">Ingresa los nuevos datos del usuario  # <?php echo $_POST["idUser"]; ?></label>
    <form action="update.php" method="post">
        <input type="hidden" name="idUser" value="<?php echo $_POST["idUser"]; ?>">
        <?php

        $sql = "SELECT * FROM agenda WHERE id = ".$_POST['idUser'];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
            <input name="nombre" type="text" value="<?php echo $row["nombre"]; ?>" id="">
            <input name="telefono" type="text" value="<?php echo $row["telefono"]; ?>" id="">
            
            <?php
            }
        } 
        $conn->close();
        ?>
        <input type="submit" value="Actualizar">
    </form>

</body>

</html>