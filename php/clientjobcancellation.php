<?php
include_once("../html/check.php");
echo $id = $_GET['id'];

$sql = "update tbljobOrders set clientJobStatus ='cancelled' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";
		   			//header("location: ../html/home.php");

		   		}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}


?>