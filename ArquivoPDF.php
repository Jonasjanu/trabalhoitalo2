<?php
	include ('FPDF/fpdf.php');
session_start();
	$pagina = 
		"<html>
			<body>
				<h1>Relatório de lead cadastrado</h1>
				<ul>
					<li>cesar@celke.com.br</li>
					<li>kelly@celke.com.br</li>
					<li>atendimento@celke.com.br</li>
				</ul>
				<h4>http://www.celke.com.br</h5>
			</body>
		</html>
		";

$arquivo = "Cadastro01.pdf";

$mpdf = new FPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
