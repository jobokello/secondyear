<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default">
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
    <header id="header">
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
					    <li><a href="#">Add worker</a></li>
					    <li><a href="#">Add job order</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">Back to home page</a></li>
					  </ul>
					</div>
				</div>		
		    </div>
	    </div><!-- /.container -->
	</header>

	<section id="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<div class="row">
			<div class="col-md-3">
				<div class="list-group">
				  <a href="adminclients.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> clients <span class="badge">12</span></a>
				  <a href="adminworkers.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Workers<span class="badge">13</span></a>
				  <a href="adminorders.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Orders <span class="badge">42</span></a>
				  <a href="adminwages.php" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Wage payment <span class="badge">7</span></a>
				  <a href="adminrefunds.php" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Client Refunds <span class="badge">2</span></a>
				</div>
				<div class="well">
					<h5>Payment against job orders</h5>
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
					    60%
					  </div>
					</div>
					<h5>Refunds against job orders</h5>
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
					    10%
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading main-color-bg">
				    <h3 align="center" class="panel-title">Website Overview</h3>
				  </div>
				  <div class="panel-body">
				    <div class="col-md-3">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>12</h2>
				    		<h4>clients</h4>
				    	</div>
				    </div>
				    <div class="col-md-4">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>13</h2>
				    		<h4>Workers</h4>
				    	</div>
				    </div>
				    <div class="col-md-4">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>65</h2>
				    		<h4>Website visits</h4>
				    	</div>
				    </div>
				    <div class="col-md-4">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>45</h2>
				    		<h4>orders placed</h4>
				    	</div>
				    </div>
				    <div class="col-md-4">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>38</h2>
				    		<h4>Paymenst made</h4>
				    	</div>
				    </div>
				    <div class="col-md-4">
				    	<div class="well dash-box">
				    		<h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>4</h2>
				    		<h4>Refunds given</h4>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>	
			</div>
		</div>	
	</section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>












