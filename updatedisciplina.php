<?php
include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE disciplina SET `codigo`=[value-1],`nome`=[value-2],`fk_curso_codigo`=[value-3],`nome_professor`=[value-4],`periodo`=[value-5] WHERE 1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>