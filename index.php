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
<!DOCTYPE html>
<html>
<head>
<title>Kingsman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/jquery.mb.thumbgallery.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/info.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/banner.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
</head>
<style>
	
	#socialmedia .fa {
  
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px ;
  border-radius: 50%;
}

#socialmedia .fa:hover {
    opacity: 0.7;
}

#socialmedia .fa-facebook {
  background: #3B5998;
  color: white;
}

#socialmedia .fa-twitter {
  background: #55ACEE;
  color: white;
}

#socialmedia .fa-google {
  background: #dd4b39;
  color: white;
}

#socialmedia .fa-linkedin {
  background: #007bb5;
  color: white;
}

#socialmedia .fa-youtube {
  background: #bb0000;
  color: white;
}

#socialmedia .fa-instagram {
  background: #125688;
  color: white;
}

	
</style>
<body>
				


       
        </div><!--/.nav-collapse -->		
                     </div>
                     <div id="navbar" class="navbar-collapse collapse">
		
		 <ul style="float: right;margin-top:-50px;" class="nav navbar-nav slide-nav">
				<li><a href="signup.php">SignUp</a></li>
				<li><a href="login.php">Login</a></li>
				</ul>

             </div>
</nav>

<!-- /navigation -->
<!-- banner section -->
<div class="demo-2">
	<div id="slider" class="sl-slider-wrapper">
		<div class="sl-slider">
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1"></div>
					<div class="container">
						<h3 style="font-size: 25px">“Every chess master was once a beginner.” </h3>
						
					</div>
				</div>
			</div>
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-2"></div>
					<div class="container">
						<h3 style="font-size: 25px">“Chess is the gymnasium of the mind.” </h3>
								</div>
				</div>
			</div>
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-3"></div>
					<div class="container">
						<h3 style="font-size: 25px">“One bad move nullifies forty good ones.” </h3>
					</div>
				</div>
			</div>
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-4"></div>
					<div class="container">
						<h3 style="font-size: 25px">“Chess is war over the board. The object is to crush the opponent’s mind.”</h3>
					</div>
				</div>
			</div>
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-5"></div>
					<div class="container">
						<h3 style="font-size: 25px">“When you see a good move, look for a better one.”</h3>
					</div>
				</div>	
			</div>
		</div><!-- /sl-slider -->
		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>
	</div><!-- /slider-wrapper -->
</div>	
<!-- /banner section -->
<!-- info section -->
<section class="info-w3ls">
    <div class="container">
		
		<?php 
      include "connection.php";
      $qry="select * from news ORDER BY date DESC LIMIT 4";
      function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
$res=$conn->query($qry);
while($row=$res->fetch_assoc())
{
 $id=$row['id'];
 $name=$row['name'];
$date=$row['date'];
  $heading=$row['heading'];
  $image=$row['image'];



     ?>
    	<div class="col-lg-6 col-md-6 info-wthree" >

			<div class="info-agile1">

				<div class="col-xs-5 info-w3layouts1" data-aos="flip-left">
					<div class="ch-grid">
						<div>

							<div class="ch-item">				
								<div class="ch-info">

									<!--<div class="ch-info-front ch-img-1"></div>-->
									<div>
							<figure><img class="img-responsive img-hover" src="admin/uploadnews/<?php echo $image; ?>" alt="w3layouts"></figure>

						</div>
										
								</div>
							</div>
						</div>	
					</div>
					<p class="news-agileits1"><i class="fa fa-motorcycle"></i></p>
                <p class="news-agileits2"><?php echo $date; ?></p>	
				</div>

				<div class="col-xs-7 info-w3layouts2" data-aos="flip-right">
					<div class="info-agileits">
						<h4><?php echo $heading ?></h4>
						<p>
						<?php custom_echo($row['name'], 200); ?> </p>
						<a href="fullnews.php?id=<?php echo $id;?> "><i class="fa fa-hand-o-right" aria-hidden="true"></i> Read More</a>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
			<?php 
}
?>
	</div>

</section>
<!-- /info section -->
<!-- special section -->

