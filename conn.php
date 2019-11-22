<?php

$servidor="localhost";
$usuario="root";
$senha="";
$baseDeDados="monitoria voluntaria";

$conexao = new mysqli($servidor,$usuario,$senha,$baseDeDados);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
    echo "ERRO NA CONEXÃO!!!";
}
?>