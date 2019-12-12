<?php

include 'conn.php';

// sql to delete a record //MUDAR ESSE ID E TRAZER A VARIAVEL
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>