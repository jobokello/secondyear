<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login To Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>
<body>

<br> 

<div class="col-md-4">
<h2>LoginTo Dashboard !</h2>
		<form  method="post" action="login.php">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user"></i></div>
					<input type="text" class="form-control" id="login_username" placeholder="Enter user name.." name="user_name">
				</div>
				</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-lock"></i></div>
					<input type="password" class="form-control" id="password" placeholder="Password" name="pass">
				</div>
		  	</div>
			<input type="submit" id="login_btn" class="btn btn-success btn-block bt-login" data-loading-text="Signing In...." value="Login" name="login">
			<div class="clearfix"></div>
			
					
					
					
				
		</form>
	</div>
	
 	<!-- - Login Model Ends Here -->


   <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


  </body>
</html>
<?php

include("../includes/db.php");

if(isset($_POST['login'])){



$user_name = $_POST['user_name'];
$user_pass = $_POST['pass'];

$login_query="select * from user where
			user_name='$user_name' AND pass='$user_pass'";
			
$run = mysql_query($login_query);

if(mysql_num_rows($run)>0){


$_SESSION['user_name']= $user_name;

echo "<script>window.open('index.php','_self')</script>";


}

else{
echo "<script>alert('User Name or Password Incorrect')</script>";

}

}
?>
	