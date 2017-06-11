<?php
	include("check.php");
	include("../php/location.php");

	echo $curruser = $_SESSION['username'];

	$ses_sql = mysqli_query($db,"SELECT jobID, totalCost FROM tbljoborders WHERE clientUsername ='$curruser' order by jobID desc");

			$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

			echo $accountID=$row['jobID'];
			echo $cost=$row['totalCost'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>User account Home</title>
	<style type="text/css">
		.error{
		color:red;
		font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
		font-size:16px;
	}
	</style>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.html">The Fundis</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="../index.html">Home</a></li>
				<li><a href="#">about Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
				<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
				<li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"><strong> <?php echo $login_user;?></strong></span><span ></span></a></li>

				<li><a href="workerlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<span></span></a></li>
			</ul>
		</div>
	</div>

</nav>
<br/>
<br/>
<br/>
<br/>
<br/>
<form action="../php/mpesaordernumber.php" method="post">
		<fieldset>
				<legend style="text-align: left;">Order Payment procedure</legend>
			<div align="left">
				<ol>
					<li>Go to Safaricom SIM Tool Kit and select <strong>M-pesa</strong>.</li>
					<li>In the M-pesa menu select <strong>Lipa na M-pesa</strong>.</li>
					<li>Select <strong>Paybill</strong>.</li>
					<li>Enter Business no: <strong>445123</strong>.</li>
					<li>Enter account number: <strong><?php echo $accountID?></strong>.</li>
					<li>Enter amount <strong><?php echo$cost?></strong>.</li>
					<li>Enter  your M-pesa pin.</li>
					<li>Confirm if payment is made to <strong>The Fundis</strong> then press <strong>OK</strong>.</li>
					<li>Input the <strong>M-pesa confirmation code</strong> eg.<strong>LF9480DX00</strong> in the slot below.</li>
				</ol> 
	            <div class="form-group col-md-6 col-sm-6 col-xs-6">
	                <label for="paymentCode">M-pesa confirmation code:</label>
	                <input type="text" class="form-control" id="paymentCode" name="paymentCode" required title="Please give enter the M-pesa confirmation code from your payment." autofocus required maxlength="10" minlength="10">
	            </div>
	        </div>
	            
	            <br/>
	            <br/>
	            <!--<h5 align="center" class="error"><?php echo $error;?></h5>-->
	            <br/>
	            <br/>
	            <div align="left" class = "col-md-6 col-sm-6 col-xs-6">
	            <button type="submit" name="submit" class="btn btn-info btn-default">Complete payment</button>
	            </div>
        </fieldset>
		</form>
	
	<footer class=" site-footer navbar navbar-fixed-bottom navbar-inverse container-fluid">
	    <div id="theContent">
	        <div class="col-md-12 col-sm-12">

	        </div>
	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Help & support</h5>
	            <ul >
	                <li><a href="#">Home</a></li>
	                <li><a href="#">How it works</a></li>
	                <li><a href="#">About Us</a></li>
	                <li><a href="#">Contact US</a></li>
	                <li><a target= "_blank" href="https://www.google.com/maps/dir/?api=1&destination= <?php echo $latitude;?>,<?php echo $longitude;?>">direction</a></li>
	            </ul>
	        </div>

	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Social Media</h5>
	        </div>
	    </div>    
	</footer>
</div>
