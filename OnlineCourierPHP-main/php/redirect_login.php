<?php
 session_start();

 if ( isset($_COOKIE['logged_in'])) {
  $_SESSION['logged_in'] = true;
 	$_SESSION['user_role'] =  $_COOKIE['user_role'];
 	$_SESSION['user_id'] = $_COOKIE['logged_id'];
 }else{
 if (!isset($_SESSION["logged_in"] ))
 {
    header("Location: ../html/login.php");

 }
 if ( isset($_SESSION['logged_in'] ))
 {
 if ($_SESSION['logged_in']!=true  )
 {
   header("Location: ../html/login.php");
 } }
}
?>
