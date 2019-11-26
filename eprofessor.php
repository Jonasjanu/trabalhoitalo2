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
        <h1 class="h3 mb-0 text-gray-800">Alterar Professor</h1>
        
      </div>

      <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->
      <div class="form-group">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            
            <div class="card-body">
              <form>
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="firstName">Nome completo</label>
                    <input type="text" id="firstName" class="form-control" value="Leandro de Fortaleza" placeholder="Nome completo" required="required">

                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="siape">SIAPE</label>
                        <input type="number" id="siape" class="form-control" placeholder="siape" value="123544356" required="required">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" id="telefone" class="form-control" placeholder="Telefone" value="88998787234" required="required">

                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" value="leandro.fortaleza@ifce.edu.br" required="required">

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