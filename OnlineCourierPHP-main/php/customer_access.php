<?php

 if (!isset($_SESSION["logged_in"] ))
 {

    header("Location: ../html/login.php");

 }
 if ($_SESSION["logged_in"]!=true && isset($_SESSION["logged_in"] ))
 {
   header("Location: ../html/login.php");
 }
 if ($_SESSION["user_role"]!="4"  )
 {
	 header("Location: ../html/login.php");
  }

?>
