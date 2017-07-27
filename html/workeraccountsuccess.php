<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Fundis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/background.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.request{
			background-image: url(images/appledown.ico);
		}
		.match{
			background-image: url(icons/requst.ico);
		}
		.pay{
			background-image: url(icons/requst.ico);
		}
		.served{
			background-image: url(icons/requst.png);
		}
		.work{
			background-image: url(icons/requst.ico);
		}
		.bodywise{
			background-image: url(../images/website.jpg);
		}
		#about_us ul li,#how_it_works,p{
			font-size: 1.6em;

		}
		.jumbotron img{
   			display: inline;
   			size: cover;
   
}
	</style>
</head>
<body>
<div class="bodywise">
<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">The Fundis</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="html/index.php">Book Job</a></li>
				<li><a href="#">about Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
				<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up<span class="caret"></span></a>
					<ul class="dropdown-menu thedropdown">
						<li><a href="html/client%20registration.php">Client</a></li>
						<li><a href="html/worker%20registration.php">Worker</a></li>
					</ul>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
					<ul class="dropdown-menu thedropdown">
						<li><a href="index.php">Client</a></li>
						<li><a href="workerindex.php">Worker</a></li>
					</ul>
			</ul>
		</div>
	</div>

</nav>
<br>
<br>
<br>
<br>

<div class="container">
<div class="page-header">
	<h1>Welcome to the Fundis Fixem!</h1>
</div>
<h3>Account created successfully <a href="../html/workerindex.php">click here</a> log into your account</h3>

</div>
</div>
<footer class=" site-footer navbar navbar-inverse navbar-fixed-bottom  container-fluid">
	<div id="theContent">
		<div class="col-md-3 col-sm-3">

		</div>
		<div class="gridInfo col-md-3 col-sm-3">
			<h5>Help & support</h5>
			<ul >
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact US</a></li>
			</ul>
		</div>

		<div class="gridInfo col-md-3 col-sm-3">
			<h5>Social Media</h5>
		<ul>
			<li><img src="../icons/Facebook_32.png"></span></li>
			<li><img src="../icons/Twitter_32.png"></span></li>
		<ul>
		</div>
	</div>
</footer>
</body>
</html>