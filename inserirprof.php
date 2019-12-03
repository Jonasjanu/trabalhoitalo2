<?php

 // Criando Conexão
include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO disciplina(nome,  nomeprofessor, periodo) VALUES 
 VALUES ('$_POST[nome]',
			'$_POST[nomeprofessor]',
			'$_POST[periodo]',
			)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>