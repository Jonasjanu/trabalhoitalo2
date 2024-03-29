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

      <?php include 'template/menu-superior.php' ?>       

        <!-- Begin Page Content -->
        <div class='container-fluid'>
        </br>
           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Avaliar Alunos</h1>
           
          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->


          <!-- DataTales Example -->
          <div class="form-group">
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            
            <div class="card-body">
              <form>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Aluno Inscritos</h6>
              
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
                      <th>Aluno</th>
                      <th>Matricula</th>
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Situação</th>
                    </tr>
                  </tfoot>
                  <tbody>
           

 
 <?php   include 'CRUD/conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT *, curso.nome as 'curso', situacao.nome as 'situacao', situacao.codigo as 'cod' FROM `inscricao` INNER JOIN disciplina ON fk_disciplina_codigo = disciplina.codigo INNER JOIN situacao ON inscricao.fk_situacao_codigo = situacao.codigo INNER JOIN curso ON disciplina.fk_curso_codigo = curso.codigo INNER JOIN aluno ON fk_aluno_codigo = aluno.codigo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                      <td>" .$row["nome_completo"]."</td>
                      <td>". $row["matricula"]."</td>
                      <td>". $row["curso"]. "</td>
                      <td>" . $row["nome"].".</td>
                      <td><select name='situacao' class='form-control' required='required' autofocus='autofocus'>
                      <option value='$row[cod]'>$row[situacao]</option>";
                      include 'CRUD/select_carrega_situacao.php'; 
                    echo "  </select>            
                      </td>
                      </tr>";
    }
                    

                  
      } else {
    echo "0 results";
}
$conn->close();

//--------------Listando dados--------------------------

?>

                </table>
              </div>
            </div>
          </div>

          <a class="btn btn-success btn-block" href="index.php">Gravar</a>
              </form> </br>
              <a class="btn btn-success btn-block" href="index.php"><i class="fas fa-download fa-sm text-white-50"></i>  Gerar Relatório </a>
              
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