<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
 include "connection.php";
 if(isset($_SESSION['id'])=="")
 {
 include "header.php";
 }
 else
 {
  include "header1.php";
 }


?>
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from news where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $date=$sql['date'];
 $heading=$sql['heading'];
 $name=$sql['name'];
 $image=$sql['image'];
 $fullnews=$sql['fullnews'];
 
 }

   ?>

<!DOCTYPE html>
<html>
<head>
<title>Bike Race A Sports Category Flat Bootstrap Responsive  Website Template | Blogpost :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
</head>
<body>
<!-- Page Content -->
<!-- header section -->
<button type="button" class="btn btn-fb"><i class="fa fa-facebook pr-1"></i> Facebook</button>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- /js files -->
</body>
</html> 
<?php
include "footer.php";
?>