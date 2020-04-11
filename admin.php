 <?php 
   // session_start();
    //if(!isset($_SESSION['user']))
      //   header("Location: start.php");//check
      //else
      {
  $connect = mysqli_connect('localhost','root','', 'embro');
 if(mysqli_connect_errno($connect))
        die("Fail to connect to database :" . mysqli_connect_error());
        $SQL_username = 'SELECT username,Approval FROM accounts WHERE Approval = 0';
        $SQL_comment = 'SELECT comment FROM comments ';
        $SQL_art = 'SELECT likes,id  FROM artwork ';
        
        $result = mysqli_query($connect,$SQL_username);
        $result_c = mysqli_query($connect,$SQL_comment);
        $result_A = mysqli_query($connect,$SQL_art);
        
$username = mysqli_fetch_all($result,MYSQLI_ASSOC);
$comment = mysqli_fetch_all($result_c,MYSQLI_ASSOC);
$arteork = mysqli_fetch_all($result_A,MYSQLI_ASSOC);
    

mysqli_free_result($result);
mysqli_free_result($result_c);
mysqli_free_result($result_A);
    
mysqli_close($connect);
//  $sql ="UPDATE accounts SET Approval='1' WHERE username = $thisuser ";

//print_r($username) 

?>
<!DOCTYPE>
<html>

<head>	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/css" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> <!-- ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ -->
    <link rel="stylesheet" href="css/animate.css"> <!-- ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ -->

    <link rel="stylesheet" href="css/owl.carousel.min.css"> <!-- ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½  ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> <!-- ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½  ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> <!-- ï¿½ï¿½ï¿½ï¿½  ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ -->

    <link rel="stylesheet" href="css/aos.css">  <!-- ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ -->

    <link rel="stylesheet" href="css/ionicons.min.css"> <!-- ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ -->
 
    <link rel="stylesheet" href="css/bootstrap-datepicker.css"> <!-- ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ,ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½  -->
    <link rel="stylesheet" href="css/jquery.timepicker.css"> <!--  ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ,ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ ï¿½ï¿½ï¿½ï¿½ï¿½ -->


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
     <link rel="stylesheet" href="counterSectionStyle.css">  
				
<link href="bootstrap.min-stattic.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
       
</head>
<body data-aos-easing="slide" data-aos-duration="1000" data-aos-delay="0">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">EMBRO.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Home page</a></li>
                    <li class="nav-item cta"><a href="/start.html" class="nav-link"><span>sign out</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    
     <!-- END nav -->
      <div class="hero-wrap " style="height: 700px;">
        <div class="overlay"></div>
        <div id="particles-js"><canvas class="particles-js-canvas-el" width="1770" height="1561" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center fadeInUp ftco-animated" data-scrollax=" properties: { translateY: &#39;70%&#39; }" style="transform: translateZ(0px) translateY(0%);">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);"><strong>Welcome back</strong></h1>
                    <p data-scrollax="properties: { translateY: &#39;30%&#39;, opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

     <!-- Here is the section -->
     
      <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay count-title">
                    <div class="container">
                        <div class="row-16">
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-3">
                                    <div class="single_counter counter fa-2x ">
                                        <i class="fa fa-users  fa-2x "></i>
                                        <?php $usres = count($username);?>
                                        <h1 class="timer count-title count-number" data-to="<?php  echo $usres; ?>" data-speed="2000"></h1>
                                        <p>EMBRO. Users</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter counter fa-2x ">
                                        <i class="fa fa-heart count-text"></i>
                                        <?php $art=count($arteork);?>
      <h1 class="timer count-title count-number" data-to="<?php echo $art?>" data-speed="3500"></h1>
                                        <p>EMBRO. Likes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter counter fa-2x ">
                                        <i class="fa fa-comment count-text"></i>
                                        <?php $com = count($comment);?>
      <h1 class="timer count-title count-number" data-to="<?php  echo $com; ?>" data-speed="2000"></h1>
                                        <p>EMBRO. comments</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter counter fa-2x ">
                                        <i class="fa fa-picture-o count-text"></i>
                                    <?php $artid=count($arteork);?>
                                        
      <h1 class="timer count-title count-number" data-to="<?php  echo $artid; ?>" data-speed="3500"></h1>
                                        <p>EMBRO. Artwork</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of counter Section -->

<!-- start of approve request section  -->    

<div class="container my-5" overflow: auto; >
    <div class="row" >
    <?php foreach ($username as $newuser) {   ?>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="ico">
                            <img class="img-fluid" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSItMjAgMCA1MTIgNTEyLjAwMTAyIiB3aWR0aD0iNTEycHgiPjxwYXRoIGQ9Im00MjYuNDkyMTg4IDM1Ni40ODQzNzVoLTM4MS45MTAxNTdjMTcuNSAwIDI3LjM5NDUzMS05LjE1NjI1IDMzLjAxMTcxOS0yNC4zMzIwMzEgMjcuMTY3OTY5LTczLjI4NTE1Ni00NS4xOTkyMTktMjg2Ljg1MTU2MyAxNTcuOTQ5MjE5LTI4Ni44NTE1NjMgMjAzLjE0NDUzMSAwIDEzMC43NjU2MjUgMjEzLjU2NjQwNyAxNTcuOTM3NSAyODYuODUxNTYzIDUuNjI1IDE1LjE3NTc4MSAxNS41MjM0MzcgMjQuMzMyMDMxIDMzLjAxMTcxOSAyNC4zMzIwMzF6bTAgMCIgZmlsbD0iI2Y3ZDM2MCIvPjxwYXRoIGQ9Im00NjMuNDY4NzUgMzkzLjQ1NzAzMWMwIDIwLjQyMTg3NS0xNi41NTg1OTQgMzYuOTc2NTYzLTM2Ljk3NjU2MiAzNi45NzY1NjNoLTM4MS45MTAxNTdjLTEwLjIxMDkzNyAwLTE5LjQ1NzAzMS00LjEzNjcxOS0yNi4xNDg0MzctMTAuODI4MTI1LTYuNjkxNDA2LTYuNjkxNDA3LTEwLjgyODEyNS0xNS45Mzc1LTEwLjgyODEyNS0yNi4xNDg0MzggMC0yMC40MTc5NjkgMTYuNTU0Njg3LTM2Ljk3MjY1NiAzNi45NzY1NjItMzYuOTcyNjU2aDM4MS45MTAxNTdjMTAuMjEwOTM3IDAgMTkuNDU3MDMxIDQuMTM2NzE5IDI2LjE0ODQzNyAxMC44MjgxMjVzMTAuODI4MTI1IDE1LjkzNzUgMTAuODI4MTI1IDI2LjE0NDUzMXptMCAwIiBmaWxsPSIjZTU4ZTEzIi8+PHBhdGggZD0ibTM5My40ODA0NjkgMzMyLjE1MjM0NGgtMTk4LjVjLTIxLjM5ODQzOCAwLTM4LjUxMTcxOS0xNy43MTQ4NDQtMzcuODQ3NjU3LTM5LjEwNTQ2OSAyLjc5Njg3Ni05MC41LTExLjYzNjcxOC0yNDYuMDI3MzQ0IDc2LjkyMTg3Ni0yNDcuNzM4MjgxLTI0My4wOTM3NSAxLjI1NzgxMi04Ny42OTkyMTkgMzExLjE3NTc4MS0xODkuNDY4NzUgMzExLjE3NTc4MWgzODEuOTA2MjVjLTE3LjQ4ODI4MiAwLTI3LjM4NjcxOS05LjE1NjI1LTMzLjAxMTcxOS0yNC4zMzIwMzF6bTAgMCIgZmlsbD0iI2U1OGUxMyIvPjxwYXRoIGQ9Im00NjMuNDY4NzUgMzkzLjQ1NzAzMWMwIDIwLjQyMTg3NS0xNi41NTg1OTQgMzYuOTc2NTYzLTM2Ljk3NjU2MiAzNi45NzY1NjNoLTI3NS4wNjI1Yy0xMC4yMDcwMzIgMC0xOS40NTMxMjYtNC4xMzY3MTktMjYuMTQ0NTMyLTEwLjgyODEyNS02LjY5MTQwNi02LjY5MTQwNy0xMC44MjgxMjUtMTUuOTM3NS0xMC44MjgxMjUtMjYuMTQ4NDM4IDAtMjAuNDE3OTY5IDE2LjU1NDY4OC0zNi45NzI2NTYgMzYuOTcyNjU3LTM2Ljk3MjY1NmgyNzUuMDYyNWMxMC4yMTA5MzcgMCAxOS40NTcwMzEgNC4xMzY3MTkgMjYuMTQ4NDM3IDEwLjgyODEyNXMxMC44MjgxMjUgMTUuOTM3NSAxMC44MjgxMjUgMjYuMTQ0NTMxem0wIDAiIGZpbGw9IiNmN2QzNjAiLz48cGF0aCBkPSJtMzA5LjQ5MjE4OCA0MzAuNDMzNTk0YzAgMzQuMDAzOTA2LTIyLjk0NTMxMyA2Mi42MzY3MTgtNTQuMTc5Njg4IDcxLjI4NTE1Ni02LjI5Njg3NSAxLjc0MjE4OC0xMi45MjU3ODEgMi42NzU3ODEtMTkuNzY5NTMxIDIuNjc1NzgxLTQwLjg1MTU2MyAwLTczLjk2MDkzOC0zMy4xMTMyODEtNzMuOTYwOTM4LTczLjk2MDkzN3ptMCAwIiBmaWxsPSIjZTU4ZTEzIi8+PHBhdGggZD0ibTMwNS45MTQwNjIgNDUzLjI0NjA5NGMtNy42MTMyODEgMjMuNS0yNi42NzU3ODEgNDEuODUxNTYyLTUwLjYwMTU2MiA0OC40NzI2NTYtMTUuMDQyOTY5LTQuMTYwMTU2LTI4LjE2MDE1Ni0xMi45NTMxMjUtMzcuNzIyNjU2LTI0Ljc0NjA5NC03LjcwNzAzMi05LjUwNzgxMi0uNzUzOTA2LTIzLjcyNjU2MiAxMS40ODQzNzUtMjMuNzI2NTYyem0wIDAiIGZpbGw9IiNmN2QzNjAiLz48cGF0aCBkPSJtMjczLjEyNSA0OC4xMjg5MDZjLjA4MjAzMS0uOTMzNTk0LjExMzI4MS0xLjg3NS4xMTMyODEtMi44MjgxMjUgMC0yMC44MTY0MDYtMTYuODgyODEyLTM3LjY5NTMxMi0zNy42OTUzMTItMzcuNjk1MzEyLTIwLjgyODEyNSAwLTM3LjY5NTMxMyAxNi44Nzg5MDYtMzcuNjk1MzEzIDM3LjY5NTMxMiAwIC45NTMxMjUuMDI3MzQ0IDEuODk0NTMxLjEwOTM3NSAyLjgyODEyNSIgZmlsbD0iI2U1OGUxMyIvPjxwYXRoIGQ9Im00MjYuNDkyMTg4IDM0OC44NzVoLS4wMzEyNWMtMTQuNzIyNjU3LS4wMDc4MTItMjMuMDM1MTU3LTcuNjQ4NDM4LTI3Ljc5Mjk2OS0yNS41MzEyNS00Ljg2MzI4MS0xOC4yODkwNjItNS4wMjczNDQtNDQuODEyNS01LjE5OTIxOS03Mi44OTQ1MzEtLjIwNzAzMS0zNC4wMjM0MzgtLjQ0MTQwNi03Mi41ODU5MzgtOC44OTg0MzgtMTA3LjA3NDIxOS0xLTQuMDc4MTI1LTUuMTIxMDkzLTYuNTc0MjE5LTkuMTk5MjE4LTUuNTc0MjE5LTQuMDc0MjE5IDEtNi41NzAzMTMgNS4xMTcxODgtNS41NzQyMTkgOS4xOTUzMTMgOC4wMzUxNTYgMzIuNzUgOC4yNjE3MTkgNzAuMzYzMjgxIDguNDY0ODQ0IDEwMy41NDY4NzUuMTc5Njg3IDI5LjA3ODEyNS4zNDM3NSA1Ni41NDI5NjkgNS43MDcwMzEgNzYuNzA3MDMxIDIuMzMyMDMxIDguNzY5NTMxIDUuNjc1NzgxIDE1Ljk3NjU2MiA5Ljk5NjA5NCAyMS42MjVoLTMxNi44NTU0NjljNC4zMjAzMTMtNS42NDg0MzggNy42NjQwNjMtMTIuODU1NDY5IDkuOTk2MDk0LTIxLjYyNSA1LjM2MzI4MS0yMC4xNjQwNjIgNS41MzEyNS00Ny42Mjg5MDYgNS43MDcwMzEtNzYuNzA3MDMxLjI2OTUzMS00NC4zOTQ1MzEuNTc4MTI1LTk0LjcxMDkzOCAxOC43NDIxODgtMTMzLjIxODc1IDIwLjQ0NTMxMi00My4zNDc2NTcgNjEtNjQuNDIxODc1IDEyMy45ODQzNzQtNjQuNDIxODc1IDM0LjU4OTg0NCAwIDYyLjg5NDUzMiA2LjUgODQuMTI1IDE5LjMyNDIxOCAxOC40MTAxNTcgMTEuMTE3MTg4IDMxLjkyNTc4MiAyNi45MTc5NjkgNDEuMzIwMzEzIDQ4LjMwNDY4OCAxLjY4NzUgMy44NDM3NSA2LjE3NTc4MSA1LjU5Mzc1IDEwLjAxOTUzMSAzLjkwMjM0NCAzLjg0Mzc1LTEuNjg3NSA1LjU5Mzc1LTYuMTcxODc1IDMuOTA2MjUtMTAuMDE5NTMyLTEwLjU1MDc4MS0yNC4wMTU2MjQtMjYuNDkyMTg3LTQyLjU4OTg0My00Ny4zODI4MTItNTUuMjA3MDMxLTEzLjMzNTkzOC04LjA1NDY4Ny0yOC45OTYwOTQtMTMuODYzMjgxLTQ2LjgzMjAzMi0xNy40MDIzNDMtMS43OTY4NzQtMjMuMzQ3NjU3LTIxLjM1NTQ2OC00MS44MDQ2ODgtNDUuMTU2MjUtNDEuODA0Njg4LTIzLjgwMDc4MSAwLTQzLjM2MzI4MSAxOC40NjA5MzgtNDUuMTQ4NDM3IDQxLjgxMjUtMTcuMDE1NjI1IDMuMzcxMDk0LTMyLjA1ODU5NCA4LjgwNDY4OC00NC45Njg3NSAxNi4yODUxNTYtMjAuNzczNDM3IDEyLjAzOTA2My0zNi43OTY4NzUgMjkuNzg1MTU2LTQ3LjYyNSA1Mi43MzgyODItMTkuNTkzNzUgNDEuNTQyOTY4LTE5LjkxNDA2MyA5My42NDQ1MzEtMjAuMTkxNDA2IDEzOS42MTMyODEtLjE3MTg3NSAyOC4wODIwMzEtLjMzMjAzMSA1NC42MDU0NjktNS4xOTkyMTkgNzIuODk0NTMxLTQuNzU3ODEyIDE3Ljg4MjgxMi0xMy4wNzAzMTIgMjUuNTIzNDM4LTI3Ljc5Mjk2OSAyNS41MzEyNWgtLjAzMTI1Yy0yNC41ODIwMzEgMC00NC41ODIwMzEgMjAtNDQuNTgyMDMxIDQ0LjU4NTkzOCAwIDI0LjU4MjAzMSAyMCA0NC41ODIwMzEgNDQuNTgyMDMxIDQ0LjU4MjAzMWg0OC4xMjg5MDdjNC4xOTkyMTggMCA3LjYwNTQ2OC0zLjQwNjI1IDcuNjA1NDY4LTcuNjA1NDY5cy0zLjQwNjI1LTcuNjAxNTYyLTcuNjA1NDY4LTcuNjAxNTYyaC00OC4xMjg5MDdjLTE2LjE5NTMxMiAwLTI5LjM3NS0xMy4xNzk2ODgtMjkuMzc1LTI5LjM3NSAwLTE2LjE5NTMxMyAxMy4xNzU3ODEtMjkuMzcxMDk0IDI5LjM3MTA5NC0yOS4zNzVoLjAwMzkwNi4wMjczNDQgMzgxLjg1MTU2My4wMjczNDMuMDA3ODEzYzE2LjE5MTQwNi4wMDM5MDYgMjkuMzY3MTg3IDEzLjE3OTY4NyAyOS4zNjcxODcgMjkuMzc1IDAgMTYuMTk1MzEyLTEzLjE3OTY4NyAyOS4zNzUtMjkuMzc1IDI5LjM3NWgtMzAzLjM1OTM3NWMtNC4xOTkyMTggMC03LjYwMTU2MiAzLjQwMjM0My03LjYwMTU2MiA3LjYwMTU2MnMzLjQwMjM0NCA3LjYwNTQ2OSA3LjYwMTU2MiA3LjYwNTQ2OWgzMS4yMTQ4NDRjMy44NDc2NTYgNDEuNDIxODc1IDM4Ljc4NTE1NiA3My45NTcwMzEgODEuMTk1MzEyIDczLjk1NzAzMSA0Mi40MDYyNSAwIDc3LjM0Mzc1LTMyLjUzNTE1NiA4MS4xOTE0MDctNzMuOTU3MDMxaDEwOS43NjE3MTljMjQuNTgyMDMxIDAgNDQuNTgyMDMxLTIwIDQ0LjU4MjAzMS00NC41ODIwMzEgMC0yNC41ODU5MzgtMjAtNDQuNTg1OTM4LTQ0LjU4MjAzMS00NC41ODU5Mzh6bS0xOTAuOTUzMTI2LTMzMy42Njc5NjljMTQuNTYyNSAwIDI2Ljc0MjE4OCAxMC40MDIzNDQgMjkuNTAzOTA3IDI0LjE2NDA2My05LjMzNTkzOC0xLjEwMTU2My0xOS4xNjQwNjMtMS42NzU3ODItMjkuNTAzOTA3LTEuNjc1NzgyLTEwLjMzOTg0MyAwLTIwLjE2Nzk2OC41NzAzMTMtMjkuNSAxLjY3MTg3NiAyLjc2MTcxOS0xMy43NjE3MTkgMTQuOTM3NS0yNC4xNjAxNTcgMjkuNS0yNC4xNjAxNTd6bTAgNDgxLjU4NTkzOGMtMzQuMDE1NjI0IDAtNjIuMTIxMDkzLTI1LjczNDM3NS02NS45MDYyNS01OC43NWgxMzEuODA4NTk0Yy0zLjc4NTE1NiAzMy4wMTU2MjUtMzEuODkwNjI1IDU4Ljc1LTY1LjkwMjM0NCA1OC43NXptMCAwIi8+PHBhdGggZD0ibTM1Ny42MzI4MTIgNDcuNzIyNjU2Yy4xMzY3MTkuMDc0MjE5IDEzLjY3NTc4MiA3LjgwMDc4MiAyNi45OTYwOTQgMjUuNzUgMTcuODQzNzUgMjQuMDM5MDYzIDI2Ljg4NjcxOSA1NC4wNzAzMTMgMjYuODg2NzE5IDg5LjI2MTcxOSAwIDQuMTk5MjE5IDMuNDA2MjUgNy42MDU0NjkgNy42MDU0NjkgNy42MDU0NjkgNC4xOTkyMTggMCA3LjYwNTQ2OC0zLjQwNjI1IDcuNjA1NDY4LTcuNjA1NDY5IDAtNDguNDQ1MzEzLTE2LjU0Mjk2OC04MC42MDE1NjMtMzAuNDIxODc0LTk5LjA0Mjk2OS0xNS4yNS0yMC4yNjU2MjUtMzAuNjQ0NTMyLTI4LjkxMDE1Ni0zMS4yOTI5NjktMjkuMjY5NTMxLTMuNjY3OTY5LTIuMDIzNDM3LTguMjY5NTMxLS42OTUzMTMtMTAuMzA4NTk0IDIuOTYwOTM3LTIuMDM5MDYzIDMuNjYwMTU3LS43MjI2NTYgOC4yODUxNTcgMi45Mjk2ODcgMTAuMzM5ODQ0em0wIDAiLz48cGF0aCBkPSJtNDE1LjAwMzkwNiA1MC41MTE3MTljMS4yMjI2NTYuODAwNzgxIDI5Ljk2ODc1IDIwLjA5Mzc1IDI5Ljk2ODc1IDY4LjYzMjgxMiAwIDQuMTk5MjE5IDMuNDA2MjUgNy42MDE1NjMgNy42MDU0NjkgNy42MDE1NjNzNy42MDE1NjMtMy40MDIzNDQgNy42MDE1NjMtNy42MDE1NjNjMC01Ny4yNS0zNS40NjQ4NDQtODAuNDgwNDY5LTM2Ljk3NjU2My04MS40NDE0MDYtMy41MjczNDQtMi4yNDYwOTQtOC4xOTE0MDYtMS4yMDcwMzEtMTAuNDU3MDMxIDIuMzEyNS0yLjI2NTYyNSAzLjUxNTYyNS0xLjI0NjA5NCA4LjIxMDkzNyAyLjI1NzgxMiAxMC40OTYwOTR6bTAgMCIvPjxwYXRoIGQ9Im01MS45NDkyMTkgMTcwLjMzOTg0NGM0LjE5OTIxOSAwIDcuNjA1NDY5LTMuNDA2MjUgNy42MDU0NjktNy42MDU0NjkgMC0zNS4xOTE0MDYgOS4wNDY4NzQtNjUuMjIyNjU2IDI2Ljg4NjcxOC04OS4yNjE3MTkgMTMuMjM4MjgyLTE3LjgzNTkzNyAyNi42OTUzMTMtMjUuNTc4MTI1IDI2Ljk5MjE4OC0yNS43NSAzLjY2MDE1Ni0yLjAzNTE1NiA0Ljk4ODI4MS02LjY1MjM0NCAyLjk2MDkzNy0xMC4zMjAzMTItMi4wMzUxNTYtMy42NzU3ODItNi42NjAxNTYtNS4wMDc4MTMtMTAuMzM1OTM3LTIuOTgwNDY5LS42NDg0MzguMzU5Mzc1LTE2LjA0Mjk2OSA5LjAwMzkwNi0zMS4yOTI5NjkgMjkuMjY5NTMxLTEzLjg3NSAxOC40NDE0MDYtMzAuNDE3OTY5IDUwLjU5NzY1Ni0zMC40MTc5NjkgOTkuMDQyOTY5IDAgNC4xOTkyMTkgMy40MDIzNDQgNy42MDU0NjkgNy42MDE1NjMgNy42MDU0Njl6bTAgMCIvPjxwYXRoIGQ9Im0xOC40OTYwOTQgMTI2Ljc0NjA5NGM0LjE5OTIxOCAwIDcuNjAxNTYyLTMuNDAyMzQ0IDcuNjAxNTYyLTcuNjAxNTYzIDAtNDguNSAyOC43MDMxMjUtNjcuODA0Njg3IDI5Ljk2ODc1LTY4LjYyODkwNiAzLjUxNTYyNS0yLjI2MTcxOSA0LjU0Njg3NS02Ljk0NTMxMyAyLjMwMDc4Mi0xMC40NzY1NjMtMi4yNTM5MDctMy41NDI5NjgtNi45NTMxMjYtNC41ODU5MzctMTAuNS0yLjMzMjAzMS0xLjUwNzgxMy45NjA5MzgtMzYuOTc2NTYzIDI0LjE4NzUtMzYuOTc2NTYzIDgxLjQzNzUgMCA0LjE5OTIxOSAzLjQwNjI1IDcuNjAxNTYzIDcuNjA1NDY5IDcuNjAxNTYzem0wIDAiLz48L3N2Zz4K" height = 70px width =70px/>
                        </div>
                        <div class="main ml-3">
                            <h1 class="m-0 font-weight-light h3">New Registration Request!</h1>
                            <p class="mb-1 ">You have new registration request from:  <?php 
                            echo $newuser['username'];
                              ?> </p>
                            <a target="_blank" href="#">check ... Art work</a>
                        </div>
                    </div>
                    <div class="action border-left pl-3 d-flex align-items-center">
                        <div>
                            <div>
                            <p method="post" name="button1" class="btn btn-outline-success btn-block btn-md" onclick="Approval(this)">Approval</p>                         
                            <p method="post" name="button2" class="btn btn-outline-danger btn-block btn-md" onclick="Rejection(this)">Rejection</p>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php  } ?>
      
    </div>
</div>

<!-- Add this script before </body> -->
   <script>

        function Approval(bt) {
        	var div1 = bt.parentNode;
        	var div2 = div1.parentNode;
        	var div3 = div2.parentNode;
        	var div4 = div3.parentNode;
        	var div5 = div4.parentNode;
        	div5.parentNode.removeChild(div5);
        	

        }

        function Rejection(bt) {
        	var div1 = bt.parentNode;
        	var div2 = div1.parentNode;
        	var div3 = div2.parentNode;
        	var div4 = div3.parentNode;
        	var div5 = div4.parentNode;
        	div5.parentNode.removeChild(div5);
        }

        </script>

  <script type="text/javascript" src="statistic-counter.js"></script>
  <script type="text/javascript" src="jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="jquery.counterup.min.js"></script>
        
		</body>
<footer>
    <div  style=" height: 100px;  background-color:#ff99cc;">
     <div class="container">
        <div class="row" style=" color:#ffffff">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">EMPRO.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there's fabric.</p>
            </div>
     </div>
          </div>
    </footer>
    
 


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
</html>
<?php
    }
?>
