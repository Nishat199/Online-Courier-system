<?php
require_once "../models/db_connect.php";
$contains = $error_contains = $error_weight  = $weight = $error_width = $error_height = $height = $product_desc = $error_product_desc = $width= "";
$fullname = $error_fullname = $error_gender = $email = $error_email = $phone_no = $error_phone_no  = $error_city = $city= $address = $error_address = $state = $error_state = "" ;
$fullname2 = $error_billing_method = $billing_method = $error_fullname2 = $error_gender2 = $email2 = $error_email2 = $phone_no2 = $error_phone_no2 ="";
 $error_city2 = $city2= $address2 = $error_address2 = $state2 = $error_state2 = $bill="" ;
 $gender = $gender2 = "";
 $hasError = false;

$order_by=$_COOKIE["logged_id"];

 function addOrder($contains ,$weight, $width ,$height , $product_desc ,
 $fullname,$gender, $email , $phone_no , $city,  $state,$address ,
 $fullname2 ,$gender2,  $email2 , $phone_no2 ,
 $city2,$state2, $address2, $billing_method ,$order_by , $bill){

   $query = "INSERT INTO orders  VALUES (0,'$order_by','$contains' ,'$weight', '$width' ,'$height' , '$product_desc' ,
   '$fullname','$gender', '$email' , '$phone_no' , '$city',  '$state','$address' ,
   '$fullname2' ,'$gender2',  '$email2' , '$phone_no2' ,
   '$city2','$state2', '$address2', '$billing_method' , '$bill', 0,0,0 );";
  // echo $query;
     execute($query);
 }


	if(isset($_POST["courier"])){
		if(empty($_POST["fullname"])){
			$error_fullname="*Full name required";
			$hasError =true;
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
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





        if(empty($_POST["fullname2"])){
          $error_fullname2="*Full name required";
          $hasError =true;
        }
        else{
          $fullname2 = htmlspecialchars($_POST["fullname2"]);
        }


           if (empty($_POST["phone_no2"]))
    {
        $error_phone_no2 = "*Phone no  required";
        $hasError = true;
    }
    elseif (!is_numeric($_POST["phone_no2"]))
    {
        $error_phone_no2 = "*Phone no must be neumeric";
        $hasError = true;
    }
    else
    {
        $phone_no2 = htmlspecialchars($_POST["phone_no2"]);
    }


    if (empty($_POST["gender2"]))
      {
          $error_gender2 = "*Gender  required";
          $hasError = true;
      }
      else
      {
          $gender2 = htmlspecialchars($_POST["gender2"]);
      }


      if (empty($_POST["email2"]))
      {
          $error_email2 = "*Email required";
          $hasError = true;
      }
      elseif (strpos($_POST["email2"], '@') == false || strrpos($_POST["email2"], '.') == false || (strrpos($_POST["email2"], '.') < strpos($_POST["email2"], '@')))
      # strrpos returns the last occurance of a character , I used to find the last occured (.) and its position and later validated it if the dot is after (@) in the third condition.

      {
          $error_email2 = "*Valid email required";
          $hasError = true;
      }
      else
      {
          $email2 = htmlspecialchars($_POST["email2"]);
      }

      if (empty($_POST["city2"]))
        {
            $error_city2 = "*City  required";
            $hasError = true;
        }
        else
        {
            $city2 = htmlspecialchars($_POST["city2"]);
        }

        if (empty($_POST["state2"]))
          {
              $error_state2 = "*State  required";
              $hasError = true;
          }
          else
          {
              $state2 = htmlspecialchars($_POST["state2"]);
          }

          if (empty($_POST["address2"]))
            {
                $error_address2 = "*Address  required";
                $hasError = true;
            }
            else
            {
                $address2 = htmlspecialchars($_POST["address2"]);
            }




            if (empty($_POST["contains"]))
              {
                  $error_contains = "*Content required";
                  $hasError = true;
              }
              else
              {
                  $contains = htmlspecialchars($_POST["contains"]);
              }

if (empty($_POST["width"]))
{
$error_width = "*Width  required";
$hasError = true;
}
else
{
$width = htmlspecialchars($_POST["width"]);
}

if (empty($_POST["height"]))
{
$error_height = "*Height  required";
$hasError = true;
}
else
{
$height = htmlspecialchars($_POST["height"]);
}

if (empty($_POST["weight"]))
{
$error_weight = "*Weight  required";
$hasError = true;
}
else
{
$weight = htmlspecialchars($_POST["weight"]);
}

if (empty($_POST["product_desc"]))
{
$error_product_desc = "*Product description is required";
$hasError = true;
}
else
{
$product_desc = htmlspecialchars($_POST["product_desc"]);
}
if (empty($_POST["payable"]))
{
$hasError = true;
echo "string";
}
else
{
$bill = htmlspecialchars($_POST["payable"]);
}




if (empty($_POST["billing_method"]))
{
$error_billing_method = "*Billing method is required";
$hasError = true;
}
else
{
$billing_method = htmlspecialchars($_POST["billing_method"]);
}
echo $hasError;

//var_dump($_POST);

        if (!$hasError){


        addOrder($contains ,$weight, $width ,$height , $product_desc ,
        $fullname,$gender, $email , $phone_no , $city,  $state,$address ,
        $fullname2 ,$gender2,  $email2 , $phone_no2 ,
        $city2,$state2, $address2, $billing_method ,$order_by , $bill);

				header("Location: ../html/history_courier.php");
		}
  }


?>
