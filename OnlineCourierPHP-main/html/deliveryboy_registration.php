<?php include "../php/deliveryboy_registration.php" ;?>
<html>
	<head>
		<title>Customer Registration</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/registration.css">

<script type="text/javascript" src="js/validate_deliveryboy_register.js"></script>
<script type="text/javascript" src="js/city.js">	</script>
<script type="text/javascript" src="js/state.js">	</script>
<script type="text/javascript">
    window.onload =  function(){

         cities();
				   states();
    };
</script>
</head>
	<body >
			<?php include "navbar.php" ;?>

		<fieldset id="register_form" align= "center" >
      <h1>Delivery Personnel Registration</h1><br>

			<form action="" method="post" onsubmit="return validateform()" name="registerform" >
				<table>
          <tr>
          <td style="text-align: left;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname" id="fullname" value=<?php echo $fullname; ?>><span id="name_error"><?php echo $error_fullname; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Username:</td>
          <td style="text-align: left;"><input type="text" name="username" onfocusout="checkUser(this)" value=<?php echo $username; ?>><span id="username_error"><?php echo $error_username; ?></span></td>
          <tr>
          <td style="text-align: left;"> Password:</td>
          <td style="text-align: left;"><input type="password" name="password" id="password" value=<?php echo $password; ?>><span id="password_error" ><?php echo $error_password; ?></span></td>
          </tr>
          <tr>
          <td style="text-align: left;"> Confirm Password:</td>
          <td style="text-align: left;"><input type="password" name="password_repeated"  id="password_repeated" value=""><span id="password_mismatch_error"><?php echo $error_confirm_password; ?></span></td>
          </tr>
          <tr>

          <td  style="text-align: left;" >Gender:</td>

          <td><input type="radio" name="gender" id="gender" value="1">Male
          <input type="radio" name="gender" value="0">Female
          <span id="gender_error" ><?php echo $error_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" id="email" value=<?php echo $email; ?> ><span id="email_error" ><?php echo $error_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no" id="phone_no"  value=<?php echo $phone_no; ?>> <span  id="phone_error" ><?php echo $error_phone_no; ?></span>

          </td>
          </tr>

          <tr>
          <td style="text-align: left;">City: </td>
          <td  >
              <select name="city"   id="city" >


            </select> <span id="city_error"><?php echo $error_city; ?></span> </td>
          </td>
        </tr>


				<tr>
				<td style="text-align: left;">State: </td>
				<td >
						<select name="state" id="state" >
						<option disabled selected> Select States</option>

					</select> <span  id="state_error"><?php echo $error_state; ?></span>

			</tr>

			<tr>
			<td style="text-align: left;">Address: </td>
			<td style="text-align: left;">
			<input type="text" name="address"  id="address_label"  value=<?php echo $address; ?>> <span  id="address_error"><?php echo $error_address; ?></span>

			</td>
			</tr>


				</table>
				<br>

				 <button type="submit" class="btn btn-outline-success btn-lg btn-block" name="register">Register</button>
			</form>
		</fieldset>
		<br>
		Want to make a carrier in our company?
		 <a href="Employment.php" class="btn btn-outline-info">  Career </a>
	</body>
</html>
