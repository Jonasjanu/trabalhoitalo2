<?php

$sql = "UPDATE oferta SET flag = 0  WHERE codigo" ;// fazer com que o id seja reconhecido e o upadete seja feito so de um resistro
 
if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>

