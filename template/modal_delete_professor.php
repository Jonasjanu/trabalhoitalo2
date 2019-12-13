 
<?php

session_start()

// Start the session

?>

 <?php

echo "
<!-- Logout Modal-->
  <div class='modal fade' id='professorModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='exampleModalLabel'>Confirmar a deleção</h5>
          <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>×</span>
          </button>
        </div>
        <div class='modal-body'>Selecione 'Confirmar' abaixo se você deseja deletar o item.</div>
        <div class='modal-footer'>
          <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancela</button>
          <a class='btn btn-danger' href='CRUD/delete_professor.php?id=$ [codigo]'>Confirmar</a>
        </div>
      </div>
    </div>
  </div>



" // fazer com que  o modal puxe o id;