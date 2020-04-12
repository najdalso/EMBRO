
<?php 
    session_start();
    if(isset($_SESSION['user']))
    if($_SESSION['type']== 'artist'){
      if($_SESSION['approved'] == 'yes'){
          header("Location: homepage.php");}//artistpage
      else
             header("Location: homepage.php");//user page
          }
         else if($_SESSION['type']== 'admin')
            header("Location: admin.php");//admin
         else
            header("Location: homepage.php");      else
    {
?>


<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--jQ-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 

<title>EMPRO</title>
    <!-- CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style>
</head>
 <!-- end css -->

  <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    
    <div class="hero-wrap " style="height: 550px;">
      <div class="overlay"></div>
      <div id="particles-js"><canvas class="particles-js-canvas-el" width="1112" height="1220" style="width: 100%; height: 100%;"></canvas></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: &#39;70%&#39; }" style="transform: translateZ(0px) translateY(0%);">
            
            <h1 class="mb-3 bread" 
            data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" 
            style="opacity: 1; transform: translateZ(0px) translateY(0%);">EMBRO</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">LOG IN </h2>
          </div>
          <div class="w-100"></div>
          <div>
            <p>So much fabric, so little time!  Or, sew much fabric, sew little time!</p>
          </div>
          
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form id="myForm" action="validate.php"  method="GET">
              <div class="form-group">
                <input type="text" name= "user" id="username" class="form-control" placeholder="username" required>
              </div>
              <div class="form-group">
                <input type="password" name = "pass" id="password" class="form-control" placeholder="password" required>
              </div>
              <div class = "text-sm-right form-group">
                <a style=" text-decoration: underline ; font-weight: 100;" href="start.html">Don't have an account?sign up </a>
              </div>
              <?php
                      
                          if(isset($_GET['error']))
                                echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
                        ?>

              <div class="form-group">
               <center><input type="submit" value="LOG IN" class="btn btn-primary py-3 px-5"></center>
              </div>
            </form>
           
          </div>

          <!--pics -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              
              <div class="carousel-item active"  style="width:300px; height: 400px; overflow: hidden;text-align: center;">
                <img src="p3.jfif" class="d-block w-100" alt="..."  >
              </div>
              
              <div class="carousel-item"  style="width:300px; height: 400px; overflow: hidden;text-align: center;">
                <img src="p5.jfif" class="d-block w-100" alt="..." >
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">EMBRO</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there's fabric.</p>
            </div>
          </div>
          <div class="col-md">
             
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><div style="color:white;" class="py-2 d-block">198 West 21th Street, Suite 721 riyadh 10016</div></li>
                <li><div style="color:white;" class="py-2 d-block">+ 1235 2355 98</div></li>
                <li><a href="mailto:novrartist@gmail.com" class="py-2 d-block">novrartist@gmail.com</a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright ©<script>document.write(new Date().getFullYear());</script>20202020 All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  
</body>
</html>
<?php
    }
?>
