<!DOCTYPE html>
<html lang='en'>

  
 <?php include 'template/cabecalho.php' ?>
 <?php include 'template/menu-lateral.php' ?>

    <!-- Content Wrapper -->
    <div id='content-wrapper' class='d-flex flex-column'>

      <!-- Main Content -->
      <div id='content' meta= charset=utf-8>

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


                  <tbody charset=utf-8>
<?php   include 'conn.php';




$sql = "SELECT d.nome as 'disciplina', p.nome as 'professor', c.nome as curso , d.vagas as 'vagas' , i.fk_disciplina_codigo, d.codigo, i.fk_curso_codigo, c.codigo FROM disciplina d ,professor p,curso c , professor_disciplina pd WHERE i.fk_aluno_codigo = a.codigo and i.fk_situacao_codigo = s.codigo and i.fk_disciplina_codigo = d.codigo and i.fk_curso_codigo = c.codigo";


//--------------Listando dados--------------------------
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                      
                      <td>". $row["disciplina"]."</td>
                      <td>". $row["nome_professor"]. "
                      <td>" .$row["curso"]."</td>
                      <td>" . $row["vagas"].".</td>
                   

                    <td><a href='edisciplina.php' class='btn btn-warning btn-circle'>
                    <i class='fas fa-edit'></i>
                  </a>

                  <a class='btn btn-danger btn-circle' href='#' data-toggle='modal' data-target='#deleteModal'>
                    <i class='fas fa-trash'></i>
                  </a></td> </tr>";
    }
                  
      } else {
    echo "0 results";
}
$conn->close();
?>


                                
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
                    <?php   include 'conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM professor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                      <td>" .$row["nome"]."</td>
                      <td>". $row["siape"]."</td>
                      <td>". $row["telefone"]. "</td>                      
                      <td>" . $row["e_mail"].".</td>
                   

                    <td><a href='eprofessor.php' class='btn btn-warning btn-circle'>
                    <i class='fas fa-edit'></i>
                  </a>

                  <a class='btn btn-danger btn-circle' href='#' data-toggle='modal' data-target='#deleteModal'>
                    <i class='fas fa-trash'></i>
                  </a></td> </tr>";
    }
                  
      } else {
    echo "0 results";
}
$conn->close();
?>
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
  
  <?php include 'template/delete.php' ?>

  <?php include 'template/imports.php' ?>
  
  </body>
  
  </html>