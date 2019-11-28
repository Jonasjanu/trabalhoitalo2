<?php

 // Criando Conexão
include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO aluno (Nome_Completo,Matricula,E_mail, Periodo, Telefone,cod_disciplina, situacao,Curso, Ano)
VALUES ('$_POST[Nome_Completo]',
			'$_POST[Matricula]',
			'$_POST[E_mail]',
			'$_POST[Periodo]',
			'$_POST[Telefone]',
			'$_POST[cod_disciplina]',
			'$_POST[situacao]'
			'$_POST[Curso]',
			'$_POST[Ano]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>