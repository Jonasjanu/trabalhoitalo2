<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang='en'>

<?php include 'template/cabecalho.php' ?>
<?php include 'template/menu-lateral.php' ?>
<?php $_SESSION["prof_id"] = $_GET["id"]; ?>
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
            

 <?php   include 'CRUD/conn.php';

//--------------Listando dados--------------------------
$sql = "SELECT * FROM professor where codigo =$_SESSION[prof_id]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $nome = $row["nome"];
      $siape = $row["siape"];
        $tel = $row["telefone"];
        $email = $row["e_mail"];
                  
    }
                  
      } else {
    echo "0 results";
}
$conn->close();
?>



            <div class="card-body">
              <form action="CRUD/update_professor.php" method="Post">
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome; ?>"  required="required">

                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="siape">SIAPE</label>
                        <input type="number" id="siape"
                        name="siape" class="form-control"  value="<?php echo $siape; ?>" required="required">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" id="telefone" name="telefone" class="form-control"  value="<?php echo $tel; ?>"   required="required">

                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="form-group">
                  <div class="form-label-group">
                    <label for="e_mail">Email</label>
                    <input type="email" id="e_mail" name="e_mail" class="form-control"  value="<?php echo $email; ?>"  required="required">

                  </div>
                </div>

 
                
                <input type="submit" class="btn btn-success btn-block" value="Alterar">
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