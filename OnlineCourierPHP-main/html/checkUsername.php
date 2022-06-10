<?php
     include "../php/admin_registration.php" ;
	 $username=$_GET["u"];
	 $user=getUser($username);
	 if($user)
	 {
		 echo"<span style ='color:red'>Username Exists</span>";

	 }else if (strlen($username)>0)
	 {
		 echo"<span style ='color:green'>Username Available</span>";
	 }
?>
