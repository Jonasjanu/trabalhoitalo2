<!DOCTYPE html>
<html lang='en'>
<?php
// Start the session
session_start();
?>

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
        <h1 class="h3 mb-0 text-gray-800">Alterar Disciplina</h1>
        
      </div>

      <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
      <div class="form-group">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            
            <div class="card-body">
              <form>
                <div class="form-group">
                  <div class="form-label-group">
                  <label for="curso">Curso:</label>
                  <select name="curso" class="form-control" required="required" autofocus="autofocus">
                        <?php include 'CRUD/select_carrega_curso.php'; ?>
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="disciplina">Disciplina:</label>
                    <select name="disciplina" class="form-control" required="required" autofocus="autofocus">
                      <?php include 'CRUD/select_carrega_disciplina.php'; ?>
                    </select>

                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                      <label for="firstName">Nome do Professor</label>
                    <input type="text" value="Leandro de Fortaleza" id="firstName" class="form-control" placeholder="Nome completo" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="avaliacao">Vagas:</label>
                        <select name="periodo" class="form-control" required="required" autofocus="autofocus">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
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
                
                <a class="btn btn-success btn-block" href="painel.php">Alterar</a>
              </form>
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