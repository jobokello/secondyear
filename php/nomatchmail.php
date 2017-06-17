<?php
require '../PHPMailer/PHPMailerAutoload.php';
include('bookjob.php');

			echo $curruser = $_SESSION['username'];

			$sql = "SELECT clientID,clientFname,clientSname,clientEmail,workerID,workerFname,workerSname,workerEmail,jobDescription,jobDate,totalCost,clientLocLatitude,clientLocLongitude,clientPhone,workerPhone FROM tbljoborders WHERE clientUsername = '$curruser' ORDER BY jobID DESC";

			$result = mysqli_query($db,$sql);

			$row = mysqli_fetch_assoc($result);

		if (mysqli_fetch_assoc($result) > 0) {

			echo $clientID = $row['clientID'];
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
		}else{
			echo "Error: " . $sql . "<br>" . $db->error;
			header("location: ../html/home.php");
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

$mail->Subject = 'No match found';
$mail->Body    =  "<br>Dear $clientFname $clientSname this is to notify you that your order has been received and you will be served by $workerFname $workerSname on $jobDate for the following order description:<br>$jobDescription. <br>Kinldly Finish your payment from your order to be processed completely. Once your order has been completed you will be required to login to  your account and comfirm the order delivery. You are also only allowed to cancel atleast a day prior to your mentioned order date.<br>Feel free to contact us with any complaints and quetsions.<br>Regards<br>
The Fundis.";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    header("location: ../html/home.php");
}
?>