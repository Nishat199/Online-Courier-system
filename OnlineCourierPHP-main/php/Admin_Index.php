<?php

require_once "../models/db_connect.php";
function validUser(  $username,$pass){
	$password=md5($pass);
	$query = 'select count(id) from users where username="' .$username .'" and password="' .$password .'";';
//	 echo $query;

$x =get($query);
return $x ;
}
function getID($pass , $username){
	$password=md5($pass);
	$query = 'select id,user_role from users where username="' .$username .'" and password="' .$password .'";';
	// echo $query;

$x =get($query);
return $x ;
}

	session_start();

	$flag=false;
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){

$ans =validUser($_POST['username'] , $_POST['password']);

if ($ans[0]['count(id)'] ==1 ){
	$flag = true;
	$user = getID($_POST['password'], $_POST['username'] );

	$_SESSION['logged_in'] = true;
  $_SESSION['username'] = $_POST['username'];
	$_SESSION['user_role'] =  $user[0]['user_role'];
	$_SESSION['user_id'] = $user[0]['id'];

setcookie("logged_in","true",time() + (86400 * 30), "/");
setcookie("logged_id",$user[0]['id'],time() + (86400 * 30), "/");
setcookie("user_role",$user[0]['user_role'],time() + (86400 * 30), "/");

	}
}



	if($flag){
	#		var_dump($_SESSION);
	if(($_SESSION["user_role"]=="4"  )){
	header("Location: ../html/Home Page.php");}
	if(($_SESSION["type"]=="Employee"  )){
	header("Location: ../html/EmployeePanel.php");}
	if(($_SESSION["user_role"]=="5"  )){
	header("Location: ../html/DeliveryboyPanel.php");}
	if(($_SESSION["type"]=="Admin"  )){
	header("Location: ../html/AdminPanel.php");}

	}else{
		if( (isset($_POST['password']) )&&(isset($_POST['username']))){
		echo "Invalid credentiails";
	}
	else{ echo "Provide credentials.";}
	}

?>
