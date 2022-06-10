<?php include_once "../php/admin_registration.php" ;?>
<?php
if(isset($_POST["Manager"]))
	{
		header("Location: ../html/manager_registration.php");
	}
	if(isset($_POST["Employee"]))
	{
		header("Location: ../html/Employee_registration.php");
	}
	if(isset($_POST["DeliveryBoy"]))
	{
		header("Location: ../html/deliveryboy_registration.php");
	}
	
	if(isset($_POST["HomePage"]))
	{
		header("Location: ../html/Home Page.php");
	}
	if(isset($_POST["Login"]))
	{
		header("Location: ../html/login.php");
	}
	
	
	?>
<html>
	<head>
		<title>Home Page</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1><b>G6 TRACE -ABLE COURIER SERVICE <b></h1>
	  <h2>Commited Delivery on time</h2>
	  

			<form action="" method="post"  >
				<table>
          <tr>
         

        </tr>
		
          
			
          
		   <td></td><td></td>    <td colspan="10" align="right">
			
          <input type="submit" name="HomePage" value="Home">
          </td>
		  
		  
				</table>
			</form>
		</fieldset>
		<h1>Appliable positions: </h1>
		<form action="" method="post"  >
		<table>
		<br><br><br>
	
		<tr>
		<td><input type="submit" name="Manager" value="Manager ">
		<td></td><pre>
		<td><input type="submit" name="Employee" value="Employee ">
		
		
		<td></td><pre>
		<td><input type="submit" name="DeliveryBoy" value="Delivery Boy">
		
		
		<td colspan="2" align="right">Already work here?</a></td>
		<td><input type="submit" name="Login" value="Login"></td> 
		
		</tr>
	</body>
		
	</body>
</html>
