<?php	

			include('bookjob.php');

			$clientlocationlink = "https://www.google.com/maps/dir/?api=1&destination= $clientLocLatitude','$clientLocLongitude"

			$messageclient= "Hello Mr/Mr.$clientFname,
            <br /> <br />
            Thank you, for choosing us to serve you,
            <br/> <br />
            This mail sent to you to notify that the your match has been found kindly complete the payment procedure for your order to be finalized.
            <br /> <br />
            Thankyou.";

            $messageworker= "Hello Mr/Mr.$workerFname,
            <br /> <br />
            Thank you, for choosing us to work with us,
            <br/> <br />
            This mail sent to you to notify that the you have been chosen to attend to our client $clientFname $clientSname.
            The job description is: $jobDescription. You are required to deliver the servive on $jobDate.<br><br>
            After completion of the task kindly login to your account and confirm the duty.<br>
            If you are facing any issues that might prevent you from delivering the service then ensure that you will login to your account and cancel the job order before the specified date.a<br><br> 
            You can navigate to the clients premises using the following link:<br><br>$clientlocationlink
            
            <br /> <br />
            Thankyou.";

            	sendclientmail($clientEmail,$messageclient);
            	sendworkermail($workerEmail,$messageworker);

					function sendclientmail($clientEmail,$messageclient){
						require '../PHPMailer/PHPMailerAutoload.php';

						$mail = new PHPMailer;

						//$mail->SMTPDebug = 3;                               // Enable verbose debug output

						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = 'fundisfixem@gmail.com';                 // SMTP username
						$mail->Password = 'workers2017';                           // SMTP password
						$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 465;                                    // TCP port to connect to

						$mail->setFrom('fundisfixem@gmail.com', 'admin');
						$mail->addAddress($clientEmail);     // Add a recipient
						  
						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = 'Order received';
						$mail->MsgHTML ($messageclient);
						$mail->AltBody = ($messageclient);

						if(!$mail->send()) {
						    echo 'Message could not be sent.';
						    echo 'Mailer Error: ' . $mail->ErrorInfo;
						} else {
						    echo 'Message has been sent';
						}
					}

					function sendworkermail($messageworker,$workerEmail){
						
						require '../PHPMailer/PHPMailerAutoload.php';
						$mail = new PHPMailer;

						//$mail->SMTPDebug = 3;                               // Enable verbose debug output

						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = 'fundisfixem@gmail.com';                 // SMTP username
						$mail->Password = 'workers2017';                           // SMTP password
						$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 465;                                    // TCP port to connect to

						$mail->setFrom('fundisfixem@gmail.com', 'admin');
						$mail->addAddress($workerEmail);     // Add a recipient
						  
						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = 'New job order';
						$mail->MsgHTML ($messageworker);
						$mail->AltBody = ($messageworker);

						if(!$mail->send()) {
						    echo 'Message could not be sent.';
						    echo 'Mailer Error: ' . $mail->ErrorInfo;
						} else {
						    echo 'Message has been sent';
						}

					}
?>					

