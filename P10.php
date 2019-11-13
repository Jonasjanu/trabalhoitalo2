<?php  ?>
<lang = "pt">

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
     <?php
include 'temp.php'
?>
 	<font face="arial">
	  <form method="POST" action = "P19.html">
	  	<div  width=120 height=100>
	  	<img src="./imagem/ifce.PNG" alt="some text" width=120 height=100 align="right">
	   <h1  style="font-size:300%" >Lista de alunos escritos</h1>


<table style="width:80%">
  <tr>
    <th>Aluno</th>
    <th>Matricula</th>
    <th>Periodo</th>
    <th>E-mail</th>
    <th>Situação</th>

  <tr>
    <td>Maria Anders</td> 
    <td>987456123</td> 
    <td>5</td>
    <td>@</td>
    <td><select name="periodo" style="width:200;height:40">
      <option value="Homologado">Homologado</option>
      <option value="Nao Homologado">Não Homologado</option>
      <option value="Aprovado">Aprovado</option> 
      <option value="Nao Aprovado">Não Aprovado</option></td>

</tr>

    <tr>
    <td>Alfreds Futterkiste</td>
    <td>123456789</td>
    <td>1</td>
    <td>@</td>
    <td><select name="periodo" style="width:200;height:40">
      <option value="Homologado">Homologado</option>
      <option value="Nao Homologado">Não Homologado</option>
      <option value="Aprovado">Aprovado</option> 
      <option value="Nao Aprovado">Não Aprovado</option></td>

    </tr>
  
    <tr>
    <td>Germany</td>
    <td>357895123</td>
    <td>5</td>
    <td>@</td>
    <td><select name="periodo" style="width:200;height:40">
      <option value="Homologado">Homologado</option>
      <option value="Nao Homologado">Não Homologado</option>
      <option value="Aprovado">Aprovado</option> 
      <option value="Nao Aprovado">Não Aprovado</option></td>

    </tr>

    <tr>
    <td>José</td>
    <td>157423985</td>
    <td>2</td>
    <td>@</td>
    <td><select name="periodo" style="width:200;height:40">
      <option value="Homologado">Homologado</option>
      <option value="Nao Homologado">Não Homologado</option>
      <option value="Aprovado">Aprovado</option> 
      <option value="Nao Aprovado">Não Aprovado</option></td>

    </tr>

    <tr>
    <td>Carlos</td>
    <td>258754685</td>
    <td>8</td>
    <td>@</td>
    <td><select name="periodo" style="width:200;height:40">
      <option value="Homologado">Homologado</option>
      <option value="Nao Homologado">Não Homologado</option>
      <option value="Aprovado">Aprovado</option> 
      <option value="Nao Aprovado">Não Aprovado</option></td>

    </tr>
  

</table><br>
        <input type="submit" value="Salvar" style="width:90;height:50"> 
    </div><br>

        <div align="right"><footer class="rodape-pagina">
        <b>&copy; IFCE Campos Acopiara 2019</b>
    </footer></div>

</body>
</html>