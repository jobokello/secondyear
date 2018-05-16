<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$sql1 = "SELECT clientID, fName, sName, username, email, phone, county, constituency, clientPassWord, securityQuestion, securityAnswer, latitude, longitude FROM myclientinfo ORDER BY clientID ASC"; // using mysqli_query instead
	$result= mysqli_query($db,$sql1);
?>
<!DOCTYPE html>
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
	    border: 0px solid #dddddd !important;
	    text-align: center !important;
	    padding: 8px !important;

	}

	tr:nth-child(even) {
	    background-color: #dddddd !important;
	}

	</style>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Admin Clients</title>
</head>

<body>
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
    <br>
    <br>
    <header style="position: fixed;" id="header">
	    <div class="container">
		    <div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>site management</small></h1>
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
<!--<a href="add.html">Add New Data</a><br/><br/>-->
	<!--<legend style="text-align: center; position: relative;">Clients List</legend>-->
	<table width='100%' style="border: ">
	
		<caption><legend style="text-align: center; position: relative;">Clients List</legend></caption>
		<tr bgcolor='#CCCCCC'>
			<th>ClientID</th>
			<th colspan="2">Client Names</th>
			<th>Username</th>
			<th>email</th>
			<th>phone</th>
			<th>County</th>
			<th>Constituency</th>
			<th>clientPassword</th>
			<th>securityQuestion</th>
			<th>securityAnswer</th>
			<th>latitude</th>
			<th>longitude</th>
			<th colspan="2">options</th>
		</tr>
	
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td width='20%'>".$res['clientID']."</td>";
		echo "<td width='20%'>".$res['fName']."</td>";
		echo "<td width='20%'>".$res['sName']."</td>";
		echo "<td width='20%'>".$res['username']."</td>";
		echo "<td width='20%'>".$res['email']."</td>";
		echo "<td width='20%'>".$res['phone']."</td>";
		echo "<td width='20%'>".$res['county']."</td>";
		echo "<td width='20%'>".$res['constituency']."</td>";	
		echo "<td>".$res['clientPassWord']."</td>";	
		echo "<td width='30%'>".$res['securityQuestion']."</td>";	
		echo "<td>".$res['securityAnswer']."</td>";	
		echo "<td>".$res['latitude']."</td>";
		echo "<td>".$res['longitude']."</td>";			
		echo "<td width='30'><a href=\"editclients.php?id=$res[clientID]\">Edit</a> | <a href=\"deleteclients.php?id=$res[clientID]\" onClick=\"return confirm('Are you sure you want to Delete this client from the system?')\">Delete</a></td>";
		echo "</tr>";		
	}/*else{
		 printf("Error: %s\n", mysqli_error($db));
	}*/
	?>
	</table>
	<br>
	<br>
	<br>
	
</div>
</body>
</html>