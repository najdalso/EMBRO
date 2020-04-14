<?php 
    session_start();
    if(!isset($_SESSION['user']))
         header("Location: start.php");//check
    else
    { 
?>

<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link
	href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800"
	rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before,
	.scrollax-performance *:after {
	pointer-events: none !important;
	-webkit-animation-play-state: paused !important;
	animation-play-state: paused !important;
}
;
</style>
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

</head>


<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

	<nav
		class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sleep"
		id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="#">EMBRO.</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="navbar-collapse collapse show" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="myFav.php" class="nav-link">Favorite list</a></li>
                    <li class="nav-item active"><a href="Gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="AddArtwork.php" class="nav-link">Add artwork</a></li>
                    <li class="nav-item cta"><a href="logout.php" class="nav-link"><span>sign out</span></a></li>
            
          </ul>
        </div>
		</div>
	</nav>
	<!-- END nav -->
	<!-- profile  -->
	<div class="hero-wrap" style="height: 800px;">
		<div class="overlay"></div>
		<div id="particles-js">
			<canvas class="particles-js-canvas-el" width="1770" height="1642"
				style="width: 100%; height: 100%;"></canvas>
		</div>
		<div class="container ">
			<div
				class="row no-gutters slider-text align-items-center justify-content-center"
				data-scrollax-parent="true">

				<div class="col-md-4 ftco-animate fadeInUp ftco-animated"
					data-scrollax=" properties: { translateY: '70%' }"
					style="transform: translateZ(0px) translateY(0%); text-align: center;">
					<img style="border-radius: 50%;" data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }"
						style="opacity: 1; transform: translateZ(0px) translateY(0%);"
						src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
				</div>

				<div class="col-md-4 ftco-animate fadeInUp ftco-animated"
					data-scrollax=" properties: { translateY: '70%' }"
					style="transform: translateZ(0px) translateY(0%); text-align: left;">


					<h1 class="mb-4"
						data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }"
						style="opacity: 1; transform: translateZ(0px) translateY(0%);"
						style="font-size:50px;">
						<b>Hi there, I'm Nouf Ali </b>
					</h1>
					<p style="color: #ffffff; font-size: 30px;"
						data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }"
						style="opacity: 1; transform: translateZ(0px) translateY(0%);">
						I'm embro artist since i was 5, hope you like my work</p>



				</div>
			</div>

		</div>




	</div>


	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_7.jpg');"> </a>
						<div class="text p-4 d-block">
							<div class="meta mb-3">
								<div>
									<a href="#">July 12, 2018</a>
								</div>
								<div>
									<a href="#">nouf ali </a>
								</div>
								<div>
									<a href="#" class="meta-chat"><i class="fa fa-comment"></i>
										3</a>
								</div>
							</div>
							<!-- <h3 class="heading"><a href="#">Made with love</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry" data-aos-delay="100">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_8.jpg');"> </a>
						<div class="text p-4">
							<div class="meta mb-3">
								<div>
									<a href="#">July 12, 2018</a>
								</div>
								<div>
									<a href="#">nouf ali </a>
								</div>
								<div>
									<a href="#" class="meta-chat"><i class="fa fa-comment"></i>
										3</a>
								</div>
							</div>
							<!-- <h3 class="heading"><a href="#">Find the beauty in everything....</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry" data-aos-delay="200">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_4 .jpg');"> </a>
						<div class="text p-4">
							<div class="meta mb-3">
								<div>
									<a href="#">July 12, 2018</a>
								</div>
								<div>
									<a href="#">nouf ali </a>
								</div>
								<div>
									<a href="#" class="meta-chat"><i class="fa fa-comment"></i>
										3</a>
								</div>
							</div>
							<!-- <h3 class="heading"><a href="#">No one told you life was gonna be this way!</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_9.jpg');"> </a>
						<div class="text p-4 d-block">
							<div class="meta mb-3">
								<div>
									<a href="#">July 12, 2018</a>
								</div>
								<div>
									<a href="#">nouf ali </a>
								</div>
								<div>
									<a href="#" class="meta-chat"><i class="fa fa-comment"></i>
										3</a>
								</div>
							</div>
							<!-- <h3 class="heading"><a href="#">you never fail, until you stop trying</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry" data-aos-delay="100"></div>
				</div>
				<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry" data-aos-delay="200"></div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>



	<footer>
    <div  style=" height: 150px;  background-color:#ff99cc;">
     <div class="container">
        <div class="row" style=" color:#ffffff">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style=" color:#ffffff">EMPRO.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there's fabric.</p>
              <p>All rights reserved | This template modified by <i class="fa fa-heart" aria-hidden="true">Nouf, Thurya, Haifa and Najd</i> originally made by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
            </div>
     </div>
          </div>
    </footer>



	<!-- loader -->
	<div id="ftco-loader" class="fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none"
				stroke-width="4" stroke="#eeeeee"></circle>
			<circle class="path" cx="24" cy="24" r="22" fill="none"
				stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg>
	</div>




	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/particle.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
 <?php 
} ?> 
