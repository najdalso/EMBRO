<?php
session_start();
if(!isset($_SESSION['user']))
    header("Location: mypage.php");//check
    else
    { $connect = mysqli_connect('localhost','root','', 'embro');
    if(mysqli_connect_errno($connect))
        die("Fail to connect to database :" . mysqli_connect_error());
        $query = "select title,artist_username,image_path from artwork";
        $result = mysqli_query($query);
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

      <div class="navbar-collapse collapse show" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="myFav.php" class="nav-link">Favorite list</a></li>
                    <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="AddArtwork.php" class="nav-link">Add artwork</a></li>
                    <li class="nav-item cta"><a href="login.php" class="nav-link"><span>sign out</span></a></li>
            
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
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);"> </p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">My Favorite</h1>
        </div>
      </div>
    </div>
  </div>
  
  <section class="ftco-section bg-light">
    <div class="container" style="justify-content: left;">
      <div class="row">
      <?php 
      while($rows=mysqli_fetch_all($result)){
?>
  <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url(<?php echo $rows['image_path'];?>);">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#"><?php echo $rows['artist_username'];?></a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#"><?php echo $rows['title'];?><</a></h3>
                <a href="#" class="tag-cloud-link" onclick="deleteacc(this)">Remove From List</a>
            </div>
          </div>
        </div>
        <?php 
 }?>
?>

      </div>
    </div>
  </section>
  
<script>

function deleteacc(bt) {
  var acc = bt.parentNode.parentNode;
  acc.parentNode.removeChild(acc);
}

</script>
  

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



</body></html>
<?php
    }
?>
