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

	$sql = "INSERT INTO myworkersinfo (fName, sName, userName, natID, workerSkills, tertiaryInstitution, testimonial, email, phone, county, constituency, workerPassWord)
	    VALUES ('$_POST[fName]','$_POST[sName]','$_POST[userName]','$_POST[natID]','$_POST[workerSkills]','$_POST[tertiaryInstitution]','$_FILES[testimonial]','$_POST[email]','$_POST[phone]','$_POST[county]','$_POST[constituency]','md5(str)$_POST[workerPassWord]')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
</html>