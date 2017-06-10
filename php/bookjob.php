<?php
	include('../html/check.php');
	//include('../html/connection.php');


	/*$date_now = new DateTime();
 	$inDate  =$_POST["date"];
	if ($inDate > $date_now) {*/
		if (isset($_POST['submit'])){

			echo $curruser = $_SESSION['username'];

			echo $workerSkills = trim($_POST["workerSkills"]);
			echo $jobDescription = trim($_POST["jobDescription"]);
			echo $jobDate = trim($_POST["date"]);
			echo $totalCost = trim($_POST["totalCost"]);

		

			$ses_sql = mysqli_query($db,"SELECT clientID, fName, sName, email, phone, county, constituency, latitude, longitude  FROM myclientinfo WHERE username='$curruser' ");

			$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

			echo $clientID=$row['clientID'];
			echo $clientFname=$row['fName'];
			echo $clientSname=$row['sName'];
			echo $clientEmail=$row['email'];
			echo $clientPhone=$row['phone'];
			echo $county=$row['county'];
			echo $constituency=$row['constituency'];
			echo $clientLocLatitude=$row['latitude'];
			echo $clientLocLongitude=$row['longitude'];

			$sql = "SELECT workerID, fName, sName, email, phone FROM myworkersinfo WHERE workerSkills='$workerSkills' AND (county = '$county' OR constituency='$constituency') ORDER BY jobCount ASC LIMIT 1";

			/*$sql = "SELECT workerID, fName, sName, email, phone FROM myworkersinfo WHERE workerSkills='Painter' AND (county = 'Nairobi' OR constituency='Parklands') ORDER BY jobCount ASC LIMIT 1";*/
			
			$result= mysqli_query($db,$sql);

			/*if($result)
			{
				echo "not null";
			}
			else
				echo mysqli_error($db);*/

			$row= mysqli_fetch_assoc($result);
			
			
			if(mysqli_num_rows($result) > 0)
			{
				echo $workerID=$row['workerID'];
				echo $workerFname=$row['fName'];
				echo $workerSname=$row['sName'];
				echo $workerEmail=$row['email'];
				echo $workerPhone=$row['phone']; 

				$sql1 = "INSERT INTO tbljobOrders (clientID, clientUsername, clientFname, clientSname, clientEmail, workerID, workerFname, workerSname, workerEmail, jobDescription, jobDate,totalCost, clientLocLatitude, clientLocLongitude, clientPhone, workerPhone)
		   		VALUES ('$clientID','$curruser','$clientFname','$clientSname','$clientEmail','$workerID','$workerFname','$workerSname','$workerEmail','$jobDescription',
		   		'$jobDate','$totalCost','$clientLocLatitude','$clientLocLongitude','$clientPhone','$workerPhone')";

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql1) == TRUE){
		   			echo  "New record created successfully";

		   		}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}



		   		$sql2 = "Update myworkersinfo set jobCount = jobCount + 1 where workerID = '$workerID'";
		   		mysqli_query($db,$sql2);

		   		header("location: mailer.php");

			}


			

		/*if (query($sql) === TRUE) {
		    echo "New record created successfully";
		    //header('location: ../html/index.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
	else {
		$error = "The booking must be a future date";
	}*/	
}

?>