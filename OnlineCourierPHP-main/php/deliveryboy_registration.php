<?php
require_once "../models/db_connect.php";
$fullname = $error_fullname = $username = $error_username = $password =$error_password  = $error_confirm_password = "";
$error_gender = $email = $error_email = $phone_no = $error_phone_no  = $error_city = $city= $error_address = $state = $error_state= $address="";
$hasError = false;
function PassNum()
{

    $x = (strpos($_POST["password"], '1') + strpos($_POST["password"], '2') + strpos($_POST["password"], '3') + strpos($_POST["password"], '4') + strpos($_POST["password"], '5') + strpos($_POST["password"], '6') + strpos($_POST["password"], '7') + strpos($_POST["password"], '8') + strpos($_POST["password"], '9') + strpos($_POST["password"], '0'));

    return $x > 0; # x will never be zero if any one of the number exists in the string

}

function addDel($username,$password,$email,$phone,$city,$state ,$gender , $fullname , $address)
{
  $password=md5($password);
    $query = "INSERT INTO users  VALUES (0,'$username','$password',5,'$email',null,null,
      '$address','$phone',0,'$fullname',$gender,$city,$state);";
//echo $query;
  execute($query);
}


	if(isset($_POST["register"])){
		if(empty($_POST["fullname"])){
			$error_fullname="*Full name required";
			$hasError =true;
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
		}


		if (empty($_POST["username"]))
	{
			$error_username = "*Username required";
			$hasError = true;
	}
	elseif (strlen($_POST["username"]) < 6)
	{
			$error_username = "*Username must be 6 characters long";
			$hasError = true;
	}
	elseif (strpos($_POST["username"], ' ') != false || $_POST["username"] != trim($_POST["username"]))
	{
			$error_username = "*Space is not allowed at start or inside or at end in Username.";
			$hasError = true;
	}
	else
	{
			$username = htmlspecialchars($_POST["username"]);
	}


	if (empty($_POST["password"]))
	 {
			 $error_password = "*Password required";
			 $hasError = true;
	 }
	 elseif (strlen($_POST["password"]) < 8)
	 {
			 $error_password = "*Password must be 8 characters long";
			 $hasError = true;
	 }

	 elseif (!PassNum())
	 {
			 $error_password = "*Password must contain a number ";
			 $hasError = true;
	 }
	 elseif (strtolower($_POST["password"]) == $_POST["password"])
    {
        $error_password = "*Password must contain uppercase and lowercase alphabets ";
        $hasError = true;
    }

    else
    {
			if (strpos($_POST["password"], '#') == false && strpos($_POST["password"], '?') == false )
	 	 			{
	 			 $error_password = "*Password must  contain a special character. Ex : # ? ";
	 			 $hasError = true;
	 	 			}
			if	(strpos($_POST["password"], '#') == true ) {
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;

			}

			if (strpos($_POST["password"], '?') == true )
			{
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;
			}

    }




		 if (empty ($_POST["password_repeated"]))
			{
						 $error_confirm_password = "*Repeat password. ";
					$hasError = true;
			}
			if ( $_POST["password_repeated"]!= $password)
			 {
							$error_confirm_password = "Password dont match. ";
					 $hasError = true;
			 }

			 if (empty($_POST["phone_no"]))
{
		$error_phone_no = "*Phone no  required";
		$hasError = true;
}
elseif (!is_numeric($_POST["phone_no"]))
{
		  $error_phone_no = "*Phone no must be neumeric";
		$hasError = true;
}
else
{
		$phone_no = htmlspecialchars($_POST["phone_no"]);
}


if (empty($_POST["gender"]))
	{
			$error_gender = "*Gender  required";
			$hasError = true;
	}
	else
	{
			$gender = htmlspecialchars($_POST["gender"]);
	}


	if (empty($_POST["email"]))
	{
			$error_email = "*Email required";
			$hasError = true;
	}
	elseif (strpos($_POST["email"], '@') == false || strrpos($_POST["email"], '.') == false || (strrpos($_POST["email"], '.') < strpos($_POST["email"], '@')))
	# strrpos returns the last occurance of a character , I used to find the last occured (.) and its position and later validated it if the dot is after (@) in the third condition.

	{
			$error_email = "*Valid email required";
			$hasError = true;
	}
	else
	{
			$email = htmlspecialchars($_POST["email"]);
	}

	if (empty($_POST["city"]))
		{
				$error_city = "*City  required";
				$hasError = true;
		}
		else
		{
				$city = htmlspecialchars($_POST["city"]);
		}

    if (empty($_POST["state"]))
      {
          $error_state = "*State  required";
          $hasError = true;
      }
      else
      {
          $state = htmlspecialchars($_POST["state"]);
      }
      if (empty($_POST["address"]))
        {
            $error_address = "*Address  required";
            $hasError = true;
        }
        else
        {
            $address = htmlspecialchars($_POST["address"]);
        }



var_dump($_POST);






		if(!$hasError){

      addDel($username,$password,$email,$phone_no,$city,$state ,$gender , $fullname , $address);






			$users = simplexml_load_file("../xml/users.xml");

			$user = $users->addChild("user");
			$user->addChild("username",$username);
			$user->addChild("password",$password);
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("phone","$phone_no");
			$user->addChild("city",$city);
      $user->addChild("state",$state);
			$user->addChild("type","deliveryboy");








			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());


			$file = fopen("../xml/users.xml","w");
			fwrite($file,$xml->saveXML());

				header("Location: ../html/login.php");
		}
	}

?>
