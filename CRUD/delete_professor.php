<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="text-center">
                <a class="d-block small mt-3" href="index.php">Página Inicial</a>
                
              </div>

              </body>

<?php

include 'conn.php';

// sql to delete a record //MUDAR ESSE ID E TRAZER A VARIAVEL
$sql = "DELETE FROM professor WHERE id='prof_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>