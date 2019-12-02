<?php

 // Criando Conexão
include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO professor (nome, telefone, siape, e_mail) 
VALUES ('$_POST[nome]',
			'$_POST[telefone]',
			'$_POST[siape]',
			'$_POST[e_mail]',)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>