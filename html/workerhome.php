<?php
	include("workercheck.php");	

	if ($result = mysqli_query($db, "SELECT * FROM tbljoborders WHERE workerJobStatus='pending' AND workerUsername='$login_user'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}
if ($result = mysqli_query($db, "SELECT * FROM tbljoborders WHERE workerUsername='$login_user'")) {

    /* determine number of rows result set */
    $row_served = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_served);

    /* close result set */
    mysqli_free_result($result);
}
if ($result = mysqli_query($db, "SELECT * FROM tbljoborders WHERE (workerJobStatus='confirmed' AND clientJobStatus='confirmed') AND workerUsername='$login_user'")) {

    /* determine number of rows result set */
    $row_success = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_success);

    /* close result set */
    mysqli_free_result($result);
}
if ($result = mysqli_query($db, "SELECT * FROM tbljoborders WHERE (workerJobStatus='confirmed' AND clientJobStatus='confirmed') AND workerUsername='$login_user'")) {

    /* determine number of rows result set */
    $row_payment = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_payment);

    /* close result set */
    mysqli_free_result($result);
}
if ($result = mysqli_query($db, "SELECT * FROM tbljoborders WHERE (workerJobStatus='cancelled' AND clientJobStatus='cancelled') AND workerUsername='$login_user'")) {

    /* determine number of rows result set */
    $row_refund = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_refund);

    /* close result set */
    mysqli_free_result($result);
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/background.css">
	<style type="text/css">
		p,.container li{
			font-size: 1.6em;
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>worker account Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
				<li><a href="#">Book Job</a></li>
				<li><a href="workerpendingjobs.php">Orders and Confirmations <span class="badge"><?php echo $row_cnt;?></span></a></li>
				<li><a href="#">about Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
				<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
				<li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"> <?php echo $login_user;?></span><span ></span></a>

				<li><a href="workerlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<span></span></a></li>
			</ul>
		</div>
	</div>

</nav>
<br/>
<br/>
<div class="container">
<h1 class="hello">Hello, <strong><?php echo $login_user;?>!</strong></h1>
<p>The Fundis family woul like to thank you for effort in service to our esteemed clients<br>Through your service have been able to achieve the following.<br></p>
<ul>
	<li><img src="../icons/customer_32.png"> Number of customers served was:<span class="badge"><?php echo $row_served;?></span> </li>
	<li><img src="../icons/success_32.png">Number of successful order deliveries was:<span class="badge"><?php echo $row_success;?></span></li>
	<li><img src="../icons/receive_cash_32.png">Number of payment made to your account are:<span class="badge"><?php echo $row_payment;?></span> </li>
	<li><img src="../icons/refund_32.png">However due unavoidable circumstances we had to refund <span class="badge"><?php echo $row_refund;?></span> of our clients assigned to you</li>
</ul>
<br><p>Kindly check into your unconfirmed orders and confirm them if the client has been served.<br>If your are facing any challenges kindly feel free to cancel any orders and contact us afterwards so that we might know how to be of help the next time such an occurrence takes place.</p>

</div>

<footer class=" site-footer navbar navbar-fixed-bottom navbar-inverse container-fluid">
    <div id="theContent">
        <div class="col-md-12 col-sm-12">

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