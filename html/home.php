<?php
	include("check.php");
	include("../php/location.php");	
	//include("../mailerworker.php");
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
				<li><a href="clientpendingjobs.php">Orders and Confirmations</a></li>
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
<div class="container-fluid">
	<div class="col-sm-6 col-md-6">
		<h3 class="hello">Hello, <strong><?php echo $login_user;?>!</strong></h3>
		<p>Kindly fill in the form with the details of your job specifications and we will try our best to link you to the closest individual with the required skills to help you out.</p>

		<form action="../php/bookjob.php" method="post">
		<fieldset>
				<legend style="text-align: center">Booking Details</legend>
				<div class="form-group col-xs-6">
                    <label for="workerSkills">Skills Category:</label>
                    <input list="workerSkills" class="form-control"  id ="workerSkills" name="workerSkills" required  autofocus title="Please enter your your skill category" onchange="pricefix();">
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
	            <div class="form-group col-md-6 col-sm-6 col-xs-6">
	                <label for="jobDescription">Job Description:</label>
	                <textarea class="form-control" id="jobDescription" name="jobDescription" required title="Please give a short description of the job you want done." required></textarea>
	            </div>
	            <div class="form-group col-md-6 col-sm-6 col-xs-6">
	                <label for="date">Date:</label>
	                <input type="date" class="form-control" id="date" name="date" required title="Please enter a future date on which you want the job done." required>
	            </div>
	            <div class="form-group col-md-6 col-sm-6 col-xs-6">
	                <label for="totalCost">Total Cost in ksh:</label>
	                <input type="text" class="form-control" id="totalCost" name="totalCost" required title="This is the basic cost of the service you'll receive" readonly="yes" required>

	            </div>
	            <br/>
	            <br/>
	            <!--<h5 align="center" class="error"><?php echo $error;?></h5>-->
	            <br/>
	            <br/>
	            <button type="submit" name="submit" class="btn btn-info btn-block">Confirm Booking</button>
        </fieldset>
		</form>
		
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
<script type="text/javascript">
			var skills = document.getElementById('workerSkills');
    		var	wages = document.getElementById('totalCost');
    		var	description = document.getElementById('jobDescription');
    		
			description.onchange = function () { 
				
				/*wages.value= 10;
				alert(wages.value);*/

				 if (skills.value == "Carpenter") {
			    	var price = "650";
			        alert("Your total cost for the service will be ksh. 650 for the day");
			        wages.value = price;
			        //alert(wages.value);
			    }

			    else if (skills.value == "Cleaner") {
			    	var price = "700";
			        alert("Your total cost for the service will be ksh. 700 for the day");
			        wages.value = price;
			    }

			    else if (skills.value == "Electrician") {
			    	var price ="860";
			        alert("Your total cost for the service will be ksh. 860 for the day");
			        wages.value = price;
			    }

			    else if (skills.value == "Plumber") {
			    	var price = "745";
			        alert("Your total cost for the service will be ksh. 745 for the day");
			        wages.value = price;
			    }
			   else if (skills.value == "Mechanic") {
			    	var price = "1500";
			        alert("Your total cost for the service will be ksh. 1500 for the day");
			        wages.value = price;
			    }

			   else if (skills.value == "Painter") {
			    	var price = "950";
			        alert("Your total cost for the service will be ksh. 950 for the day");
			        wages.value = price;
			    }

			    else if (skills.value == "Welder") {
			    	var price = "800";
			        alert("Your total cost for the service will be ksh. 800 for the day");
			        wages.value = price;
			    }

			    else if (skills.value == "Gardener/Landscape artist") {
			    	var price = "700";
			        alert("Your total cost for the service will be ksh. 700 for the day");
			        wages.value = price;
			    }

			   else if (skills.value == "Car driver") {
			   		var price = "900"
			        alert("Your total cost for the service will be ksh. 900 for the day ");
			        wages.value = price;
			    }
        	};

</script>
</body>
</html>