<!-- /special section -->
<!-- recent pics section -->
<section class="recent-agileinfo jarallax">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Our Recent Puzzles</h3>
		<section class="content" data-aos="zoom-in">
			<div id="thumbGrid" class="thumbGrid"
				data-thumbgrid="true"
				data-nav_effect="slideInverse"
				data-nav_delay="60"
				data-nav_timing="300"
				data-nav_pagination="3"
				data-gallery_effectnext="fadeIn"
				data-gallery_effectprev="fadeOut"
				data-gallery_fullscreenw="90%"
				data-gallery_fullscreenh="90%"
				data-gallery_cover="false">
				<img src="images/recent1.jpg" data-highres="images/recent1.jpg" data-caption="Parturient Bibendum Malesuada Etiam"/>
				<img src="images/recent2.jpg" data-highres="images/recent2.jpg" data-caption="Lorem ipsum dolor sit amet"/>
				<img src="images/recent3.jpg" data-highres="images/recent3.jpg" data-caption="Adipiscing Inceptos Ornare Cursus"/>
				<img src="images/recent4.jpg" data-highres="images/recent4.jpg" data-caption="Etiam Purus Sollicitudin Fusce"/>
				<img src="images/recent5.jpg" data-highres="images/recent5.jpg" data-caption="Parturient Bibendum Malesuada Etiam"/>
				<img src="images/recent6.jpg" data-highres="images/recent6.jpg" data-caption="Magna Pharetra Inceptos"/>
				<img src="images/recent7.jpg" data-highres="images/recent7.jpg" data-caption="Lorem ipsum dolor sit amet, consectetur adipiscing elit"/>
				<img src="images/recent8.jpg" data-highres="images/recent8 .jpg" data-caption="Venenatis Purus Parturient"/>
			</div>
		</section>
	</div>
</section>
<!-- /recent pics section -->
<!-- last section -->
<section class="last-w3layouts">
	<div class="container">
		<a href="index.html" class="bottom-agile"><h2 class="text-center">KINGSMAN</h2></a>
		<p class="text-center">&copy; Kingsman. All Rights Reserved | 
	</div>	
	<div class="text-center" id='socialmedia' style="margin-top:20px;">
		<a href="#"  class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-youtube"></a>
		<a href="#" class="fa fa-instagram"></a>
		
	</div>
</section>
<!-- last section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
	$('.jarallax').jarallax({
        speed: 0.6,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- js for recent pics section -->
<script src="js/jquery.mb.thumbGallery.js"></script>
<script>

    var isIframe = function() {
        var a = !1;
        try {
            self.location.href != top.location.href && ( a = !0 )
        } catch ( b ) {
            a = !0
        }
        return a
    };
    if ( !isIframe() ) {
        var logo = $( "<a href='#' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='#' alt='mb.ideas.repository'></a>" );
        $( "#wrapper" ).prepend( logo ), $( "#logo" ).fadeIn()
    }

    /* Extend or modify effects */
    jQuery.thumbGrid.transitions.fadeIn = {in: {x:"0", opacity:0, scale:0.9}, out: {x:0, opacity:0}};
    jQuery.thumbGrid.transitions.fadeOut = {in: {x:"0", opacity:0}, out: {x:0, scale:0.9, opacity:0}};
    jQuery.thumbGrid.transitions.slideLeft = {in: {x:$(window).width(), opacity:0}, out: {x:-$(window).width(), opacity:0}, ease:"cubic-bezier(.43,.18,.81,1.07)"};
    jQuery.thumbGrid.transitions.slideRight = {in: {x:0, opacity:0}, out: {x:$(window).width(), opacity:0}, ease:"cubic-bezier(.43,.18,.81,1.07)"};

    /* Initialize the gallery */
    jQuery("#thumbGrid").thumbGrid();

    /* customizer */
    jQuery("#effect").on("change",function(){
        var x = $(this).val();
        jQuery("#thumbGrid").data("nav_effect", x);
    });

    jQuery("#delay").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_delay", x);
    });

    jQuery("#timing").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_timing", x);
    });

    if(jQuery.isMobile){
        jQuery("body").css({marginBottom: 140})
    }


</script>
<!-- /js for recent pics section -->
<!-- js for testimonials -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });
	});  
</script>
<!-- /js for testimonials -->
<!-- js for banner section -->
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
</script>
<!-- /js for banner section -->
</body>
</html>