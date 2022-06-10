<?php require_once "../php/admin_registration.php" ;
      include 'customer_header.php';
      $customer = getAllcustomers();
	 
	  

?>
<html>
	<head>
		<title>Customer Verify</title>
  <link rel="stylesheet" href="../css/registration.css"></head>
	<body>
		<fieldset id="register_form" align= "center">
    
	  <h3 class="text">Customer Verification</h3>
	  <h1>Details of Customers</h1><br><br>
	  <div class="center">
	<table border ="0" style="width:1000px">
		<thead>
			<th>ID</th>
			<th>username</th>
			<th>Name </th>
			<th>Gender</th>
			<th>email</th>
			<th>city</th>
			<th>phone</th>
			
			
		</thead>
		<tbody>
		<br>
	  
			
					
						
			<?php
			foreach( $customer as $p)
			{   
				echo"<tr>";
					echo"<br>";
					echo "<td>".$p["id"]."</td>";
					echo "<td>".$p["username"]."</td>";
					echo "<td>".$p["fullname"]."</td>";
					echo "<td>".$p["gender"]."</td>";
					echo "<td>".$p["email"]."</td>";
				
					echo "<td>".$p["user_address"]."</td>";
					echo "<td>".$p["user_contact"]."</td>";
					
					
					echo'<td><a href="editcustomer.php" class="btn btn-success">Edit</a></td>';
					echo'<td><a class="btn btn-danger">Delete</td>';
					
				
				
				
					
				echo"</tr>";
			}
		?>
		</div>
						
						
				
	</body>
</html>