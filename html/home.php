<?php
	include("check.php");
	include("../php/location.php");	
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
				<li><a href="#">Orders and Confirmations</a></li>
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
<div class="container-fluid">
	<div class="col-sm-6 col-md-6">
		<h3 class="hello">Hello, <strong><?php echo $login_user;?>!</strong></h3>
		<p>Kindly fill in the form with the details of your job specifications and we will try our best to link you to the closest individual with the required skills to help you out.</p>
		<form action="../php/bookjob.php" method="post">
		<fieldset>
				<legend style="text-align: center">Booking Details</legend>
				<div class="form-group col-xs-6">
                    <label for="workerSkills">Skills Category:</label>
                    <input list="workerSkills" class="form-control"  name="workerSkills" required  autofocus title="Please enter your your skill category">
                    <datalist id="workerSkills">
                        <option value="Carpenter">
                        <option value="Cleaner">
                        <option value="Electrician">
                        <option value="Plumber">
                        <option value="Mechanic">
                        <option value="Painter">
                        <option value="Welder">
                        <option value="Gardener/Landscape artist">
                        <option value="Car driver">
                    </datalist>
                 </div>   
	            <div class="form-group col-md-6 col-sm-6">
	                <label for="jobDescription">Job Description:</label>
	                <textarea class="form-control" id="jobDescription" name="jobDescription" required title="Please give a short description of the job you want done." required></textarea>
	            </div>
	            <div class="form-group col-xs-6">
	                <label for="date">Date:</label>
	                <input type="date" class="form-control" id="date" name="date" min="<?php echo date('DD-MM-YY')?>" required title="Please enter a future date on which you want the job done." required>
	            </div>
	            <div class="form-group col-xs-6">
	                <label for="totalCost">Your Total Cost in ksh:</label>
	                <input type="text" class="form-control" id="totalCost" name="totalCost" required title="Please enter your second name" readonly="yes" required>
	            </div>
	            <br/>
	            <br/>
	            <button type="submit" class="btn btn-info btn-block">Confirm Booking</button>
        </fieldset>
		</form>
		<script type="text/javascript" src="../javascript/minimumwage.js"></script>
	</div>	
</div>

</div>
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
</body>
</html>