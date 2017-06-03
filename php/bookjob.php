<?php
	include('../html/check.php');
	//include('../html/connection.php');


	/*$date_now = new DateTime();
 	$inDate  =$_POST["date"];
	if ($inDate > $date_now) {*/

			$curruser = $_SESSION['username'];

			$workerSkills = trim($_POST["workerSkills"]);
			$jobDescription = trim($_POST["jobDescription"]);
			$jobDate = trim($_POST["date"]);
			$totalCost = trim($_POST["totalCost"]);

			$ses_sql = mysqli_query($db,"SELECT clientID, fName, sName, email, phone, county, constituency, latitude, longitude  FROM myclientinfo WHERE username='$curruser' ");

			$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

			$clientID=$row['clientID'];
			$clientFname=$row['fName'];
			$clientSname=$row['sName'];
			$clientEmail=$row['email'];
			$clientPhone=$row['phone'];
			$county=$row['county'];
			$constituency=$row['constituency'];
			$clientLocLatitude=$row['latitude'];
			$clientLocLongitude=$row['longitude'];

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
				$workerID=$row['workerID'];
				$workerFname=$row['fName'];
				$workerSname=$row['sName'];
				$workerEmail=$row['email'];
				$workerPhone=$row['phone']; 

				$sql = "INSERT INTO tbljobOrders (clientID, clientFname, clientSname, clientEmail, workerID, workerFname, workerSname, workerEmail, jobDescription, jobDate, clientLocLatitude, clientLocLongitude, clientPhone, workerPhone)
		   		VALUES ('$clientID','$clientFname','$clientSname','$clientEmail','$workerID','$workerFname','$workerSname','$workerEmail','$jobDescription',
		   		'$jobDate','$clientLocLatitude','$clientLocLongitude','$clientPhone','$workerPhone')";

		   		mysqli_query($db,$sql);

		   		$sql2 = "Update myworkersinfo set jobCount = jobCount + 1 where workerID = '$workerID'";
		   		mysqli_query($db,$sql2);

			} else { 
				$error = "There is no existing worker in the system to match your job requirement.kindly try again after a short while";
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
?>