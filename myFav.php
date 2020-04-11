<?php 
    session_start();
    //if(!isset($_SESSION['user']))
        // header("Location: login.php");//check
    //else
    {
?>
<!DOCTYPE html>
<html> <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <title>Favorite List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

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
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/1/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/1/util.js"></script><style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/8b/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/8b/util.js"></script><style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/8b/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/40/8b/util.js"></script></head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">EMBRO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="navbar-collapse collapse show" id="ftco-nav" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">My Profile</a></li>
          
          <li class="nav-item active"><a href="blog.html" class="nav-link">My Favorite</a></li>
          <li class="nav-item"></li>
          <li class="nav-item cta"></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="hero-wrap" style="height: 800px;">
    <div class="overlay"></div>
    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1770" height="1642" style="width: 100%; height: 100%;"></canvas></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(0%);">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);"><span class="mr-2"><a href="index.html">Home</a></span> </p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">My Favorite</h1>
        </div>
      </div>
    </div>
  </div>
  
  <section class="ftco-section bg-light">
    <div class="container" style="justify-content: left;">
      <div class="row">

      <?php 
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","embro");

$string = "";
// Create connection
$conn = new mysqli(DBHOST,DBUSER,DBPWD,DBNAME);
// Check connection
if ($conn->connect_error) {
die("Fail to connect to database :" . mysqli_connect_error());
} 
$ret_fav = "SELECT artwork_id FROM favorite WHERE username = '$_SESSION['user']'";
$res = mysqli_query($conn,$ret_fav );
if ($res->num_rows > 0){
$sql = "SELECT title,artist_username,image_path FROM artwork WHERE id IN $res ";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
   $string += '<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('.$row["image_path"].');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">'.$row["artist_username"].'</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">'.$row["title"].'</a></h3>
                <a href="#" class="tag-cloud-link" onclick="deleteacc(this)">Remove From List</a>
            </div>
          </div>
        </div>';

}
echo $string;
}
}
 else {
echo "0 results";
}
$conn->close();
?>
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
              <li><div class="py-2 d-block">198 West 21th Street, Suite 721 riyadh 10016</div></li>
              <li><div class="py-2 d-block">+ 1235 2355 98</div></li>
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

<script>

function deleteacc(bt) {
  var acc = bt.parentNode.parentNode;
  acc.parentNode.removeChild(acc);
}

</script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particle.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>



</script>

</body></html>
<?php
    }
?>
