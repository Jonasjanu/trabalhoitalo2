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
     <h1  style="font-size:300%" >Validar Cadastro </h1><br>
     <b>Protocolo: <input type ="number" name="Matricula" placeholder="Digite seu protocolo" style="width:300;height:30"/></b><br><br><br><br>

      <input type="submit" value="Validar" style="width:90;height:50">
            <p class="mt-5 mb-3 text-muted"></p>
</body>