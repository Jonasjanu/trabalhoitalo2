<?php

 // Criando Conexão
include 'CRUD/conn.php';

//--------------Listando dados--------------------------
$sql3 = "SELECT * FROM situacao where codigo >= 5";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
   // output data of each row
   while($row3 = $result3->fetch_assoc()) {    
         //if($row3[nome] != $row3[situacao]) {
            echo " <option value='$row2[codigo]'>$row2[nome]</option>";
         //}
   }
} else {
   echo "0 results";
}

?>