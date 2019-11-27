<?php

 // Criando Conexão
include 'conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Periodo: " . $row["Periodo"]. " - nome: " . $row["Nome_Completo"]. " E-mail " . $row["E_mail"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>