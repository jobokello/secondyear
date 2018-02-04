<?php
include("../includes/db.php");
header("location: course.php");

$delete_id = $_GET['del'];

$delete_query = "delete from course where id='$delete_id'";

if(mysql_query($delete_query)){
	
	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>