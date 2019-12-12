<?php

include 'conn.php';

$nome = ($_POST['nome']) ? $_POST['nome'] : '';
$nome_professor  = ($_POST['nome_professor']) ? $_POST['nome_professor'] : '';
$periodo  = ($_POST['periodo']) ? $_POST['periodo'] : '';
$id = $_POST["id"];


$sql = "UPDATE disciplina SET ,nome = '".$nome."', nome_professor = '".$nome_professor."',periodo = '".$periodo."'
            where codigo = ".$id; ;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

 
    