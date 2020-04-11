<?php 
    session_start();
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPWD","");
    define("DBNAME","embro");

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

    if(mysqli_connect_errno($con))
        die("Fail to connect to database :" . mysqli_connect_error());
    $username=$_post['user'];
    $password=$_post['pass'];

    $query = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_row($result);
        $_SESSION['user']= $row[0];
        $_SESSION['type']= $row[2];
        $_SESSION['email']= $row[3];
        $_SESSION['name']= $row[4];
        mysqli_close();
        if($_SESSION['type']== 'artist')
        header("Location: mypage.php");
        else if($_SESSION['type']== 'admin')
        header("Location: mypage.php");
        else
        header("Location: mypage.php");

    }

    else {
        mysqli_close();
        header("Location: login.php?error=Wrong Username/Password");
    }
?>