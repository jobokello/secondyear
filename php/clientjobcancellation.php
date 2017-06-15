<?php
include_once("../html/check.php");
require '../PHPMailer/PHPMailerAutoload.php';
echo $id = $_GET['id'];

$sql = "update tbljobOrders set clientJobStatus ='cancelled', workerJobStatus='cancelled' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";

		   			$sql1 = "SELECT jobID, clientID, clientFname, clientSname, totalCost, clientPhone FROM tbljobOrders WHERE jobID='$id' AND clientJobStatus='cancelled'";

		   			$result= mysqli_query($db,$sql1);


					
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
						echo $clientID=$row['clientID'];
						echo $clientFname=$row['clientFname'];
						echo $clientSname=$row['clientSname'];
						echo $totalCost=$row['totalCost'];	
						echo $clientPhone=$row['clientPhone']; 

						$sql2 = "INSERT INTO tblrefunds (clientID, clientFname, clientSname, jobID, refundAmount, clientPhone)
				   		VALUES ('$clientID','$clientFname','$clientSname','$jobID','$totalCost','$clientPhone')";

				   		if(mysqli_query($db,$sql2)==TRUE){
				   			echo  "New record created successfully";
				   			$sql = "SELECT * FROM tbljoborders WHERE jobID = '$id'";

							$result = mysqli_query($db,$sql);
							$row= mysqli_fetch_assoc($result);

							if ($row > 0) {

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
							   		echo "Error: " . $sql . "<br>" . $db->error;	
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

								$mail->Subject = 'Order cancelled';
								$mail->Body    =  "<br>Dear $clientFname $clientSname this is to notify you that you order number: $jobID which was scheduled for $jobDate with the description $jobDescription has been cancelled. Your refund of Ksh.$totalCost is being processed and will issued out in the next 48 hours.<br>Feel free to contact us with any complaints and quetsions.<br>Regards<br>
								The Fundis.";
								$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

								if(!$mail->send()) {
								    echo 'Message could not be sent.';
								    echo 'Mailer Error: ' . $mail->ErrorInfo;
								} else {
								    echo 'Message has been sent';
								    //header("location: refundmailworker.php? myid=$passedjobid");
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
										$mail->addAddress($workerEmail);     // Add a recipient
										//$mail->addReplyTo('info@example.com', 'Information');
										//$mail->addCC('cc@example.com');
										//$mail->addBCC('bcc@example.com');

										//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
										//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
										$mail->isHTML(true);                                  // Set email format to HTML

										$mail->Subject = 'Job Order cancelled by client';
										$mail->Body    =  "<br>Dear $workerFname $workerFname this is to notify you that the order number: $jobID by $clientFname $clientSname which was scheduled for $jobDate with the description $jobDescription has been cancelled.<br>Regards<br>
										The Fundis.";
										$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

										if(!$mail->send()) {
										    echo 'Message could not be sent.';
										    echo 'Mailer Error: ' . $mail->ErrorInfo;
										} else {
										    echo 'Message has been sent also to worker';
										    header("location: ../html/clientpendingjobs.php");
										}
						
								}
				   		}else{
				   			echo "Error: " . $sql2 . "<br>" . $db->error;
				   		}
				   	}


		   				//header("location: refundmail.php? jobid = $id");

		   			}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;	
		   		}

		   


?>