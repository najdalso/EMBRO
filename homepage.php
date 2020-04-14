<?php 
   session_start();
   if(!isset($_SESSION['user']))
         header("Location: login.php");//check
      else
      {
          ?>
      
<!DOCTYPE>
<html>

<head>	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/css" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after {
            pointer-events: none !important;
            -webkit-animation-play-state: paused !important;
            animation-play-state: paused !important;
        }

        ;
    </style>
</head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">EMBRO.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="navbar-collapse collapse show" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="homepage.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="myFav.php" class="nav-link">Favorite list</a></li>
                    <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="AddArtwork.php" class="nav-link">Add artwork</a></li>
                    <li class="nav-item cta"><a href="login.php" class="nav-link"><span>sign out</span></a></li>
            
          </ul>
        </div>
        </div>
    </nav>
    <!-- END nav -->
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap " style="height: 800px;">
        <div class="overlay"></div>
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1770" height="1561" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: &#39;70%&#39; }" style="transform: translateZ(0px) translateY(0%);">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">We love to create <strong>Beautiful</strong> art</h1>
                    <p data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">
                    </p>
                </div>
            </div>
        </div>
    </div>

        <section class="ftco-section-featured ftco-animate fadeInUp ftco-animated"  data-scrollax-parent="true">
            
                <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

                    <!--Strat of img section -->
                    <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: &#39;-30%&#39;}" style="transform: translateZ(0px) translateY(21.1816%);">

                        <div class="col-md-3">
                            <!-- start section 1 -->

                            <a href="##" class="featured-img">
                                <img src="images/image_1 .jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>katerina marchenko<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/mariadelvallealarttex.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Mariadel vallealarttex<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_7.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Thepunk rockstitcher<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_8.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Thepunk rockstitcher<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_9.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>
                                            lnddesigns<br><span class="position">Artist</span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div><!--  end section 1 -->

                        <div class="col-md-3 mb-3">
                            <!-- start section 2 -->

                            <a href="##" class="featured-img">
                                <img src="images/image_5.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>katerina marchenko<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="/homepage_files/image_11.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>lnddesigns<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="/homepage_files/image_6.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Gracecharles couture<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_10.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Thepunk rockstitcher<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_11.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>
                                            lnddesigns<br><span class="position">Artist</span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 mb-3">
                            <!-- start section 3 -->

                            <a href="##" class="featured-img">
                                <img src="images/image_12.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>katerina marchenko<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/mariadelvallealarttex.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Mariadel vallealarttex<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_7.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Thepunk rockstitcher<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_8.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>Thepunk rockstitcher<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>
                            <a href="##" class="featured-img">
                                <img src="images/image_9.jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>
                                            lnddesigns<br><span class="position">Artist</span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
       



                        <div class="col-md-3">
                            <!--statrt of section 3 -->
                            <a href="##" class="featured-img">

                                <img src="images/image_4 .jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>katerina marchenko<br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>

                            <a href="##" class="featured-img">

                                <img src="images/image_4 .jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>John Bruce <br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>

                            <a href="##" class="featured-img">

                                <img src="images/image_4 .jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>John Bruce <br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>

                            <a href="##" class="featured-img">

                                <img src="images/image_4 .jpg" class="img-fluid" alt="">
                                <div class="text p-4 d-flex align-items-center">
                                    <div class="user d-flex align-items-center">
                                        <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3>John Bruce <br><span class="position">Artist</span></h3>
                                    </div>
                                </div>
                            </a>

                        </div>  <!--End of section 3 -->

                    </div>  <!--end of img section -->

             

        </section>
    </div>

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
    <div id="ftco-loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>

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
    }
?>