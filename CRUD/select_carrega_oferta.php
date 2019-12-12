<?php


include 'CRUD/conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM oferta where codigo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     
    echo " <option value='$row[codigo]'>$row[vagas]</option>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>