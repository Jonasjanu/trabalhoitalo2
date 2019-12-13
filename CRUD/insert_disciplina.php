<?php
 // Criando Conexão
include 'conn.php';

$curso=$_POST['curso']; 
$disciplina =$_POST['disciplina'];
$vagas=$_POST['vagas'];

$sql = "INSERT INTO oferta( curso,disciplina,  vagas)
		 VALUES  ('$curso',
		 '$disciplina',
			'$vagas')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
