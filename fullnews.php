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
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">News</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">News</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->
<section class="blogpost-w3layouts">
	<div class="container">
		<! -- SINGLE POST -->
		<div class="col-lg-8" data-aos="flip-left">
			<! -- Blog Post 1 -->
			<p class="blogpost-p1">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive" src="admin/uploadnews/<?php echo $image; ?>" data-aos="zoom-in"></figure>
					</div>
				</div>	
			</p>
			<a href="" class="blogpost-w3ls" data-aos="flip-up"><h3><?php echo $heading; ?></h3></a>
			<p class="blogpost-p2" data-aos="flip-up">Posted:<?php echo $date; ?> </p>
			<p class="blogpost-p3" data-aos="flip-up"><?php echo $fullnews; ?></p>
			<div class="hline"></div>
		 	<h3 class="blogpost-agileits" data-aos="flip-up">Share It on social media:</h3>
			<ul class="social-icons1" data-aos="flip-up">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			</ul>
			           
			<div class="hline"></div>
		</div><! --/col-lg-8 -->
	 	<! -- SIDEBAR -->
		<div class="col-lg-4" data-aos="flip-right">
		 	<h4 class="post-w3ls">Recent Posts</h4>



		 	<div class="hline"></div>
		 	<?php 
      include "connection.php";
      $qry="select * from news ORDER BY date DESC LIMIT 10 ";
      
$res=$conn->query($qry);
while($row=$res->fetch_assoc())
{
 $id=$row['id'];
 $name=$row['name'];
 $date=$row['date'];
 $heading=$row['heading'];
 $fullnews=$row['fullnews'];
 $image=$row['image'];

     ?>
			<ul class="popular-posts">
		        <li data-aos="flip-up">
					<div class="postimg-agile" >
						<a href="#">
							<div class="hover15 column">
								<div ">
									<img src="admin/uploadnews/<?php echo $image; ?>" alt="Popular Post" style="max-height: 100%; max-width: 100%">
								</div>
							</div>	
						</a>		
					</div>
					<div class="postinfo-agile">	
						<p><a href="fullnews.php?id=<?php echo $id;?>"><?php echo $heading; ?></a></p>
						<em>Posted on <?php echo $date; ?></em>
					</div>
					<div class="clearfix"></div>	
		        </li>
		        <?php
		    }
		    ?>
		        
		    </ul>   
			<div class="hline"></div>
		</div>
		<div class="clearfix"></div>
	</div><! --/container -->
</section>
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