
<?php
include("connection.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM myclientinfo WHERE clientID=$id";
$result =mysqli_query($db,$sql);
while($res = mysqli_fetch_array($result))
{
	$clientID = $res['clientID'];
	$fName = $res['fName'];
	$sName = $res['sName'];
	$username = $res['username'];
	$email = $res['email'];
	$phone = $res['phone'];
	$county = $res['county'];
	$constituency = $res['constituency'];
	$clientPassWord = $res['clientPassWord'];
	$securityQuestion = $res['securityQuestion'];
	$securityAnswer = $res['securityAnswer'];
	$latitude = $res['latitude'];
	$longitude = $res['longitude'];
}/*else{
		 printf("Error: %s\n", mysqli_error($db));
	}*/

?>
<?php
// including the database connection file
if(isset($_POST['update']))
{	

	
	$clientID = trim($_POST['clientID']);
	$fName = trim($_POST['fName']);
	$sName = trim($_POST['sName']);
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$county = trim($_POST['county']);
	$constituency = trim($_POST['constituency']);
	$clientPassWord = md5($_POST['clientPassWord']);
	$securityQuestion = ($_POST['securityQuestion']);
	$securityAnswer = md5($_POST['securityAnswer']);
	$latitude = ($_POST['latitude']);
	$longitude = ($_POST['longitude']);	
	
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
		$sql1 = "UPDATE myclientinfo SET clientID='$clientID', fName='$fName', sName='$sName', username='$username', email='$email', phone='$phone', county='$county', constituency='$constituency', clientPassWord='$clientPassWord', securityQuestion='$securityQuestion', securityAnswer='$securityAnswer', latitude='$latitude', longitude='$longitude' WHERE clientID=$id";

		if(mysqli_query($db,$sql1)==TRUE){
		//redirectig to the display page. In our case, it is index.php
		//echo "update was successful";	
		header("Location: adminclients.php");
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
					<td>Client ID</td>
					<td><input type="text" name="clientID" readonly value="<?php echo $clientID;?>"></td>
				</tr>
			
				<tr> 
					<td>First Name</td>
					<td><input type="text" name="fName" required value="<?php echo $fName;?>"></td>
				</tr>
				<tr> 
					<td>Last Name</td>
					<td><input type="text" name="sName"  required value="<?php echo $sName;?>"></td>
				</tr>
				<tr> 
					<td>Username</td>
					<td><input type="text" name="username" required value="<?php echo $username;?>"></td>
				</tr>
				<tr> 
					<td>E-mail</td>
					<td><input type="text" name="email" required value="<?php echo $email;?>"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" required value="<?php echo $email;?>"></td>
				</tr>
				<tr> 
					<td>Phone no.</td>
					<td><input type="text" name="phone" required value="<?php echo $phone;?>"></td>
				</tr>
				<tr> 
					<td>County</td>
					<td><input type="text" name="county" required value="<?php echo $county;?>"></td>
				</tr>
				<tr> 
					<td>Constituency</td>
					<td><input type="text" name="constituency" required value="<?php echo $constituency;?>"></td>
				</tr>
				<tr> 
					<td>Password</td>
					<td><input type="text" name="clientPassWord" required value="<?php echo $clientPassWord;?>"></td>
				</tr>
				<tr> 
					<td>Security Question</td>
					<td><input type="text" name="securityQuestion" required value="<?php echo $securityQuestion;?>"></td>
				</tr>
				<tr> 
					<td>Security Answer</td>
					<td><input type="text" name="securityAnswer" required value="<?php echo $securityAnswer;?>"></td>
				</tr>
				<tr> 
					<td>Latitude</td>
					<td><input type="text" name="latitude" required value="<?php echo $latitude;?>"></td>
				</tr>
				<tr> 
					<td>Longitude</td>
					<td><input type="text" name="longitude" required value="<?php echo $longitude;?>"></td>
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

