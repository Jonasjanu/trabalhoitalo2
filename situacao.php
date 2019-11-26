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
        </br></br></br>
           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Situação</h1>
          <p class="mb-4">Situação da Inscrição</p>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inscrições do Aluno</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Matricula</th>
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Situação</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Matricula</th>
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Situação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Jonas de Acopiara</td>
                      <td>2018RC-0225</td>
                      <td>Técnico em Informática</td>                      
                      <td>Banco de Dados</td>
                      <td>HOMOLOGADO</td>
                    </tr>
                    <tr>
                      <td>Jonas de Acopiara</td>
                      <td>2018RC-0225</td>
                      <td>Técnico em Informática</td>                      
                      <td>Redes</td>
                      <td>APROVADO</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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