<html lang = "pt">


 <?php
include 'temp.php'
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="formulário" content="formulário para monitoria">
  <title>
    Pagina para monitoria voluntária
  </title> 
  <link href="css/bootstrap.min.js" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script> 
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
  <body>

  
    <form method="POST" action = "Post2.php">
      <div  width=120 height=100>
      <img src="./imagem/ifce.PNG" alt="some text" width=120 height=100 align="right">
     <h1  style="font-size:300%" >resultado </h1>
     

<h2>Situação dos Alunos</h2>

<table style="width:80%">
  <tr>
    <th>Aluno</th>
    <th>Situação</th>

  <tr>
    <td>Maria Andreza</td> 
    <td>Aprovada</td>

</tr>

    <tr>
    <td>Aristóteles</td>
    <td>Aprovado</td>

    </tr>
  
    <tr>
    <td>Maria Eduarda</td>
    <td>Aprovada</td>

    </tr>

    <tr>
    <td>José Paulo</td>
    <td>Não Aprovado</td>

    </tr>

    <tr>
    <td>Carlos Eduardo</td>
    <td>Aprovado</td>

    </tr>
  
 <a href="pdf.html">GERAR PDF </a">
  
</table>
</body>