
<?php include "../php/admin_registration.php" ;?>


<?php
if(isset($_POST["ShippingInfo"]))
	{
		header("Location: ../html/shippingdetails.php");
	}
	if(isset($_POST["VerifyCourierOrder"]))
	{
		header("Location: ../html/verify_courier_order1.php");
	}
	if(isset($_POST["AllCourier"]))
	{
		header("Location: ../html/all_courier.php");
	}
	if(isset($_POST["activecourier"]))
	{
		header("Location: ../html/history_courier.php");
	}


	?>

<html>
	<head>
		<title>Delivery Boy Panel</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

				<?php include "navbar.php" ;?>

		<fieldset id="register_form" align= "center">
      <h1>Delivery Boy Panel</h1>

			<form action="" method="post"  >
				<table>
          <tr>


        </tr>

          <tr>
        <td></td><td></td>    <td colspan="20" align="right">

          <input type="submit" name="ShippingInfo" value="Delivery Details">
          </td>


		   <td></td><td></td>
		    <td></td><td></td>    <td colspan="20" align="right">
			  <input type="submit" name="AllCourier" value=" All Courier Order">
			   <td></td><td></td>



          </tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
