<?php

 // Criando Conexão
include 'conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM disciplina";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["Nome"]. "<br>  Codigo: " . $row["Codigo"]." <br> fk_cod_curso: " . $row["fk_cod_curso"]." <br> ";
    }
} else {
    echo "0 results";
}
$conn->close();
?>