<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM myworkersinfo WHERE workerID=$id";
if(mysqli_query($db,$sql)==TRUE){
//redirecting to the display page (index.php in our case)
	echo "success";
	header("Location: adminworkers.php");
}else{
		echo "Error: " . $sql1 . "<br>" . $db->error;
	}
?>