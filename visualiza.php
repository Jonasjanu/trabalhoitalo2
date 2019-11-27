<?php  
include 'conn.php'


include 'inseriraluno.php'

$sql = "SELECT Periodo, cod_disciplina, Codigo, Nome_Completo, Matricula, E_mail, situacao, Ano, Curso, Telefone FROM aluno";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
   // output data of each row
   while($linha = $resultado->fetch_assoc()) {
        echo "<br><br> Nome: " . $linha["Nome_Completo"];
		echo "<br>a matricula e:".($linha["Matricula"] );
		echo "<br>O Email é:".($linha["E_mail"] );
		echo "<br>O Periodo é:".($linha["Periodo"] );
		echo "<br>O Telefone é:".($linha["Telefone"] );
		echo "<br>O cod_disciplina é:".($linha["cod_disciplina"] );
		echo "<br>A situacao é:".($linha["situacao"] );
		echo "<br>O Curso é:".($linha["Curso"] );
		echo "<br>O Tipo Sang é:".($linha["situacao"] );
		echo "<br>O Ano é:".($linha["Ano"] );
   }
} else {
   echo "0 results";
}

$conexao->close();
?>
