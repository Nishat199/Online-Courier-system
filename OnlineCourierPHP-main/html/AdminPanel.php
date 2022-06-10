
<?php include "../php/admin_registration.php" ;?>


<?php
if(isset($_POST["manager"]))
	{
		header("Location: ../html/ManagerVerify.php");
	}
	if(isset($_POST["Employee"]))
	{
		header("Location: ../html/EmployeeVerify.php");
	}
	if(isset($_POST["deliveryman"]))
	{
		header("Location: ../html/DeliveryManVerify.php");
	}
	if(isset($_POST["deliverydetails"]))
	{
		header("Location: ../html/Admin_DeliveryDetails.php");
	}
	if(isset($_POST["customer"]))
	{
		header("Location: ../html/CustomerVerify.php");
	}

	?>

<html>
	<head>
		<title>Admin Panel</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Admin Panel</h1>

			<form action="" method="post"  >
				<table>
          <tr>


        </tr>

          <tr>
        <td></td><td></td>    <td colspan="10" align="right">

          <input type="submit" name="manager" value="Manager">
          </td>


		   <td></td><td></td>    <td colspan="10" align="right">

          <input type="submit" name="Employee" value="Employee">
          </td>
		    <td></td><td></td>    <td colspan="10" align="right">
			  <input type="submit" name="deliveryman" value="Delivery Man">
			    <td></td><td></td>    <td colspan="10" align="right">
			  <input type="submit" name="deliverydetails" value="Delivery Details">
			    <td></td><td></td>    <td colspan="10" align="right">
			  <input type="submit" name="customer" value="Customers">



          </tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
