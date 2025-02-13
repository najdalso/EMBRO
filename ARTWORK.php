<?php 
    session_start();
    if(!isset($_SESSION['user']) || !isset($_SESSION['id']))
         header("Location: login.php"); //check
         else {
    $artworkID = $_SESSION['id'];
    $con = mysqli_connect("localhost",'root','','embro');
    if(mysqli_connect_errno($con))
      die("Fail to connect to database :" . mysqli_connect_error());
    $query = 'SELECT * FROM artwork WHERE id = $artworkID';
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result);
    $title = $row[1];
    $caption = $row[2];
    $username = $row[4];
    $likes = $row[5];
    $image = $row[6];
    $cAbility = $row[7];
    $query2 = 'SELECT * FROM artist WHERE username = $username';
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_row($result2);
    $bio = $row2[1];
      ?> 
<html class="gr__" lang="en" lang="ar">
  <head>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Artwork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="css/aos.css"> -->
    <!-- <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .heart {
        font-size: 25px;
        color:#ee76ad;
      }
    </style>
    
</head>

  <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0" data-gr-c-s-loaded="true">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">EMBRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="true" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="navbar-collapse collapse show" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="myFav.php" class="nav-link">Favorite list</a></li>
                    <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="AddArtwork.php" class="nav-link">Add artwork</a></li>
                    <li class="nav-item cta"><a href="login.php" class="nav-link"><span>sign out</span></a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="521"></canvas></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(0%);">
            
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">Artwork</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate fadeInUp ftco-animated">
            <p>
              <img src="<?php echo $image ?>" alt="artwork" class="img-fluid">
            </p>
            <h2 class="mb-3" ><?php echo $title ?></h2>
            <p><?php echo $caption?></p>
            <div style="overflow: auto">
              <h3 class="mb-5">Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img alt="user image" src="">
                  </div>
                  <div class="comment-body">
                    <h3>user</h3>
                    <div class="meta">date</div>
                    <p>comment body</p>
                    <p><a href="#" class="reply">Reply</a>
					          <a href="#" class="reply">Report</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Your opinion matters!</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="message">Your comment</label>
                    <textarea name="" id="message" cols="30" rows="3" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-md-4 sidebar ftco-animate fadeInUp ftco-animated" style="left: 100px;">
            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
              <div class="categories">
                <h3>Categories</h3>
                <li>none</li> 
              </div>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
              <h3>Meets your taste?</h3>
              <div class="tagcloud">
                <div>
                  <i onclick="myFunction(this)" class="heart fa fa-heart-o"> </i>
                </div> 
                <a class="tag-cloud-link" style = "margin-top:10px">Add to favourite list</a>
                <p id ="liked"><?php echo $likes ?> liked this artwork</p>
              </div>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
              <h3>About Artist</h3>
              <p><?php echo $bio ?></p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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
    
  

 
  <script src="js/particles.min.js"></script> <!-- Ø§Ù„Ø£Ø´ÙŠØ§Ø¡ Ø§Ù„Ù„ÙŠ ØªØ±Ù‚Øµ -->
  <script src="js/particle.js"></script> <!-- Ø§Ù„Ø£Ø´ÙŠØ§Ø¡ Ø§Ù„Ù„ÙŠ ØªØ±Ù‚Øµ -->
  <script src="js/jquery-migrate-3.0.1.min.js"></script> <!--Ø®Ø§Øµ ÙŠØ§Ù„Ø¨Ø±Ø§ÙˆØ²Ø±-->
  <script src="js/popper.min.js"></script> <!--ÙŠØ±Ù‚Ù‰ ÙˆÙŠÙ†Ø²Ù„ Ø§Ù„ÙƒÙ„Ø§Ù…-->
  <script src="js/jquery.easing.1.3.js"></script> <!--ØªØ±Ù‚Ù‰ Ù…Ø¹Ù†Ø§ Ø§Ù„Ø®Ù„Ù�ÙŠØ© ÙˆØªÙ†Ø²Ù„-->
  <script src="js/jquery.waypoints.min.js"></script> <!--Ù„Ù…Ø§ Ù†Ù†Ø²Ù„ ÙˆÙ†Ø±Ù‚Ø© ØªØªÙ†Ù�Ø° Ù�Ù†ÙƒØ´Ù†Ø² Ù…Ø¹ÙŠÙ†Ø©-->
  <script src="js/jquery.stellar.min.js"></script> <!--ØªØ±Ù‚Ù‰ Ù…Ø¹Ù†Ø§ Ø§Ù„Ø®Ù„Ù�ÙŠØ© ÙˆØªÙ†Ø²Ù„-->
  <script src="js/jquery.magnific-popup.min.js"></script> <!--ÙŠØ³ÙˆÙŠ Ù‡Ø§ÙŠÙ„Ø§ÙŠØª Ø®Ù�ÙŠÙ� Ø¹Ù„Ù‰ Ø§Ù„ØµÙˆØ±Ø©-->
  <script src="js/aos.js"></script> <!--Ù†Ù„Ø¹Ø¨ Ø¨Ø§Ù„Ù�ÙŠØ¯Ù†Ù‚ Ø­Ù‚ Ø¹Ù†Ø§ØµØ± Ø§Ù„ØµÙ�Ø­Ø©-->
  <script src="js/scrollax.min.js"></script> <!--ÙŠØºÙŠØ± Ø¨Ù‡ÙˆØª Ø§Ù„Ø¹Ù†ÙˆØ§Ù† ÙƒÙ„ Ù…Ø§ Ù†Ù†Ø²Ù„-->
  <script src="js/main.js"></script> <!--ÙŠØºÙŠØ± Ø¨Ù‡ÙˆØª Ø§Ù„Ø¹Ù†ÙˆØ§Ù† ÙƒÙ„ Ù…Ø§ Ù†Ù†Ø²Ù„-->
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script>
    function myFunction(x) {
      var count = 0; // Ã˜Â§Ã™â€žÃ™â€¦Ã™ï¿½Ã˜Â±Ã™Ë†Ã˜Â¶ Ã™â€¡Ã™â€ Ã˜Â§ Ã˜Â£Ã˜Â³Ã˜ÂªÃ˜Â¯Ã˜Â¹Ã™Å  Ã˜Â§Ã™â€žÃ™Æ’Ã˜Â§Ã™Ë†Ã™â€ Ã˜ÂªÃ˜Â± Ã™â€¦Ã™â€  Ã˜Â§Ã™â€žÃ˜Â¯Ã˜Â§Ã˜ÂªÃ˜Â§Ã˜Â¨Ã™Å Ã˜Â³
      if ( x.classList.contains( "fa-heart") ) {
          x.classList.remove( "fa-heart" ); // Ã˜Â§Ã™â€žÃ™â€¦Ã˜ÂªÃ˜Â¹Ã˜Â¨Ã™Å Ã˜Â©
          x.classList.add( "fa-heart-o" ); // Ã˜Â§Ã™â€žÃ™â€¦Ã™ï¿½Ã˜Â±Ã˜ÂºÃ˜Â©
          <?php 
          $query = 'UPDATE artwork SET likes = likes - 1 where id = $artworkID';
          mysqli_query($con, $query);
          ?>
         // document.getElementById("liked").innerText = "0 liked this artwork";
      }
      else {
          x.classList.remove( "fa-heart-o" ); // Ã˜Â§Ã™â€žÃ™â€¦Ã™ï¿½Ã˜Â±Ã˜ÂºÃ˜Â©
          x.classList.add( "fa-heart" ); // Ã˜Â§Ã™â€žÃ™â€¦Ã˜ÂªÃ˜Â¹Ã˜Â¨Ã™Å Ã˜Â©
          <?php 
          $query = 'UPDATE artwork SET likes = likes + 1 where id = $artworkID';
          mysqli_query($con, $query);
          ?>
         // document.getElementById("liked").innerText = "1 liked this artwork";
      }
}
  </script>

  <!-- <script src="js/bootstrap.min.js"></script>  
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script> --> <!--Ù‚Ø´-->
</body>
</html>
<?php }?>
