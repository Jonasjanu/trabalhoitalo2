<?php

include 'conn.php'
$sql ="INSERT INTO aluno(Periodo, cod_disciplina, Codigo, Nome_Completo, `Matricula, E_mail, situacao) 
VALUES 
			'$_POST[Nome]',
			'$_POST[Matricula]',
			'$_POST[email]',
			'$_POST[Curso]',
			'$_POST[periodo]',
			'$_POST[Tel]',
			'$_POST[disciplina]',
			'$_POST[monitor]'
			'$_POST[Ano]')";

if ($conexao->query($sql) === TRUE) {
			    echo "Novo registrado criado com sucesso!<br> ";
			} else {
			    echo "Error: " . $sql . "<br>" . $conexao->error;
			}
?>