 <?php
 /*include("../html/check.php")*/

 $curruser = $login_user;
 $ses_sql = mysqli_query($db,"SELECT latitude, longitude FROM myclientinfo WHERE username='$user_check' ");

	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$latitude=$row['latitude'];
	$longitude=$row['longitude'];
	/*this code uses google maps api combined with javascript to guide the worker to the clients premises*/

?> 