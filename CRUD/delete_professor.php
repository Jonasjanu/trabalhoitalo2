

<?php

session_start()

// Start the session

?>


<?php

include 'conn.php';



$sql = "UPDATE professor SET flag = 0  WHERE codigo ='prof_id'";
 
if ($conn->query($sql) === TRUE) {


    echo "Record updated successfully";

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>