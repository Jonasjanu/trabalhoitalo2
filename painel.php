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
        </br>
           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>
          </br></br>
          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Disciplinas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Professor</th>
                      <th>Curso</th>
                      <th>Vagas</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Professor</th>
                      <th>Curso</th>
                      <th>Vagas</th>
                      <th>Ação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Banco de Dados</td>
                      <td>Leandro de Fortaleza</td>
                      <td>Técnico em Informática</td>                      
                      <td>2</td>
                      <td><select name="acao" class="form-control" required="required" autofocus="autofocus">
                        <option value="alterar">ALTERAR</option>
                        <option value="excluir">EXCLUIR</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Redes</td>
                      <td>Sávio de Tauá</td>
                      <td>Técnico em Informática</td>                      
                      <td>1</td>
                      <td><select name="acao" class="form-control" required="required" autofocus="autofocus">
                        <option value="alterar">ALTERAR</option>
                        <option value="excluir">EXCLUIR</option>
                      </select></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Professor</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>SIAPE</th>
                      <th>Telefone</th>
                      <th>E-mail</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>SIAPE</th>
                      <th>Telefone</th>
                      <th>E-mail</th>
                      <th>Ação</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Savio de Tauá</td>
                      <td>31295594/td>
                      <td>88-98884743</td>                      
                      <td>savio.taua@ifce.edu.br</td>
                      <td><select name="acao" class="form-control" required="required" autofocus="autofocus">
                        <option value="alterar">ALTERAR</option>
                        <option value="excluir">EXCLUIR</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Leandro de Fortaleza</td>
                      <td>309584834</td>
                      <td>85-983747373</td>                      
                      <td>leandro.fortaleza@ifce.edu.br</td>
                      <td><select name="acao" class="form-control" required="required" autofocus="autofocus">
                        <option value="alterar">ALTERAR</option>
                        <option value="excluir">EXCLUIR</option>
                      </select></td>
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