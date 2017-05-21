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

$sql = "INSERT INTO myclientInfo (fName, sName, userName, email, phone, county, constituency, clientPassWord, latitude, longitude)
    VALUES ('$_POST[fName]','$_POST[sName]','$_POST[userName]','$_POST[email]','$_POST[phone]','$_POST[county]','$_POST[constituency]',
    '$_POST[clientPassWord]','$_POST[latitude]','$_POST[longitude]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>