<?php

 // Criando Conexão
include 'CRUD/conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM disciplina ORDER BY fk_curso_codigo ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     
    echo " <option value='$row[codigo]'>$row[nome]</option>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>