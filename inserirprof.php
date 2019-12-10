<?php

session_start();


 // Criando Conexão
include 'conn.php';


/*$nome= $_POST['nome'] ;
$siape =$_POST['siape'];
$telefone=$_POST['telefone'];
$e_mail=$_POST['e_mail'];*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO professor(nome, telefone, siape, e_mail, )VALUES  
			

			('$_POST[nome]',
			'$_POST[telefone]',
			'$_POST[siape]',
			'$_POST[e_mail]',)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<!--INSERT INTO `professor`(`nome`, `telefone`, `siape`, `e_mail`, `codigo`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])

/*('$nome',

/*$nome= $_POST['nome'] ;
$siape =$_POST['siape'];
$telefone=$_POST['telefone'];
$e_mail=$_POST['e_mail'];*/

			'$telefone',
			'$siape',
			'$e_mail',);*/