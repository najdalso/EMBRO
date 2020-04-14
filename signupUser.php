<?php 
    session_start();
   if(isset($_SESSION['user']))
    if($_SESSION['type']== 'artist'){
      if($_SESSION['approved'] == 'yes'){
          header("Location: homepage.php");}//artistpage
      else
             header("Location: homepageUser.php");//user page
          }
         else if($_SESSION['type']== 'admin')
            header("Location: admin.php");//admin
         else
            header("Location: homepageUser.php"); 
    else
    {
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      // define variables and set to empty values
      $nameErr = $emailErr = $passErr = $userErr =$Err=$bioErr=$webErr= "";
      $name = $email = $user = $pass =$bio=$web= $acc= "";
      $iserror= false;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
          $iserror= true;
        } else {
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
              $iserror= true;
            }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
          $iserror= true;
        } else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
              $iserror= true;
            }
        }
          
        if (empty($_POST["user"])) {
          $userErr = "username is required, between 5 and 20";
        } else {//check in the database
          $user = test_input($_POST["user"]);
          if (!preg_match("/^[a-zA-Z0-9]{5,20}+$/",$user)) {
            $userErr = "Only letters and numbers allowed, between 5 and 20 ";
            $iserror= true;
          }
        }
      
        if (empty($_POST["pass"])) {
          $passErr =  "password is required";
        } else {
          $pass = test_input($_POST["pass"]);
          if (!preg_match("/^(?=.*[^a-zA-Z]).{8,40}$/",$pass)) {
            $passErr = "must be between 8 and 40 ";
            $iserror= true;}
           
        }
        $acc = test_input($_POST["account"]);
      
        if(!$iserror){
          
          $con = mysqli_connect("localhost",'root','','embro');
      
          if(mysqli_connect_errno($con))
              die("Fail to connect to database :" . mysqli_connect_error());
          
          $query = "INSERT INTO accounts VALUES ('$user','$pass','$acc','$email','$name')";
      
         if(!( $result = mysqli_query($con,$query)))
         $Err ="could not set an account, try again with different username ";
          else{
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['user']=$user;
            $_SESSION['type']= $acc;
            if($acc == 'artist'){
              $query = "INSERT INTO artist VALUES ('$user','$bio','no','$web')";
              mysqli_query($con,$query);
              $_SESSION['approved']='no';
              $_SESSION['bio']=$bio;
              $_SESSION['web']=$web;
              
            }
            header("Location: homepageUser.php");
          }
      
      
      
        }
      
      }      
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>.dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}
    .dismissButton:hover{background-color:rgba(66,133,244,0.04);border:1px solid #d2e3fc}
.dismissButton:focus{background-color:rgba(66,133,244,0.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd}
.dismissButton:active{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
</style><style>.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}
.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
</style><link type="text/css" rel="stylesheet" href="./sign up_files/css"><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
</style><style>.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}
.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style>
.gm-style img{max-width: none;}
.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>

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
  <style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./sign up_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/map.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/stats.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/onion.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/ViewportInfoService.GetViewportInfo"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/f.txt"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/controls.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/AuthenticationService.Authenticate"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/marker.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/QuotaService.RecordEvent"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/f(1).txt"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./sign up_files/util.js.download"></script>
  
  
  <style>
.error {color: #FF0000;}
</style>

<script>
 
 $(document).ready(function() {
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'artist') {
            $('#profilInfo').show();           
       }
       else {
            $('#profilInfo').hide();   
       }
   });
});
</script>
<?php
print(
'</head>
 <!-- end css -->

  <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    
    <div class="hero-wrap " style="height: 550px;">
      <div class="overlay"></div>
      <div id="particles-js"><canvas class="particles-js-canvas-el" width="1112" height="1220" style="width: 100%; height: 100%;"></canvas></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: &#39;70%&#39; }" style="transform: translateZ(0px) translateY(0%);">
            
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">EMBRO</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Register</h2>
          </div>
          <div class="w-100"></div>
          <div>
            <p>So much fabric, so little time!  Or, sew much fabric, sew little time!</p>
          </div>
          
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          <form method = "POST" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
              <div class="form-group">
              <div class="form-group">
                <input name = "email" type="text" class="form-control" placeholder="your email" value="'.$email.'" required>
                <span class="error">'. $emailErr.' </span>
              </div>
                <input name = "user"type="text" class="form-control" placeholder="username" value="'.$user.'" required>
                <span class="error"> '. $userErr .'</span>
              </div>
              <div class="form-group">
                <input name = "pass" type="password" class="form-control" placeholder="password" value="'. $pass.'" required>
                <span class="error">'.$passErr.'</span>
              </div>
              <div class="form-group">
                <input name = "name" type="text" class="form-control" placeholder="your name" value="'.$name.'" required>
                <span class="error">'.$nameErr.'</span>
              </div>
              <div class="form-group">
              <p>I am an :</p>
              <input type="radio" id="artist" name="account" value="artist" required>
              <label for="artist">artist</label><br>
              <input type="radio" id="female" name="account" value="user" required>
              <label for="user">user, just want to please my eyes</label><br>
              </div>
              <div id = "profilInfo" class="form-group" style = "display:none;">
              <div class="form-group">
              <textarea name = "bio" type="text" class="form-control" placeholder="bio (write something about yourself as an artist and your art to get approval)" value="'. $bio.'" required></textarea>
              <span class="error">'.$bioErr.'</span>
            </div>
              <div class="form-group">
              <input name = "web" type="text" class="form-control" placeholder="website (optional)" value="'. $web.'" >
              <span class="error">'.$webErr.'</span>
            </div>
            
              </div>
              <div class="form-group">
              <span class="error">'.$Err.'</span>
               <center> <input type="submit" value="SIGN UP" class="btn btn-primary py-3 px-5"></center>
              </div>
            </form>
           
          </div>
           
          <!--pics -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


              <div class="carousel-item active"  style="width:300px; height: 400px; overflow: hidden;text-align: center;">
                <img src="images/p3.jfif" class="d-block w-100" alt="..."  >
              </div>
              
              <div class="carousel-item"  style="width:300px; height: 400px; overflow: hidden;text-align: center;">
                <img src="images/p5.jfif" class="d-block w-100" alt="..." >
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
    

    <footer>
    <div  style=" height: 150px;  background-color:#ff99cc;">
     <div class="container">
        <div class="row" style=" color:#ffffff">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style=" color:#ffffff">EMPRO.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there\'s fabric.</p>
              <p>All rights reserved | This template modified by <i class="fa fa-heart" aria-hidden="true">Nouf, Thurya, Haifa and Najd</i> originally made by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
            </div>
     </div>
          </div>
    </footer>
    
  

  <!-- loader -->
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
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

    
  
</body></html>');}?>
