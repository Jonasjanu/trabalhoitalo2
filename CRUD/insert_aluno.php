<?php
 // Criando Conexão
include 'conn.php';
//Verifica se o email foi digitado corretamente e se os campos foram marcados
if($_POST[email] == $_POST[email2] && $_POST[aceito1] == 1 && $_POST[aceito2] == 1 ) {

	//consulta no banco se o estudante já foi inserido, em caso positivo ele vai direto para o insert em inscrição, caso contrario segue para inserir
	$sql_check = "SELECT * FROM aluno where matricula='$_POST[matricula]'";
	$result = $conn->query($sql_check);
	if ($result->num_rows == 0) {	
		$last_id = "";
		$sql = "INSERT INTO aluno(`nome_completo`, `matricula`, `e_mail`, `periodo`, `telefone`)
		values ('$_POST[nome_completo]',
					'$_POST[matricula]',
					'$_POST[email]',
					'$_POST[periodo]',
					'$_POST[telefone]')";
		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
		} else {
			echo "Error: " . $sql2 . "<br>" . $conn->error;
			exit();
			header("Location: ../inscricao.php");
		}
	} else {
		while($row = $result->fetch_assoc()) {
			$last_id = $row["codigo"];
		}		
	}

	$sql2 = "INSERT INTO `inscricao`(`fk_aluno_codigo`, `fk_disciplina_codigo`, `fk_situacao_codigo`,`ano`) VALUES ($last_id,'$_POST[disciplina]', 1, '$_POST[ano]')";
	if ($conn->query($sql2) === TRUE) {
		echo "Inscrição gravada com sucesso";
		header("Location: ../index.php");
	} else {
		echo "Error: " . $sql2 . "<br>" . $conn->error;
		exit();
		header("Location: ../inscricao.php");
	}
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	exit();
	header("Location: ../inscricao.php");
}

?>