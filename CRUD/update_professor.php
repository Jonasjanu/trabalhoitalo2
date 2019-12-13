

<?php

include 'conn.php'; // Chama a conexao com o banco de dados
  
    $_SESSION['nome'] 	=  $_POST['nome'];
   $_SESSION['telefone'] = $_POST['telefone'];
   $_SESSION['siape'] = $_POST['siape'];        
   $_SESSION['e_mail'] = $_POST['e_mail'];
  



$sql = "UPDATE professor SET nome='nome',telefone='telefone',siape='siape', e_mail='e_mail' WHERE 'codigo'";// fazer com que o id seja reconhecido e o upadete seja feito so de um resistro
 
if ($conn->query($sql) === TRUE) {

if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
