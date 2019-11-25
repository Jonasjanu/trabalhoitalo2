
<!-- jonas januario da silva -->

<html lang = "pt-br">

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
 <?php
include 'temp.php'
?>
	<body>

<div>
 	<font face="arial">
	  <form method="POST" action = "P5.html">
	  	<div  width=120 height=100>
	  	<img src="./imagem/ifce.PNG" alt="some text" width=120 height=100 align="right">
	   <h1  style="font-size:300%" >Monitoria Voluntaria</h1>

	   	</div><br>
		<b>Nome Completo: <input type ="text" name="Nome" placeholder="Nome Completo"  style="width:400;height:40"/></b><br>

 <br><b>Matricula: <input type ="number" name="Matricula" placeholder="Matricula" style="width:100;height:30"/></b><br>
	   <br><b>E-mail: <input type ="text" name="email" placeholder="E-mail"  style="width:400;height:40" /></b><br>

	   <br><b>Curso: <select name="Curso" style="width:400;height:40" >
	    <option value="cb">Ciencias Biológicas</option>
	    <option value="ti">Técnico em Informatica</option>
	  </select><br>
	  <br><b>Período que está matriculado (a): <select name="periodo" style="width:400;height:40">
	    <option value="1">1º</option>
	    <option value="2">2º</option>
	    <option value="3">3º</option> 
	    <option value="4">4º</option>
	    <option value="5">5º</option>
	    <option value="6">6º</option>
	    p<option value="7">7º</option>
	    <option value="8">8º</option>
	  </select><br>

	  <br><b>Telefone: <input type ="number" name="Tel" placeholder="Telefone" style="width:100;height:30"/></b><br><br>


	  <b>Qual disciplina deseja ser monitor: <select name="Curso"style="width:400;height:40">

	    <option value="Programação Orientada a Objeto">Programação Orientada a Objeto</option>
	    <option value="Engenharia de Software">Engenharia de Software</option>
	    <option value="Banco de dados">Banco de dados</option>
	    <option value="Manutenção de computadores">Manutenção de computadores</option>
	    <option value="Desenvolvimento Web-Front End">Desenvolvimento Web-Front End</option>
	    <option value="Inglês Instrumental">Inglês Instrumental</option>
	    <option value="Introdução a Computação">Introdução a Computação</option>
	    <option value="Introdução a Eletricidade">Introdução a Eletricidade</option>
	    <option value="Lógica e Linguagem de Programação">Lógica e Linguagem de Programação</option>
	    <option value="Matemática Discreta">Matemática Discreta</option>
	    <option value="Redes de computadores">Redes de computadores</option>
	    <option value="Sistemas Operacionis Livres">Sistemas Operacionis Livres</option>
	    <option value="Segurança de Redes">Segurança de Redes</option>
	    <option value="Empreendorismo">Empreendorismo</option>
 		<option value="Sistemas Operacionis">Sistemas Operacionis</option>	
	    <option value="Ètica e Relações Humanas">Ètica e Relações Humanas</option>
	    <option value="Português Instrumental">Português Instrumental</option>
	    <option value="Desenvolvimento Movel">Banco de dados</option>
		<option value="Desenvolvimento Web-Back End">Desenvolvimento Web-Back End</option>
	    <option value="Análise e Projeto de Software">Banco de dados</option>
		<option value="Banco de dados">Banco de dados</option>
	    <option value="História da Educação">História da Educação</option>
		<option value="Fundamentos Sócio-Filosóficos da Educação">Fundamentos Sócio-Filosóficos da Educação</option>
		<option value="Biologia Celular">Biologia Celular</option>
		<option value="Química geral">Química geral</option>
		<option value="Matemática aplicada">Matemática aplicada</option>
		<option value="Psicologia do Desenvolvimento ">Psicologia do Desenvolvimento </option>
		<option value="Política e Gestão Educacional ">Política e Gestão Educacional </option>
		<option value="Embriologia e Histologia Animal Comparada ">Biologia Celular</option>
		<option value="Biologia Celular">Embriologia e Histologia Animal Comparada </option>
		<option value="Princípios de Sistemática e Taxonomia ">Princípios de Sistemática e Taxonomia </option>
		<option value="Bioestatística ">Bioestatística </option>
		<option value="Química Orgânica">Química Orgânica</option>
		<option value="Psicologia da Aprendizagem">Psicologia da Aprendizagem</option>
		<option value="Zoologia de Invertebrados I">Zoologia de Invertebrados I</option>
		<option value="Botânica de Criptógamas ">Botânica de Criptógamas </option>
		<option value="Bioquímica">Bioquímica</option>
		<option value="Física para Ciências Biológicas ">Física para Ciências Biológicas </option>
		<option value="Metodologia do Trabalho Científico">Metodologia do Trabalho Científico</option>
		<option value="Didática Educacional ">Didática Educacional</option>
		<option value="Zoologia de Invertebrados II ">Zoologia de Invertebrados II </option>
		<option value="Botânica de Fanerógamas ">Botânica de Fanerógamas</option>
		<option value="Microbiologia ">Microbiologia </option>
		<option value="Biofísica">Biofísica</option>
		<option value="Currículos e Programas ">Currículos e Programas </option>
		<option value="Zoologia de Cordados ">Zoologia de Cordados</option>
		<option value="Metodologia e Prática de Ensino de Biologia ">Metodologia e Prática de Ensino de Biologia </option>
		<option value="Ecologia de Populações ">Ecologia de Populações</option>
		<option value="Princípios de Etnobiologia e Educação Ambiental">Princípios de Etnobiologia e Educação Ambiental</option>
		<option value="Genética ">Genética r</option>
		<option value="Fisiologia Animal Comparada ">Fisiologia Animal Comparada </option>
		<option value="Ecologia de Comunidades e Conservação">Ecologia de Comunidades e Conservação</option>
		<option value="Trabalho de Conclusão de Curso I (TCC I)">Trabalho de Conclusão de Curso I (TCC I)</option>
		<option value="Paleontologia ">Paleontologia </option>
		<option value="Fisiologia e Anatomia Humana ">Fisiologia e Anatomia Humana </option>
		<option value="Biologia Molecular ">Biologia Molecular </option>
		<option value="Fisiologia Vegetal ">Fisiologia Vegetal </option>
		<option value="Biologia Evolutiva ">Biologia Evolutiva </option>
		<option value="Ética e Legislação em Biologia ">Ética e Legislação em Biologia </option>
		<option value="Ecologia Regional ">Ecologia Regional </option>
		<option value="LIBRAS ">LIBRAS </option>
		<option value="Trabalho de Conclusão de Curso II (TCC II)">Trabalho de Conclusão de Curso II (TCC II)</option>
		
	    </select><br><br>


	    <div class="form-group">
	      <label for="opacao" name="sex">Já foi monitor (a) anteriormente?</label><br><br>
	      
	        <input type="radio" name="gender" value="SIM" checked > SIM<br><br>
	        <input type="radio" name="gender" value="NÃO">NÃO<br><br>
	     
	      <b>Se sim, no ano de: <select name="Curso" style="width:400;height:40">
	        <option value="2016">2016</option>
	        <option value="2017">2017</option>
	        <option value="2018">2018</option>
	        <option value="2019">2019</option>
	        <option value="2020">2020</option>
	        <option value="2021">2021</option>
	        <option value="2022">2022</option>
	        <option value="2023">2023</option>
	      </select><br><br>

	      <input class="form-check-input" type="checkbox">Declaro conhecer o Regulamento do Programa de Monitoria ao Estudante do IFCE e o Edital do
	      Programa de Monitoria Voluntária do IFCE campus Acopiara<br><br>
	      <input class="form-check-input" type="checkbox">Declaro que as informações prestadas neste formulário são verdadeiras.<br></b><br>
		

		<br>
	      <input type="submit" value="Cadatro" style="width:90;height:50"> 
	  </div><br>
</div>
	      <div align="right"><footer class="rodape-pagina">
        <b>&copy; IFCE Campos Acopiara 2019</b>
    </footer></div>
	  </body>
  </html> 

<!-- jonas januario da silva  -->