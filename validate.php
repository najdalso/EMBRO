<?php 
    session_start();
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPWD","");
    define("DBNAME","embro");

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

    if(mysqli_connect_errno($con))
        die("Fail to connect to database :" . mysqli_connect_error());
    $username=$_GET['user'];
    $password=$_GET['pass'];

    $query = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_row($result);
        $_SESSION['user']= $row[0];
        $_SESSION['type']= $row[2];
        $_SESSION['email']= $row[3];
        $_SESSION['name']= $row[4];
        mysqli_close();
        if($_SESSION['type']== 'artist'){
            $query = "SELECT * FROM artist WHERE username = '$username'";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_row($result);
            $_SESSION['approved']= $row[2];

             if($_SESSION['approved'] == 'yes'){
               $_SESSION['bio']= $row[1];
               $_SESSION['website']= $row[3];
               header("Location: homepage.php");}//artistpage
             else
                header("Location: homepageUser.php");//user page
        }
        else if($_SESSION['type']== 'admin')
             header("Location: admin.php");//admin
        else
              header("Location: homepageUser.php");//user
    }

    else {
          mysqli_close();
          header("Location: login.php?error=Wrong Username/Password");
    }

?>
