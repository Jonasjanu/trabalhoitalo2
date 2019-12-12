<?php

 // Criando Conexão
include 'conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM professor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["Nome"]. "<br>  Telefone: " . $row["Telefone"]." <br> E-mail " . $row["E_mail"]."  <br>  Siape". $row["Siape"] ."<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>