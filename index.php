<!DOCTYPE html>
<html lang='en'>
  session_start();
  
 <?php include 'template/cabecalho.php' ?>
 <?php include 'template/menu-lateral.php' ?>

    <!-- Content Wrapper -->
    <div id='content-wrapper' class='d-flex flex-column'>

      <!-- Main Content -->
      <div id='content'>

      <?php //include 'template/menu-superior.php' ?>       

        <!-- Begin Page Content -->
        <div class='container-fluid'>

        <div  width=120 height=100 align="center" >
        <br><br><br><br><br><br>
      <img src="./img/ifce.PNG" alt="some text" width=120 height=100 align="right">
     <h1  style="font-size:300%" >Monitoria Voluntaria</h1>

     
      <br>
        <p> O sistema foi desenvolvido para facilitar a seleção de alunos em monitorias, professores que participam do programa de monitoria,e Fazer um acompanhamento da seleção agilizando e se tornar menos burocrático o processo de seleção e acompanhamento dos programas de monitoria.
        <p>   O Gerenciador de Monitoria e sistema web que permite o gerenciamento do programa desde a inscrição dos componentes curriculares até o término da monitoria de forma digital facilatando tanto avida dos aluno como dos professores.</p>
        </p><br><br>

      <br>
          <!-- Page Heading -->
          
<a href="Documentos/Monitoria_edital.pdf">Edital da Monitoria de 2019.2</a>

          <!-- PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          <?php //include "template/cartoes.php" ?>

          <?php //include "template/graficos.php" ?>
          
          <?php //include "template/elementos-visuais.php" ?>


          <!-- FIM PARTE PRINCIPAL DA PAGINA ONDE DEVE SER ADICIONADO O CONTEUDO-->

          </div>
        <!-- /.container-fluid -->

      </div></div>
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