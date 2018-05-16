<?php
include("connection.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM tbljoborders WHERE jobID=$id";
$result =mysqli_query($db,$sql);
while($res = mysqli_fetch_array($result))
{
	$jobID = $res['jobID'];
	$clientID = $res['clientID'];
	$clientUsername = $res['clientUsername'];
	$clientFname = $res['clientFname'];
	$clientSname = $res['clientSname'];
	$clientEmail = $res['clientEmail'];
	$workerID = $res['workerID'];
	$workerUsername = $res['workerUsername'];
	$workerFname = $res['workerFname'];
	$workerSname = $res['workerSname'];
	$workerEmail = $res['workerEmail'];
	$jobDescription = $res['jobDescription'];
	$jobDate = $res['jobDate'];
	$totalCost = $res['totalCost'];
	$paymentCode = $res['paymentCode'];
	$clientLocLatitude = $res['clientLocLatitude'];
	$clientLocLongitude = $res['clientLocLongitude'];
	$clientJobStatus = $res['clientJobStatus'];
	$workerJobStatus = $res['workerJobStatus'];
	$clientPhone = $res['clientPhone'];
	$workerPhone = $res['clientPhone'];
}/*else{
		 printf("Error: %s\n", mysqli_error($db));
	}*/

?>
<?php
// including the database connection file
if(isset($_POST['update']))
{	

	
	echo $jobID = trim($_POST['jobID']);
	echo $clientID = trim($_POST['clientID']);
	echo $clientUsername = trim($_POST['clientUsername']);
	echo $clientFname = trim($_POST['clientFname']);
	echo $clientSname = trim($_POST['clientSname']);
	echo $clientEmail = trim($_POST['clientEmail']);
	echo $workerID = trim($_POST['workerID']);
	echo $workerUsername = trim($_POST['workerUsername']);
	echo $workerFname = trim($_POST['workerFname']);
	echo $workerSname = trim($_POST['workerSname']);
	echo $workerEmail = trim($_POST['workerEmail']);
	echo $jobDescription = trim($_POST['jobDescription']);
	echo $jobDate = trim($_POST['jobDate']);
	echo $totalCost = trim($_POST['totalCost']);
	echo $paymentCode = trim($_POST['paymentCode']);
	echo $clientLocLatitude = trim($_POST['clientLocLatitude']);
	echo $clientLocLongitude = trim($_POST['clientLocLongitude']);
	echo $clientJobStatus = trim($_POST['clientJobStatus']);
	echo $workerJobStatus = trim($_POST['workerJobStatus']);
	echo $clientPhone = trim($_POST['clientPhone']);
	echo $workerPhone = trim($_POST['clientPhone']);	
	
	// checking empty fields
	/*if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	}*/ //front end validation is much preferred	
		//updating the table
		$sql1 = "UPDATE tbljoborders SET jobID='$jobID', clientID='$clientID', clientUsername='$clientUsername', clientFname='$clientFname', clientSname='$clientSname', clientEmail='$clientEmail', workerID='$workerID', workerUsername='$workerUsername', workerFname='$workerFname', workerSname='$workerSname', workerEmail='$workerEmail', jobDescription='$jobDescription', jobDate='$jobDate', totalCost='$totalCost', paymentCode='$paymentCode', clientLocLatitude='$clientLocLatitude', clientLocLongitude='$clientLocLongitude', clientJobStatus='$clientJobStatus', workerJobStatus='$workerJobStatus', clientPhone='$clientPhone', workerPhone='$workerPhone' WHERE clientID=$id";

		if(mysqli_query($db,$sql1)==TRUE){
		//redirectig to the display page. In our case, it is index.php
		echo "update was successful";	
		header("Location: adminorders.php");
	}else{
		echo "Error: " . $sql1 . "<br>" . $db->error;
	}
  }
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.error{
		color:red;
		font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
		font-size:16px;
	}
	table {
    font-family: arial, sans-serif !important;
    border-collapse: collapse !important;
    width: 100% !important;
}

td, th {
    border: 1px solid #dddddd !important;
    text-align: center !important;
    padding: 8px !important;

}

tr:nth-child(even) {
    background-color: #dddddd !important;
}
	</style>
	<link rel="stylesheet" href="style.css" type="text/css" />	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">The Fundis</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#about">pages</a></li>
            <li><a href="#contact">posts</a></li>
            <li><a href="#contact">users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Welcome Joxide</a></li>
            <li><a href="#about"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header style="position: fixed;" id="header">
	    <div class="container">
		    <div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <br><small>Edit Client Information</small></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown create">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    Create content
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="#">Add client</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="adminpanel.php">Back to home page</a></li>
					  </ul>
					</div>
				</div>		
		    </div>
	    </div><!-- /.container -->
	</header>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<form name="form1" method="post" action="">
			<table border="0">
				<tr> 
					<td>Order Number</td>
					<td><input type="text" name="jobID" readonly value="<?php echo $jobID;?>"></td>
				</tr>
			
				<tr> 
					<td>Client ID</td>
					<td><input type="text" name="clientID" required value="<?php echo $clientID;?>"></td>
				</tr>
				<tr> 
					<td>Client's Username</td>
					<td><input type="text" name="clientUsername"  required value="<?php echo $clientUsername;?>"></td>
				</tr>
				<tr> 
					<td>Client's First Name</td>
					<td><input type="text" name="clientFname" required value="<?php echo $clientFname;?>"></td>
				</tr>
				<tr> 
					<td>Client's Last Name</td>
					<td><input type="text" name="clientSname" required value="<?php echo $clientSname;?>"></td>
				</tr>
				<tr> 
					<td>Client's E-mail</td>
					<td><input type="text" name="clientEmail" required value="<?php echo $clientEmail;?>"></td>
				</tr>
				<tr> 
					<td>Worker ID</td>
					<td><input type="text" name="workerID" required value="<?php echo $workerID;?>"></td>
				</tr>
				<tr> 
					<td>Worker's Username</td>
					<td><input type="text" name="workerUsername" required value="<?php echo $workerUsername;?>"></td>
				</tr>
				<tr> 
					<td>Worker's First Name</td>
					<td><input type="text" name="workerFname" required value="<?php echo $workerFname;?>"></td>
				</tr>
				<tr> 
					<td>Worker's Last Name</td>
					<td><input type="text" name="workerSname" required value="<?php echo $workerSname;?>"></td>
				</tr>
				<tr> 
					<td>Worker's E-mail</td>
					<td><input type="text" name="workerEmail" required value="<?php echo $workerEmail;?>"></td>
				</tr>
				<tr> 
					<td>Description</td>
					<td><input type="text" name="jobDescription" required value="<?php echo $jobDescription;?>"></td>
				</tr>
				<tr> 
					<td>Date</td>
					<td><input type="text" name="jobDate" required value="<?php echo $jobDate;?>"></td>
				</tr>
				<tr> 
					<td>Cost</td>
					<td><input type="text" name="totalCost" required value="<?php echo $totalCost;?>"></td>
				</tr>
				<tr> 
					<td>M-pesa Code</td>
					<td><input type="text" name="paymentCode" readonly value="<?php echo $paymentCode;?>"></td>
				</tr>
			
				<tr> 
					<td>Client's Latitude coordinates</td>
					<td><input type="text" name="clientLocLatitude" required value="<?php echo $clientLocLatitude;?>"></td>
				</tr>
				<tr> 
					<td>Client's Longitude coordinates</td>
					<td><input type="text" name="clientLocLongitude"  required value="<?php echo $clientLocLongitude;?>"></td>
				</tr>
				<tr> 
					<td>Client's Order Status</td>
					<td><input type="text" name="clientJobStatus" required value="<?php echo $clientJobStatus;?>"></td>
				</tr>
				<tr> 
					<td>Worker's Order Status</td>
					<td><input type="text" name="workerJobStatus" required value="<?php echo $workerJobStatus;?>"></td>
				</tr>
				<tr> 
					<td>Client's Phone no.</td>
					<td><input type="text" name="clientPhone" required value="<?php echo $clientPhone;?>"></td>
				</tr>
				<tr> 
					<td>Worker's Phone no.</td>
					<td><input type="text" name="workerPhone" required value="<?php echo $workerPhone;?>"></td>
				</tr>
				<tr>
					<!--<td><input type="hidden" name="id" value=<?php //echo $_GET['id'];?>></td>-->
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>	
</body>
</html>

