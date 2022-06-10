<?php include_once "../php/admin_registration.php" ;?>

	<head>
		<title>Delivery Details</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>

		<fieldset id="register_form" align= "center">
      <h1>Delivery Details</h1>

	  
<form action="" method="post"  >
<table>

<tr>
<td style="text-align: left;"> Total revenue: </td>
 <td style="text-align: left;"><input type="text" name="Totalrevenue"></td>
 </tr>
 <tr>
 <td style="text-align: left;"> Total Cost: </td>
 <td style="text-align: left;"><input type="text" name="TotalCost"></td>
</tr>


<tr>
<td>
<h2>Delivery list</h2>
<tr>
<td>

<table border ="1" style="width:400px">
  <tr>
    <th>Product_id</th>
    <th>Customer_name</th>
    <th>Contains</th>
	<th>Description</th>
	<th>Delivery Status</th>
	<th>income</th>
	
  </tr>
  <tr>
    <td>1_a</td>
    <td>Maria Anders</td>
    <td>PS5</td>
	<td>Latest gen gaming console by Sony, height:390mm ,width:260mm ,weight:4.5 kg</td>
	<td>Delivered</td>
	<td>1000 tk</td>
	
  </tr>
  <tr>
    <td>1_b</td>
    <td>Francisco Chang</td>
    <td>XBOX SERIES X</td>
	<td>Latest gen gaming console by Microsoft, height:390mm ,width:260mm ,weight:4.5 kg</td>
	<td>Pending</td>
	<td> </td>
  </tr>
  <tr>
    <td>1_c</td>
    <td>Roland Mendel</td>
    <td>Nintendo Switch</td>
	<td>Popular console by Nintendo ,Approximately 4 inches high, 9.4 inches long</td>
	<td>Delivered</td>
	<td>1000 tk</td>
  </tr>
  

</table>
</td>
</tr>

<tr></tr><tr><tr></tr>


<td colspan="30" align="left">
			
          <input type="submit" name="register" value="Customer History & Feed back">
          </td>
</tr>




			 </form>
		</fieldset>
	</body>
</html>
