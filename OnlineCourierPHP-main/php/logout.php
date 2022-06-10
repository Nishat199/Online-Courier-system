<?php
 session_start();

setcookie("logged_in", "", time() - 3600);

setcookie("logged_id", "", time() - 3600);

setcookie("user_role", "", time() - 3600);
 if (isset($_SESSION["logged_in"] ))
 {
$_SESSION["logged_in"]=false ;
$_SESSION['username'] = "";
$_SESSION['user_role'] = "";
$_SESSION['user_id'] = "";


    header("Location: ../html/login.php");

 }

?>
