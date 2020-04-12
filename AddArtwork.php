<?php 
    session_start();
    if(!isset($_SESSION['user']))
       header("Location: login.php");//check
    else
    {

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$titleErr ="";
 $imageErr="";
$Err= "";
$title = "";
$descrption="";
$comment= "";
$iserror= false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $iserror= true;
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            $iserror= true;
        }
    }

  if (empty($_POST["title"])) {
    $titleErr = "title is required";
    $iserror= true;
  } else {
    $title = test_input($_POST["title"]);
    
  }
  $description=test_input($_POST["description"]);
  $category=$_POST["cate"];
  $date= date('Y-m-d');
  if (empty($_POST["comment"]))
  $comment="no";
  else
  $comment="yes";
  //image too

  if(!$iserror){
    
    $con = mysqli_connect("localhost",'root','','embro');

    if(mysqli_connect_errno($con))
        die("Fail to connect to database :" . mysqli_connect_error());
    
    $query = 'INSERT INTO artwork (title , caption , artist_username , image_path, comment_ability, category) VALUES ("'.$title.'","'.$description.'","'.$_session['user'].'", "'.$target_file.'","'.$comment.'","'. $category.'")';
    
   if( $result = mysqli_query($con,$query)){
     
     $username=$_session['user'];
     $query = "SELECT id FROM artwork WHERE title='$title' AND artist_username = '$username'";
     $result = mysqli_query($con,$query);
     $row = mysqli_fetch_row($result);
     $_SESSION['id']=$row[0];
        header("Location: Artwork.php");//check thurya

      }
      else {
      header("Location: page.php");//to the page that contains the add button 
      }
    }



  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Artwork</title>
    <meta charset="utf-8">
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
    <style>
      .image-preview {
        width: 300px;
        min-height: 100px;
        border: 2px solid #dddddd;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #cccccc;
      }
      .image-preview-image {
        display: none;
        width: 100%;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">EMBRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="true" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="navbar-collapse collapse show" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">My Profile</a></li>
            <li class="nav-item"><a href="myFav.php" class="nav-link">My Favorite</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Add Artwork </h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
      <form action="AddArtwork.php" method="post" enctype="multipart/form-data">
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Artwork Title" name = "title" required>
              </div>
              <div class="form-group">
                <textarea name="description" cols="30" rows="7" class="form-control" placeholder="Artwork description (optional)"></textarea>
              </div>
              <div class="form-group">
                <input type="text" name = "cate" class="form-control" placeholder="Artwork categories (optional)">
              </div>
              <div class="form-group">
                <input type="checkbox" id="comment" name="comment" checked>
                <label for="comment" style = "color:black;"> Allow comments on my artwork </label>
              </div>
              <div class="form-group">
                <input type="submit" value="Submit Artwork" class="btn btn-primary py-3 px-5">
              </div>
          </div>
          <div class="col-md-6" style="position: relative; overflow: hidden;">
            <div class = "form-group">
              <p style = "color:black;">Upload artwork file</p>
              <input style = "color:black;" type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
            <div class="image-preview" id="imagePreview">
              <img src="" alt="Artwork Preview" class="image-preview-image">
              <span class="image-preview-default-text">Artwork Preview</span>
            </div>
          </div>
        </div>
      </form>
      </div>
    </section>
    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">EMBRO</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there is fabric.</p>
            </div>
          </div>
          <div class="col-md">
             
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><div class="py-2 d-block">198 West 21th Street, Suite 721 Riyadh 10016</div></li>
                <li><div class="py-2 d-block">+ 1235 2355 98</div></li>
                <li><a href="mailto:novrartist@gmail.com" class="py-2 d-block">novrartist@gmail.com</a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can not be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright ©️<script>document.write(new Date().getFullYear());</script>20202020 All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can not be removed. Template is licensed under CC BY 3.0. -->
  All rights reserved | This template modified by <i class="icon-heart" aria-hidden="true">Nouf, Thurya, Haifa and Najd</i> originally mede by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
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

  <!--The script below originaly made by dcode @ youtube
  title: Previewing Image Before File Upload - JavaScript Tutorial -->
  <script>
    var file = document.getElementById("fileToUpload");
    var container = document.getElementById("imagePreview");
    var image = container.querySelector(".image-preview-image");
    var txt = container.querySelector(".image-preview-default-text");
    file.addEventListener("change", function(){
      var fFile = this.files[0];
      if (fFile){
        var reader = new FileReader();
        txt.style.display = "none";
        image.style.display = "block";
        reader.addEventListener("load", function(){
          image.setAttribute("src", this.result);
        });
        reader.readAsDataURL(fFile);
      } else {
        txt.style.display = "null";
        image.style.display = "null";
        image.setAttribute("src", "");
      }
    });
  </script>  
  </body>
</html>
<?php }?>
