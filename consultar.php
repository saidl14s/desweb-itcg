<?php
require 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM agenda";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["nombre"].' ' .$row["telefono"] .'<br>';
    }
} 
?>

<a href="fpdf/export.php">Exportar a PDF</a>

<?php
$conn->close();

?>