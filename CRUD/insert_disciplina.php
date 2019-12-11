<?php
 // Criando Conexão
include 'conn.php';

$curso=$_POST['curso']; 
$disciplina =$_POST['disciplina'];
$nomeprofessor =$_POST['nome'];
$vagas=$_POST['vagas'];

$sql = "INSERT INTO disciplina( curso,disciplina,  nome, vagas
		 VALUES  '$curso',
		 '$disciplina',
			'$nome',
			'$vagas')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
