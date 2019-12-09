session_start();
<?php

 // Criando Conexão
include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO aluno(nome_completo, matricula, e_mail, periodo, telefone, ano)
values ('$_POST[nome_completo]',
			'$_POST[matricula]',
			'$_POST[e_mail]',
			'$_POST[periodo]',
			'$_POST[telefone]',
			'$_POST[ano]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>