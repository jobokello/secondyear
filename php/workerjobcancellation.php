<?php
include_once("../html/check.php");
require '../PHPMailer/PHPMailerAutoload.php';
echo $id = $_GET['id'];

$sql = "update tbljobOrders set workerJobStatus ='cancelled', clientJobStatus='cancelled' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";
		   		$sql3 = "SELECT * FROM tbljoborders WHERE jobID = '$id'";

                $result = mysqli_query($db,$sql3);
                $row= mysqli_fetch_assoc($result);

                if ($row > 0){

                    echo $jobID = $row['jobID'];
                    echo $clientFname = $row['clientFname'];
                    echo $clientSname = $row['clientSname'];
                    echo $clientEmail = $row['clientEmail'];
                    echo $workerID = $row['workerID'];
                    echo $workerFname = $row['workerFname'];
                    echo $workerSname = $row['workerSname'];
                    echo $workerEmail = $row['workerEmail'];
                    echo $jobDescription = $row['jobDescription'];
                    echo $jobDate = $row['jobDate'];
                    echo $totalCost = $row['totalCost'];
                    echo $clientLocLatitude = $row['clientLocLatitude'];
                    echo $clientLocLongitude = $row['clientLocLongitude'];
                    echo $clientPhone = $row['clientPhone'];
                    echo $workerPhone = $row['workerPhone']; 
                  }else {
                        echo "Error: " . $sql3 . "<br>" . $db->error;  
                  }

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

                  $mail->Subject = 'job cancelled by worker';
                  $mail->Body    =  "<br>Dear $clientFname $clientSname this is to notify you that you order number: $jobID which was scheduled for $jobDate with the description $jobDescription has been cancelled by $workerFname $workerSname due to unavoidable circumstances<br>You can however login into your account and make a new booking and we will try our best to hook you up to the next available employee.<br>We thank you for giving us the chance to serve you.<br>Feel free to contact us with any complaints and quetsions.<br>Regards<br>
                  The Fundis.";
                  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                  if(!$mail->send()) {
                      echo 'Message could not be sent.';
                      echo 'Mailer Error: ' . $mail->ErrorInfo;
                  } 
                  else {
                      	echo 'Message has been sent';
                      //header("location: refundmailworker.php? myid=$passedjobid");
                    	header("location: ../html/workerpendingjobs.php");
                  	}
		   			

		   		}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;
		   		}


?>