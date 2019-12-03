<!DOCTYPE html>
<html lang='en'>

<?php include 'template/cabecalho.php' ?>
<?php include 'template/menu-lateral.php' ?>

<!-- Content Wrapper -->
<div id='content-wrapper' class='d-flex flex-column'>

  <!-- Main Content -->
  <div id='content'>

    <?php include 'template/menu-superior.php' ?>       

    <!-- Begin Page Content -->
    <div class='container-fluid'>

      <!-- Page Heading -->
      </br></br></br>
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar Disciplina</h1>
        
      </div>

      <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
      <div class="form-group">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            
            <div class="card-body">
             <form action="inserirprof.php" method="Post">
                <div class="form-group">
                  <div class="form-label-group">
                  <label for="curso">Curso:</label>
                        <select name="" class="form-control" required="required" autofocus="autofocus">
                        <option value="Ciencias_Biológicas">Ciencias_Biológicas</option>
                        <option value="Informatica">Técnico em Informatica</option>
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="nome">Disciplina:</label>
                    <select name="nome" class="form-control" required="required" autofocus="autofocus">

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
		
	    </select>

                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                      <label for="nomeprofessor">Nome do Professor</label>
                    <input type="text" id="nomeprofessor" class="form-control" placeholder="Nome completo" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="avaliacao">Vagas:</label>
                        <select name="periodo" class="form-control" required="required" autofocus="autofocus">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> 
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                      </div>
                    </div>
                  </div>
                </div>
                
                 <input type="submit" class="btn btn-success btn-block" value="Cadastrar" />
              </form>
              <div class="text-center">
               
                
              </div>
            </div>
          </div>
        </div>


        <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include 'template/rodape.php' ?>
    

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class='scroll-to-top rounded' href='#page-top'>
  <i class='fas fa-angle-up'></i>
</a>

<?php include 'template/logout.php' ?>

<?php include 'template/imports.php' ?>

</body>

</html>