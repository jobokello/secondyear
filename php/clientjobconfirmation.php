<?php
include_once("../html/check.php");
echo $id = $_GET['id'];

$sql = "update tbljobOrders set clientJobStatus ='confirmed' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   if (mysqli_query($db,$sql) == TRUE){
		   		echo  "New record created successfully";

		   			$sql = "SELECT  jobID, workerID, workerFname, workerSname, totalCost, workerPhone FROM tbljobOrders WHERE jobID='$id' AND (clientJobStatus='confirmed' AND workerJobStatus='confirmed')";

		   			$result= mysqli_query($db,$sql);


					
					/*$result= mysqli_query($db,$sql);

					/*if($result)
					{
						echo "not null";
					}
					else
						echo mysqli_error($db);*/

					$row= mysqli_fetch_assoc($result);
					
					
					if(mysqli_num_rows($result) > 0)
					{
						echo $jobID=$row['jobID'];
						echo $workerID=$row['workerID'];
						echo $workerFname=$row['workerFname'];
						echo $workerSname=$row['workerSname'];
						echo $totalCost=$row['totalCost'];
						echo $workerPhone=$row['workerPhone']; 

						$sql = "INSERT INTO tblpayment (workerID, workerFname, workerSname, jobID, paymentAmount, workerPhone)
				   		VALUES ('$clientID','$workerID','$workerFname','$workerSname','$jobID','$totalCost','$workerPhone')";

				   		mysqli_query($db,$sql);
				   	}

		   		header("location: ../html/clientpendingjobs.php?id=$id");

		   		}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}


?>