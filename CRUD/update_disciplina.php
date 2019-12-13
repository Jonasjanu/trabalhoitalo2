<?php

include 'conn.php';


$nome_professor  = $_POST['nome_professor'];
$vagas  = $_POST['vagas'];
$id = $_POST["id"];
$situacao  = $_POST['situacao'];

$sql = "UPDATE oferta SET fk_professor_codigo = '$nome_professor', vagas = '$vagas', fk_situacao_codigo = '$situacao'
            where codigo = '$id'";// fazer com que o id seja reconhecido e o upadete seja feito so de um resistro
 
if ($conn->query($sql) === TRUE) {

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

 
    