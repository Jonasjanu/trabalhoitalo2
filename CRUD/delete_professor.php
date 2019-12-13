

<?php

session_start()

// Start the session

?>


<?php

include 'conn.php';

echo var_dump($_SESSION);
echo var_dump($_GET);

$_SESSION["id"] = $_GET["id"]; 
$prof_id = $_SESSION["id"];

$sql = "UPDATE professor SET flag = 0  WHERE codigo ='$prof_id'";// fazer com que o id seja reconhecido e o upadete seja feito so de um resistro
 
if ($conn->query($sql) === TRUE) {
 
if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>