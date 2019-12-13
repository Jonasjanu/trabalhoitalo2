<!DOCTYPE html>
<html lang='pt'>
<meta charset="utf-8">
<title></title>
<head>
</head>
<body>
	
	<h1> SELEÇÃO PARA PROGRAMA MONITORIA VOLUNTÁRIA IFCE - CAMPUS ACOPIARA</h1>
	<H2> ANEXO II - FORMULÁRIO DE INSCRIÇÃO PARA O PROCESSO SELETIVO 2019.2</H2>

	<p>Nome completo:  <?php echo $nome_completo; ?></p>
	<p>Matrícula:  <?php echo $matricula; ?></p>
	<p>Telefone:  <?php echo $telefone; ?></p>
	<p>E-mail:  <?php echo $email; ?></p>
	<p>Curso:  	<?php echo $curso; ?></p>
	<p>Período que está matriculado(a): <?php echo $periodo; ?></p>
	<p>Disciplina em que deseja ser monitor: <?php echo $disciplina; ?></p>

	<?php 
	if ($situacao) {?>
		<p>Já foi monitor (a) anteriormente? () Não (X) Sim. </p>
		<p>No ano de <?php echo $ano; ?></p>
		<?php
	}else{?>
		<p>Já foi monitor (a) anteriormente? (X) Não () Sim. </p>
		<?php

	}
	 ?>
			
			<div class="form-group">
				<div class="form-label-group">

					<input class="form-check-input" type="checkbox" required="required">Declaro conhecer o Regulamento do Programa de Monitoria ao Estudante do IFCE e o Edital do Programa de Monitoria Voluntária do IFCE Campus Acopiara
				</div>
				<br></br>

				<div class="form-group">
					<div class="form-label-group">

						<input class="form-check-input" type="checkbox" required="required">Declaro que as informações prestadas neste formulário são verdadeiras.
						
						<br><br><br><br><br><br></br>

						<p div style='text-align:right'> Acopiara-Ce,____________ de ________________________ de 2019.</p>

						<br><br><br><br><br></br>

						<p div align="center">_______________________________________________________<br></br>
						Assinatura do Estudante(a).</p>

						


					</div>
					<br></br>

				</div>
			</body>
			</html>