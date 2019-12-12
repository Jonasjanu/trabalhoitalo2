<?php

include 'conn.php';

// sql to delete a record //MUDAR ESSE ID E TRAZER A VARIAVEL
$sql = "DELETE FROM oferta WHERE _id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>