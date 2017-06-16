<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Client Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/background.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
<style>

.wrapper
{
	width:800px;
	margin:0 auto;
}
h1
{
	font-size:24px;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight:bold;
	color:#000;
}
h1 a
{
	color:#000;
}

label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>
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
				<li><a href="#">about Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--put here stuff you want to be on the left of the nav bar-->
			</ul>
		</div>
	</div>

</nav>
<br>
<br>
<br>


<div class="wrapper">
<div align="center">
<h1><a href="http://www.eggslab.net/php-login-script">Client Login</a></h1>
<table border="0">
<tr>
<td>
<form method="post" action="">
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $error;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="username"><span>Username : </span> <br/><br/></label></div></td>
<td><input name="username" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password"><span>Password : </span><br/><br/></label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td>
	<div align="center">
	  <input type="submit" name="submit" value="Login!" />
	</div>
</td>
</tr>
</table>
<br/>
<p align="center">Dont have an account? <a href="client registration.php">Sign up.</a></p>
</form>
</td>
</tr>

</table>
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
            </ul>
        </div>

        <div class="gridInfo col-md-3 col-sm-3">
            <h5>Social Media</h5>
        </div>
    </div>
</footer>
</body>
</html>     
    