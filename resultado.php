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
           <h1 class="h3 mb-2 text-gray-800">Resultados</h1>
          <p class="mb-4">Resultado da monitoria de 2019.2.</p>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Alunos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Aluno</th>
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



//--------------Listando dados-------------------------

$sql = "SELECT  
        c.nome as 'curso', 
        a.matricula as 'matricula', 
        a.nome_completo as 'aluno', 
        d.nome as 'disciplina', 
        s.nome as 'situacao',  
        i.fk_situacao_codigo, 
        i.fk_aluno_codigo, 
        a.codigo, 
        i.fk_situacao_codigo, 
        s.codigo, 
        i.fk_disciplina_codigo, 
        d.codigo, 
        c.codigo,
        d.fk_curso_codigo 
FROM  curso c, 
      inscricao i, 
      disciplina d, 
      aluno a, 
      situacao s 
WHERE i.fk_aluno_codigo = a.codigo and 
      i.fk_situacao_codigo = s.codigo and 
      i.fk_disciplina_codigo = d.codigo and 
      d.fk_curso_codigo = c.codigo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                        <td>" .$row['aluno']."</td>
                        <td>". $row['matricula']."</td>
                        <td>". $row['curso']. "</td>
                        <td>" . $row['disciplina'].".</td>
                        <td>" . $row[ 'situacao'].".</td>
                        </tr>";



                    
     }
                    

                  
      } else {
    echo "0 results";
}
$conn->close();

//--------------Listando dados--------------------------

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
  
  <?php include 'template/imports.php' ?>
  
  </body>
  
  </html>