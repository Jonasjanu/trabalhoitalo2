
              <?php

 // Criando Conexão
include 'conn.php';

$nome = $_POST['nome'];
$telefone =$_POST['telefone']; 
$siape = $_POST['siape'];
$e_mail = $_POST['e_mail'];

$sql = "INSERT INTO professor(nome, telefone, siape, e_mail, flag )VALUES  
			('".$nome."',
			'".$telefone."',
			'".$siape."',
			'".$e_mail."', 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

