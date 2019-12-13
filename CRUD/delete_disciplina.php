<?php

include 'conn.php';

// sql to delete a record //MUDAR ESSE ID E TRAZER A VARIAVEL
$sql = "DELETE FROM oferta WHERE _id";

if ($conn->query($sqld ) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>






include 'conn.php'; // Chama a conexao com o banco de dados

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE professor SET flag = 0  WHERE codigo = 'id'";
 
if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>