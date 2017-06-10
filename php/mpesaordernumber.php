<?php
	include("../html/check.php");
	include("location.php");

	if (isset($_POST['submit'])) {

	echo $curruser = $_SESSION['username'];
	echo $paymentCode=trim($_POST["paymentCode"]);

	$ses_sql = mysqli_query($db,"SELECT jobID, totalCost FROM tbljoborders WHERE clientUsername ='$curruser' order by jobID desc");

			$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

			echo $accountID=$row['jobID'];
			echo $cost=$row['totalCost'];


			$sql = "update tbljobOrders set paymentCode='$paymentCode' WHERE jobID ='$accountID'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";
		   			header("location: ../html/home.php");

		   		}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}
	}
			

//$sql2 = "Update myworkersinfo set jobCount = jobCount + 1 where workerID = '$workerID'";
		   		//mysqli_query($db,$sql2);


?>