<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head><?php include ('head.php');?></head>
<body>	
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<?php include ('header.php');?>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/gallery.jpeg);">
				<div class="desc animate-box">
					<h2>Our<strong>Gallery</strong></h2>
					<span><a class="btn btn-primary btn-lg" href="donation.php">Donate Now</a></span>
				</div>
			</div>

		</div>

		
		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
					</div>
				</div>

				
				<div class="row in row-bottom-padded-md gallery">
					<div class="col-lg-4 animate-box">
						<img src="images/kids.jpg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/founder.jpg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/giving1.jpg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/giving2.jpg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/kids.jpeg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/donate.jpeg" alt="kids" width="100%">		
					</div>
					<div class="col-lg-4 animate-box">
						<img src="images/about.jpeg" alt="kids" width="100%">		
					</div>
				</div>


				
			</div>
		</div>

		<div class="container-fluid" style="margin-top: 100px; margin-bottom: 100px;">

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="donation.php" class="btn btn-primary btn-lg">Donate Now</a>
					</div>
				</div>

				
			</div>
		

	
		<!-- fh5co-content-section -->

		
		<?php include ('footer.php');?>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/masonry.pkgd.js"></script>

	<script>
 /*$(document).ready(function() {
 $('.in').masonry({
 // options
  itemSelector: '.col-lg-4',
 columnWidth: .5
});
});*/

// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.in').masonry({
  itemSelector: '.col-lg-4',
 columnWidth: 0
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  

	</body>
</html>

