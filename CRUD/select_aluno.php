<?php
include 'conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - nome: " . $row["nome_completo"]."matricula: " . $row["matricula"]. "curso " . $row["curso"]. "disciplina " . $row["cod_disciplina"]. "situacao " . $row["situacao"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

