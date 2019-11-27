<?php

 // Criando Conexão
include 'conn.php'

//--------------Inserindo dados--------------------------



//Trazer os dados
$sql =" SELECT Periodo, cod_disciplina, Codigo, Nome_Completo, Matricula, E_mail, situacao FROM aluno "
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
   // output data of each row
   while($linha = $resultado->fetch_assoc()) {
        echo "<br><br> Nome: " . $linha["Nome"];
		echo "<br>A Matricula é:".($linha["Matricula"] );
		echo "<br>O Email é:".($linha["email"] );
		echo "<br>O Curso é:".($linha["Curso"] );
		echo "<br>O Telefone é:".($linha["Tel"] );
		echo "<br>A disciplina é:".($linha["disciplina"] );
		echo "<br>O monitor é:".($linha["monitor"] );
		echo "<br>O Ano  é:".($linha["Ano"] );
		
   }
} else {
   echo "0 results";
}

$conexao->close();
?>
