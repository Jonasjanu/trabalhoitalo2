<?php

include 'conn.php'; // Chama a conexao com o banco de dados
  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome  = ($_POST['nome']) ? $_POST['nome'] : '';
$telefone = ($_POST['telefone']) ? $_POST['telefone'] : false;
$siape  = ($_POST['siape']) ? $_POST['siape'] : '';
$e_mail  = ($_POST['e_mail']) ? $_POST['e_mail'] : '';



$sql = "UPDATE professor SET nome='$nome',telefone='$telefone',siape='$siape',e_mail='$e_mail' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>                
