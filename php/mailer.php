<?php
require '../PHPMailer/PHPMailerAutoload.php';
include('bookjob.php');

			echo $curruser = $_SESSION['username'];

			//$sql = "SELECT clientID,";

			echo $workerSkills;
			echo $jobDescription;
			echo $jobDate;
			echo $totalCost;
			echo $clientID;
			echo $clientFname;
			echo $clientSname;
			echo $clientEmail;
			echo $clientPhone;
			echo $county;
			echo $constituency;
			echo $clientLocLatitude;
			echo $clientLocLongitude;
			echo $workerID;
			echo $workerFname;
			echo $workerSname;
			echo $workerEmail;
			echo $workerPhone; 



/*$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fundisfixem@gmail.com';                 // SMTP username
$mail->Password = 'workers2017';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('fundisfixem@gmail.com', 'admin');
$mail->addAddress($clientEmail);     // Add a recipient
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    =  " dear $clientFname <br>https://www.google.com/maps/dir/?api=1&destination=$clientLocLatitude,$clientLocLongitude";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}*/
?>