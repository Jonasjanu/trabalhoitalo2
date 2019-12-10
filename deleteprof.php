<?php 
	session_start();
	 
	
	$_SESSION["acao"];
	echo $_SESSION["acao"]=$_GET['acao'];
	echo $_SESSION["id"]=$_GET['id'];
	print_r($_SESSION);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SESSION["acao"]==1){
	echo "ENTROU NO IF PARA DELETAR";
	//echo $_SESSION["acao"] . $_SESSION
		$sql = "DELETE FROM usuario WHERE id=$_SESSION[id]";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>