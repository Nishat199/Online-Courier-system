<html>
	<head>
		<title>Employee</title>
  <link rel="stylesheet" href="../css_files/registration.css"></head>
	<body>

		<fieldset id="register_form" >
      <h1>Employee</h1>

			<form action="" method="post"  >
				<table>
				 <tr>
					<td><h2><p align="left"><b>Verify/ADD/DELETE/UPDATE : </b></p></h2></td>
					<td>
						
					</td>
          <tr>
          <td style="text-align: left;"> Full Name: </td>
          <td style="text-align: left;"><input type="text" name="fullname" value=<?php echo $fullname; ?>><span><?php echo $error_fullname; ?></span></td>
          </tr>
          

          <td  style="text-align: left;" >Gender:</td>

          <td><input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <span><?php echo $error_gender; ?></span>
          </td>
          </tr>

          <tr>
          <td style="text-align: left;">Email:</td>
          <td style="text-align: left;"><input type="text" name="email" value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Contact No:</td>
          <td style="text-align: left;">
          <input type="text" name="phone_no"   value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span>

          </td>
          </tr>

         

        <tr>
          <td colspan="2" align="center">
          <input type="submit" name="submit" value="submit">
          </td>
          </tr>
		 <tr>
		  </tr>
		  <tr>
          <td  align="center">
          <input type="submit" name="register" value="Verify">
          </td> 
		  <td colspan="2" align="center">
          <input type="submit" name="register" value="Add">
          </td>
		  <td  align="center">
          <input type="submit" name="register" value="Delete">
          </td>
		  <td colspan="2" align="center">
          <input type="submit" name="register" value="Update">
          </td>
		  
		  
          </tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>