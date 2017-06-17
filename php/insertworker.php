<!DOCTYPE html>
<html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "thefundis";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

		$fName = trim($_POST["fName"]);
		$sName = trim($_POST["sName"]);
		$username = trim($_POST["userName"]);
		$natID = trim($_POST["natID"]);
		$workerSkills = trim($_POST["workerSkills"]);
		$tertiaryInstitution = trim($_POST["tertiaryInstitution"]);
		$testimonial = trim($_POST["testimonial"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$county = trim($_POST["county"]);
		$constituency = trim($_POST["constituency"]);
		$workerPassWord = md5($_POST["workerPassWord"]);
		$securityQuestion = trim($_POST["securityQuestion"]);
		$securityAnswer = md5($_POST["securityAnswer"]);

	$sql = "INSERT INTO myworkersinfo (fName, sName, userName, natID, workerSkills, tertiaryInstitution, testimonial, email, phone, county, constituency, workerPassWord, securityQuestion, securityAnswer)
	    VALUES ('$fName','$sName','$username','$natID','$workerSkills','$tertiaryInstitution','$testimonial','$email','$phone','$county','$constituency',
	    '$workerPassWord','$securityQuestion','$securityAnswer')";
	    $uid = ($_POST['fName']);

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    session_start();
	    $_SESSION['user'] = $uid;
	    header("location: ../html/workeraccountsuccess.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
</html>