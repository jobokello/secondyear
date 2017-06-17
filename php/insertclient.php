<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thefundis";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

		$fName = trim($_POST["fName"]);
		$sName = trim($_POST["sName"]);
		$username = trim($_POST["userName"]);
		$email = trim($_POST["email"]);
		$phone = $_POST["phone"];
		$county = trim($_POST["county"]);
		$constituency = trim($_POST["constituency"]);
		$clientPassWord = md5($_POST["clientPassWord"]);
		$securityQuestion = trim($_POST["securityQuestion"]);
		$securityAnswer = md5($_POST["securityAnswer"]);
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];


	$sql = "INSERT INTO myclientInfo (fName, sName, userName, email, phone, county, constituency, clientPassWord, securityQuestion, securityAnswer, latitude, longitude)
	    VALUES ('$fName','$sName','$username','$email','$phone','$county','$constituency',
	    '$clientPassWord','$securityQuestion','$securityAnswer','$latitude','$longitude')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('location: ../html/clientaccountsuccess.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>
</html>