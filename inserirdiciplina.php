<?php
session_start();

 // Criando Conexão
include 'conn.php';

//$curso=$_POST['curso'];
$disciplina =$_POST['disciplina'];
$nome_professor=$_POST['nome_professor'];
$vagas=$_POST['vagas'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO disciplina( curso,disciplina,  nome_professor, vagas
		 VALUES  '$curso',
		 '$disciplina',
			'$nome_professor',
			'$vagas')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
