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
	<title></title>
</head>
<body>



<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Our Video</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">VIDEOS</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- /header section -->
<!-- images -->
<section class="gallery-w3ls">
	<div class="container">
		
			<?php 
      include "connection.php";
      $qry="select * from gallery";
$res=$conn->query($qry);
while($row=$res->fetch_assoc())
{
 $id=$row['id'];
 $name=$row['name'];
 $video=$row['video'];



     ?>


   
    <div class="col-md-4" style="margin-top: 30px;">    
      <div class="thumbnail">
        
          <iframe width="100%" height="500%" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
            <div class="caption">
            <p style="text-align: center;"><?php echo $name ?></p>

          </div>
        
      </div>
  </div>
      
   

<?php 
}
?>

 </div>
<div class="clear"></div>
		</div>
		<div class="clearfix"></div>
	
<!-- //video -->
<!-- last section -->	
<!-- back to top -->
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
<!-- js for video popup -->
<script type="text/javascript" src="js/YouTubePopUp.jquery.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
	});
</script>
<!-- //js for video popup -->
<!-- js for video hover -->
<script src="js/ns.hover.min.js"></script>
	<script>
	window.onload = function(){
		//$.noConflict();
		jQuery(document).ready(function($){
			$('.container2').nsHover({
	            bgcolor: '#000',
	            bganim : 'scale'
			});
		});
	}
	</script>
<!-- //js for video hover -->
<!-- js for video carousel -->
<script src="js/jquery.hoverCarousel.js"></script>
<!-- //js for video carousel -->
<!-- js for image gallery -->
<script type="text/javascript" src="js/simple-lightbox.js"></script>
<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>
<!-- //js for image gallery -->		
<!-- /js files -->
</body>
</html>	
<?php 

 include "footer.php";

?>
