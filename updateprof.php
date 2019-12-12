<?php
// Start the session
session_start();
?>


<?php

include 'conn.php'; // Chama a conexao com o banco de dados
  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $_SESSION['nome'] 	=  $_POST['nome'];
   $_SESSION['telefone'] = $_POST['telefone'];
   $_SESSION['siape'] = $_POST['siape'];        
   $_SESSION['e_mail'] = $_POST['e_mail'];
  



$sql = "UPDATE professor SET nome='nome',telefone='telefone',siape='siape', e_mail='e_mail' WHERE 'prof_id'";

if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";

    <a  href='#page-top'>
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

  