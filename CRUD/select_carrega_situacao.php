<?php

//--------------Listando dados--------------------------
$sql2 = "SELECT * FROM situacao where codigo < 5";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
   // output data of each row
   while($row2 = $result2->fetch_assoc()) {    
         if($row2[nome] != $row[situacao]) {
            echo " <option value='$row2[codigo]'>$row2[nome]</option>";
         }
   }
} else {
   echo "0 results";
}

?>