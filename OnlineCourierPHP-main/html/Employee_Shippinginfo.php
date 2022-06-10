<?php include_once "../php/employee_registration.php" ;?>

<head>
<title>Shipping Info</title>
<link rel="stylesheet" href="../css/registration.css"></head>
<body>

<fieldset id="register_form" align= "center">
<h1>Shipping Info</h1>

<form action="" method="post">
<table>

<tr>
<td>
<h2>Shipping list</h2>
<tr>
<td>

<table border ="1" style="width:400px">
   <tr>
  <th>Product Id</th>
  <th>Customer Name</th>
  <th>Contains</th>
	<th>Description</th>
	<th>Shipping Status</th>
	<th>Shipping Cost</th>
	<th>Addess</th>
  <th>Shipping Schedule</th>  
  <th>Shipping Cancellation</th>  
  </tr>
  
  <tr>
  <td>1_a</td>
  <td>Maria Anders</td>
  <td>PS5</td>
	<td>Latest gen gaming console by Sony, height:390mm ,width:260mm ,weight:4.5 kg</td>
	<td>Arrived</td>
	<td>100 tk</td>
  <td>CourierServiceWarehouse</td>
  <td>3-5days</td>
  <td colspan="1.5" align="middle">
  <input type="submit" name="Cancel" value="Cancel">
  </td>
	</tr>
  
  <tr>
  <td>1_b</td>
  <td>Francisco Chang</td>
  <td>XBOX SERIES X</td>
	<td>Latest gen gaming console by Microsoft, height:390mm ,width:260mm ,weight:4.5 kg</td>
	<td>Arrived</td>
  <td>180tk</td>
  <td>CourierServiceWarehouse</td>
  <td>3-5days</td>
  <td colspan="1.5" align="middle">
  <input type="submit" name="Cancel" value="Cancel">
  </td>
  </tr>

  <tr>
  <td>1_c</td>
  <td>Roland Mendel</td>
  <td>Nintendo Switch</td>
	<td>Popular console by Nintendo ,Approximately 4 inches high, 9.4 inches long</td>
	<td>Arrived</td>
	<td>120 tk</td>
  <td>CourierServiceWarehouse</td>
  <td>3-5days</td>
  <td colspan="1.5" align="middle">
  <input type="submit" name="Cancel" value="Cancel">
  </td>
  </tr>
  </table>
</td>
</tr>

<tr></tr><tr><tr></tr>

</tr>

      </form>
		</fieldset>
	</body>
</html>
