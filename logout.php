<?php
//// unset all $_SESSION variables
    session_start();

$_SESSION = array();
session_destroy(); 
header("Location: login.php");
exit;
?>