<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complete Website in PHP with Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="image/lg.png" alt="" width="300" height="60">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="story.php">Success Story</a>
                    </li>
					    <li>
                        <a href="gallary.php">Gallary</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
           <div class="col-md-8">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/2.jpg">
						
					</div>
					<div class="item">
						<img src="image/1.jpg">
					</div>
					<div class="item">
						<img src="image/3.jpg">
					</div>
						<div class="item">
						<img src="image/1.jpg">
					</div>
					
				</div>
				<a href="#slider" data-slide="prev" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#slider" data-slide="next" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>	
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h3>Welcome To Website Title</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.!</p>
                <a class="btn btn-success btn-lg" href="#">Read More!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
			<?php
include("admin/includes/db.php");

	$query="select * from post";
	$run=mysql_query($query);
	
while($row=mysql_fetch_array($run)){
	$news_id = $row['id'];
	$title = $row['title'];
	$image = $row['image'];
	$desc = $row['content'];
?>
            <div class="col-md-4">
              <div class="thumbnail">
      				<img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:400px; height:200px;">
      			<div class="caption">
        			<h3><?php echo $title; ?></h3>
        				<p><?php echo $desc; ?> </p>
        			<p><a href="#" class="btn btn-success" role="button">Read More&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
        			 </a></p>
      			</div>
    		</div>
            </div>
            <!-- /.col-md-4 -->
          <?php }?>
			
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 alert alert-success">
                    <p>Designed By &copy;<a href="http://www.nehrugroup.in"> Nehrugroup.in</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
