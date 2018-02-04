<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
	?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="new_post.php"><i class="fa fa-edit fa-fw"></i> Create New Post</a>
                        </li>
                        <li>
                            <a href="index.php?view_post=view_post"><i class="fa fa-table fa-fw"></i> View All Post</a>
                        </li>
						 <li>
                            <a href="new_course.php"><i class="fa fa-edit fa-fw"></i> Create New Story</a>
                        </li>
                        <li>
                            <a href="course.php"><i class="fa fa-table fa-fw"></i> View All Story</a>
                        </li>
						
                        <li>
                            <a href="new_images.php"><i class="fa fa-edit fa-fw"></i> Upload Image</a>
                        </li>
                        <li>
                            <a href="images.php"><i class="fa fa-photo fa-fw"></i> View All Image</span></a>
                        </li>
                                               
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">  <span class="fa fa-edit"></span>Upload New Image in Your Gallary</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			
			 <div class="col-lg-6">
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Image Title</label>
                                            <input class="form-control" name="title">
                                            <p class="help-block">Give Title of the Image.</p>
                                        </div>
                                  
                                        <div class="form-group">
                                            <label>Image </label>
                                            <p class="form-control-static">upload image size 50kb to 100kb</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload image</label>
                                            <input type="file" name="image">
                                        </div>
                                        
										 <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
										</form>
                        </div>
                        </div>
                        
                   
             
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php 

include('../includes/db.php');


if(isset($_POST['submit'])){


	$title = $_POST['title'];
    $image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	

	
	if($title==''){
	echo "<script>alert('Any field is empty')</script>";
	
	}
	if($image_type=="image/jpeg" or $image_type=="image/png" or
	$image_type=="image/gif"){
		
		if($image_size<=500000){
		move_uploaded_file($image_tmp,"../uploaded_image/$image_name");
		}
		else{
		echo "<script>alert('Image size is larger, only 50kb size is allowed ')</script>";
		}	
		
	
	}
	else{
	echo "<script>alert('Image type is invalid')</script>";
	}
	
	$query = "insert into gallary(title,image) 
			values('$title','$image_name')";
	
	if(mysql_query($query)){
	
	echo "<script>alert('Published')</script>";
	
	}
	
}}

?>


