<?php
//include 'verifica_session_start.php';
//include 'conn.php';

//$id = $_GET['id'];

$nome_completo = $_POST["nome_completo"];
$matricula = $_POST["matricula"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$periodo = $_POST["periodo"];
$disciplina = $_POST["disciplina"];
$curso = $_POST["curso"];
$situacao = $_POST["situacao"];
$ano = $_POST["ano"];

/*
$sql2 = "SELECT * FROM certificado ";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {

    while($linha = $result->fetch_assoc()) {
        if ($id == $linha["id_certificado"]) {
            $id_certificado         = $linha["id_certificado"];
            $fk_participa           = $linha["fk_participa_id_participa"];

            $sql = "SELECT * FROM (((participa AS p 
            JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
            JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
            JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)";

            $resultado = $conn->query($sql);

        //SELECIONA A LINHA DO ID MARCADO NO CHECKBOX
            if ($resultado->num_rows > 0) {
                while($linha = $resultado->fetch_assoc()) {
                    if ($fk_participa == $linha["id_participa"]) {
            # code...
                        $verifica = 1;


                        $nome_atv               = $linha["nome_atv"];
                        $carga_horaria_atv      = $linha["carga_horaria_atv"];

                        $data_final_atv         = $linha["data_final_atv"];
                        $responsavel            = $linha["responsavel"];


                        $id_usuario             = $linha["id_usuario"];            
                        $nome_usuario           = $linha["nome_usuario"];            
                        $cpf_usuario            = $linha["cpf_usuario"];

                    }


                }
            }

        }
    }
}

if (!$verifica) {

    $_SESSION['msg'] = "O código digitado não é válido";
    $_SESSION['check'] = 1;
    
    header("Location: ../emitir.php");
    exit();

}*/





require_once 'vendor/autoload.php';

// referenciando o namespace do dompdf

use Dompdf\Dompdf;

// instanciando o dompdf

$dompdf = new Dompdf();

//lendo o arquivo HTML correspondente

ob_start();
require_once 'ficha.php';

//$html = file_get_contents('../certificado.php');

//inserindo o HTML que queremos converter

$dompdf->loadHtml(ob_get_clean());

// Definindo o papel e a orientação

$dompdf->setPaper('A4', 'portrait');

// Renderizando o HTML como PDF

$dompdf->render();

// Enviando o PDF para o browser

$dompdf->stream('certificado.pdf', array("Attachment" => 0));

