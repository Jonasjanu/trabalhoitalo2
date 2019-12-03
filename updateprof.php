<?php

include 'conn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

                     
$sql = " UPDATE professor SET "nome = .$row["nome"].","telefone = $row ,`siape`,`e_mail`=;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


$row["nome_completo"]."</td>
                      <td>". $row["nome"]."</td>
                      <td>". $row["curso"]. "</td>
                      <td>" . $row["nome"].".</td>
                      <td>" . $row["situacao"]. "</td>
                      </tr>";
    }
                    