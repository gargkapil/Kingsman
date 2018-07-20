<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
 include"connection.php";
 if(isset($_SESSION['id'])=="")
 {
 include "header.php";
 }
 else
 {
    include "header1.php";
 }


?>
<!DOCTYPE html>
<html>
<head>
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
<!-- navigation -->
        
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Our News</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">News</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
    <?php 
      include "connection.php";
      $qry="select * from news ORDER BY date DESC ";
      
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
</section>	
<!-- header section -->

<section  class="news-w3layouts" style="margin: 20px;">   
    <div class="container">
        <!-- Blog Post Row -->
        <br><br>
        <div class="news-w3ls">
            

            <div class="col-md-1 text-center" data-aos="zoom-in">
                <p class="news-agileits1"><i class="fa fa-motorcycle"></i></p>
                <p class="news-agileits2"><?php echo $date; ?></p>

            </div>
            <div class="col-md-5" data-aos="flip-left">
                <a href="fullnews.php?id=<?php echo $id;?> ">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="admin/uploadnews/<?php echo $image; ?>" alt=""></figure>
						</div>
					</div>	
                </a>
            </div>
            <div class="col-md-6" data-aos="flip-right">
                <h3>
                    <a href="blogpost.html"><?php echo $heading; ?></a>
                </h3>
                <p class="news-agileits3"><?php echo $name ?></p>
                <a class="btn btn-primary" href="fullnews.php?id=<?php echo $id;?> ">Read More 
                    <i class="fa fa-angle-right"></i></a>
            </div>
			<div class="clearfix"></div>
        </div>
        </div>
</section>

        <!-- /.row -->
        <?php 
}
?>



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
