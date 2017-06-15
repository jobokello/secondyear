<?php
	include('../html/check.php');
	require '../PHPMailer/PHPMailerAutoload.php';
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

			$sql = "SELECT workerID, fName, sName, username, email, phone FROM myworkersinfo WHERE workerSkills='$workerSkills' AND (county = '$county' OR constituency='$constituency') ORDER BY jobCount ASC LIMIT 1";

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
				echo $workerUsername=$row['username'];
				echo $workerEmail=$row['email'];
				echo $workerPhone=$row['phone']; 

				$sql = "INSERT INTO tbljobOrders (clientID, clientUsername, clientFname, clientSname, clientEmail, workerID,workerUsername, workerFname, workerSname, workerEmail, jobDescription, jobDate,totalCost, clientLocLatitude, clientLocLongitude, clientPhone, workerPhone)
		   		VALUES ('$clientID','$curruser','$clientFname','$clientSname','$clientEmail','$workerID','$workerUsername','$workerFname','$workerSname','$workerEmail','$jobDescription',
		   		'$jobDate','$totalCost','$clientLocLatitude','$clientLocLongitude','$clientPhone','$workerPhone')";

		   		//mysqli_query($db,$sql);
		   		//the above commented out query caused a double entry in the database
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";

		   		}else {

		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}



		   		$sql = "Update myworkersinfo set jobCount = jobCount + 1 where workerID = '$workerID'";
		   		mysqli_query($db,$sql);

		   		header("location: mailer.php");

			}else{

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'fundisfixem@gmail.com';                 // SMTP username
				$mail->Password = 'workers2017';                           // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    // TCP port to connect to

				$mail->setFrom('fundisfixem@gmail.com', 'The Fundis');
				$mail->addAddress($clientEmail);     // Add a recipient
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = 'No match found';
				$mail->Body    =  "<br>Dear $clientFname $clientSname this is to notify you no match could be found for your job order. We are working increasing our worker database so to deal with such issues in the future. kindly check in later to see if we might be having any free workers.<br>Feel free to contact us with any complaints and quetsions.<br>Regards<br>
				The Fundis.";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if(!$mail->send()) {
				    echo 'Message could not be sent.';
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					header("location: ../html/home.php");
				}
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