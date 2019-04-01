<?php
require('fpdf.php');
require '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$sql = "SELECT * FROM agenda";
$result = $conn->query($sql);
$cell = 10;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    
        $pdf->Cell(60,10, '#'.$row['id'].' ' .$row['nombre'].' ' .$row['telefono'] ,0,1,'C');
        $cell+=30;
    }
} 



$pdf->Output();