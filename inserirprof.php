<?php

 // Criando Conexão
include 'conn.php';


$nome= $_POST['nome'];
$siapesiape =$_POST['siape'];
$telefone=$_POST['telefone'];
$e_maile_mail=$_POST['e_mail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO aluno(nome, telefone, siape, e_mail, codigo,  
			('$_POST[nome]',
			'$_POST[siape]',
			'$_POST[telefone]',
			'$_POST[e_mail]',)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>