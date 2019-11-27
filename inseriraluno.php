<?php

include 'conn.php';

include 'inseriraluno.php'

$sql ="INSERT INTO aluno(Periodo, cod_disciplina, Codigo, Nome_Completo, Matricula, E_mail, situacao,Ano, Curso, Telefone) VALUES 
			'$_POST[Nome_Completo]',
			'$_POST[Matricula]',
			'$_POST[E_mail]',
			'$_POST[Periodo]',
			'$_POST[Telefone]',
			'$_POST[cod_disciplina]',
			'$_POST[situacao]'
			'$_POST[Curso]',
			'$_POST[Ano]')";

if ($conexao->query($sql) === TRUE) {
			    echo "Novo registrado criado com sucesso!<br> ";
			} else {
			    echo "Error: " . $sql . "<br>" . $conexao->error;
			}
?>