
<?php include "../php/admin_registration.php" ;?>


<?php
if(isset($_POST["ShippingInfo"]))
	{
		header("Location: ../html/shippingdetails.php");
	}
	if(isset($_POST["Customer"]))
	{
		header("Location: ../html/CustomerVerify.php");
	}
	if(isset($_POST["deliveryman"]))
	{
		header("Location: ../html/DeliveryManVerify.php");
	}
	

	?>

<html>
	<head>
		<title>Employee Panel</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Employee Panel</h1>

			<form action="" method="post"  >
				<table>
          <tr>


        </tr>

          <tr>
        <td></td><td></td>    <td colspan="20" align="right">

          <input type="submit" name="ShippingInfo" value="ShippingInfo">
          </td>


		   <td></td><td></td>    <td colspan="20" align="right">

          <input type="submit" name="Customer" value="Verify Customer">
          </td>
		    <td></td><td></td>    <td colspan="20" align="right">
			  <input type="submit" name="deliveryman" value=" Verify Delivery Man">
			 



          </tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
