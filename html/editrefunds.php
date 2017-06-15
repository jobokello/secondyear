
<?php
include("connection.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM tblrefunds WHERE refundID=$id";
$result =mysqli_query($db,$sql);
if($res = mysqli_fetch_array($result))
{
	$refundID = $res['refundID'];
	$clientID = $res['clientID'];
	$clientFname = $res['clientFname'];
	$clientSname = $res['clientSname'];
	$jobID = $res['jobID'];
	$refundAmount = $res['refundAmount'];
	$clientPhone = $res['clientPhone'];
	$refundStatus = $res['refundStatus'];
}else{
		 echo "Error: " . $sql . "<br>" . $db->error;
	}

?>
<?php
// including the database connection file
if(isset($_POST['update']))
{	

	
	$refundID = trim($_POST['refundID']);
	$clientID = trim($_POST['clientID']);
	$clientFname = trim($_POST['clientFname']);
	$clientSname = trim($_POST['clientSname']);
	$jobID = trim($_POST['jobID']);
	$refundAmount = trim($_POST['refundAmount']);
	$clientPhone = trim($_POST['clientPhone']);
	$refundStatus = trim($_POST['refundStatus']);	
	
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
		$sql1 = "UPDATE tblrefunds SET refundID='$refundID', clientID='$clientID', clientFname='$clientFname', clientSname='$clientSname', jobID='$jobID',
		refundAmount='$refundAmount', clientPhone='$clientPhone', refundStatus='$refundStatus' WHERE refundID=$id";

		if(mysqli_query($db,$sql1)==TRUE){
		//redirectig to the display page. In our case, it is index.php
		echo "update was successful";	
		header("Location: adminrefunds.php");
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
					<td>Refund ID</td>
					<td><input type="text" name="refundID" readonly value="<?php echo $refundID;?>"></td>
				</tr>
			
				<tr> 
					<td>Client ID</td>
					<td><input type="text" name="clientID" required value="<?php echo $clientID;?>"></td>
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
					<td>Order Number</td>
					<td><input type="text" name="jobID" required value="<?php echo $jobID;?>"></td>
				</tr>
				<tr> 
					<td>Amount Refundable</td>
					<td><input type="text" name="refundAmount" required value="<?php echo $refundAmount;?>"></td>
				</tr>
				<tr> 
					<td>Client's Phone no.</td>
					<td><input type="text" name="clientPhone" required value="<?php echo $clientPhone;?>"></td>
				</tr>
				<tr> 
					<td>Refund Status</td>
					<td><input type="text" name="refundStatus" required value="<?php echo $refundStatus;?>"></td>
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

