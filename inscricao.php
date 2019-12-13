<?php
// Start the session
session_start();
?>

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
              <form action="CRUD/emitir_pdf.php" method="POST">
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="Nome_Completo">Nome completo</label>
                    <input type="text" name="nome_completo" class="form-control" placeholder="Nome completo" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="Matricula">Matricula</label>
                        <input type="number" name="matricula" class="form-control" placeholder="Matricula" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="Telefone">Telefone</label>
                        <input type="number" name="telefone" class="form-control" placeholder="Telefone">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="e-mail" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="email2">Repetir email</label>
                        <input type="email" name="email2" class="form-control" placeholder="repita o e-mail" required="required">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="Curso">Curso:</label>
                        <select name="curso" class="form-control" required="required" autofocus="autofocus">
                        <?php include 'CRUD/select_carrega_curso.php'; ?>
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
                  <div class="form-label-group">
                    <label for="disciplina">Qual disciplina deseja ser monitor:</label>
                    <select name="disciplina" class="form-control" required="required" autofocus="autofocus">
                      <?php include 'CRUD/select_carrega_disciplina.php'; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">                  
                    <div class="col-md-3">
                      <label for="ano">Já foi monitor (a) anteriormente?</label>
                      <div class="form-label-group">
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="sim" name="situacao" value="1">
                          <label class="custom-control-label" for="sim">SIM</label>
                        </div>
                      </div>
                    </div>                    
                    <div class="col-md-3">
                      <div class="form-label-group">
                      </br>
                        <div class="custom-control custom-radio"> 
                          </br>
                          <input type="radio" class="custom-control-input" id="nao" name="situacao" value="0" checked>
                          <label class="custom-control-label" for="nao">NÃO</label>
                        </div>
                      </div>
                    </div>
                    </br></br>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="anoM">Se sim, no ano de:</label>
                        <select name="ano" class="form-control" required="required" autofocus="autofocus">
                        <option value="0">0</option>
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
                    <input class="form-check-input" name="aceito1" value="1" type="checkbox" required="required">Declaro conhecer o Regulamento do Programa de Monitoria ao Estudante do IFCE e o Edital do Programa de Monitoria Voluntária do IFCE campus Acopiara
                  </div>
                </div>
                </br>
                <div class="form-group">
                  <div class="form-label-group">
                    <input class="form-check-input" name="aceito2" value="1"type="checkbox" required="required">Declaro que as informações prestadas neste formulário são verdadeiras.
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