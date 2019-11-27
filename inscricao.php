<!DOCTYPE html>
<html lang='en'>

<?php include 'template/cabecalho.php' ?>
<?php include 'template/menu-lateral.php' ?>

<!-- Content Wrapper -->
<div id='content-wrapper' class='d-flex flex-column'>

  <!-- Main Content -->
  <div id='content'>

    <?php //include 'template/menu-superior.php' ?>       

    <!-- Begin Page Content -->
    <div class='container-fluid'>

      <!-- Page Heading -->
      </br></br></br>
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar Aluno</h1>
        
      </div>

      <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
      <div class="form-group">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            
            <div class="card-body">
              <form action="conecta.php" method="Post">
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="firstName">Nome completo</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Nome completo" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="matricula">Matrícula</label>
                        <input type="number" id="matricula" class="form-control" placeholder="matricula" required="required">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" id="telefone" class="form-control" placeholder="Telefone" required="required">

                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="required">

                  </div>
                </div>

                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="disciplina">Qual disciplina deseja ser monitor:</label>
                    <select name="disciplina" class="form-control" required="required" autofocus="autofocus">

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
                        <label for="inicio">Curso:</label>
                        <select name="Curso" class="form-control" required="required" autofocus="autofocus">
                        <option value="cb">Ciencias Biológicas</option>
                        <option value="ti">Técnico em Informatica</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="avaliacao">Período que está matriculado (a):</label>
                        <select name="periodo" class="form-control" required="required" autofocus="autofocus">
                        <option value="1">1º</option>
                        <option value="2">2º</option>
                        <option value="3">3º</option> 
                        <option value="4">4º</option>
                        <option value="5">5º</option>
                        <option value="6">6º</option>
                        <option value="7">7º</option>
                        <option value="8">8º</option>
                      </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    
                    <div class="col-md-3">
                      <label for="ano">Já foi monitor (a) anteriormente?</label>
                      <div class="form-label-group">
                    
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="sim" name="ano" checked>
                          <label class="custom-control-label" for="sim">SIM</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                    
                      <div class="form-label-group">
                      </br>
                        <div class="custom-control custom-radio"> 
                          </br>
                          <input type="radio" class="custom-control-input" id="nao" name="ano">
                          <label class="custom-control-label" for="nao">NÃO</label>
                        </div>
                      </div>
                    </div>
                    </br></br>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="anoM">Se sim, no ano de:</label>
                        <select name="Curso" class="form-control" required="required" autofocus="autofocus">
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                      </select>

                      </div>
                    </div>
                  </div>
                </div>
                </br>
                <div class="form-group">
                  <div class="form-label-group">
                    
                    <input class="form-check-input" type="checkbox" required="required">Declaro conhecer o Regulamento do Programa de Monitoria ao Estudante do IFCE e o Edital do Programa de Monitoria Voluntária do IFCE campus Acopiara
                  </div>
                </div>

                </br>
                <div class="form-group">
                  <div class="form-label-group">
                    
                    <input class="form-check-input" type="checkbox" required="required">Declaro que as informações prestadas neste formulário são verdadeiras.
                  </div>
                </div>
                </br>
                
                <input type="submit" class="btn btn-success btn-block" value="Cadastrar" />
              </form>
              <script>
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

              <div class="text-center">
                <a class="d-block small mt-3" href="index.php">Página Inicial</a>
                
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