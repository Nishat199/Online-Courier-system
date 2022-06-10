<?php include_once "../php/redirect_login.php" ;?>
<?php include_once "../php/deliveryboy_access.php" ;?>
<html>
	<head>
		<title>Verify Courier</title>
  <link rel="stylesheet" href="../css/registration.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
    <h1 align="center">Verify Courier</h1><br>
		<h2 align="center" >ID-WSE235CCF#$4Q</h2><br>
		<body class="text-white">
       <fieldset id="register_form" align= "center">
          <br>

          <form action="" method="post"  >
             <table>


 														 <tr>
 																<td style="text-align: left;"> <h3>Courier Details</h3> <br> </td>
 														 </tr>
 														 <tr>
                <tr>
                   <td style="text-align: left;"> Contains: </td>
                   <td style="text-align: left;"><input type="text" name="contains" </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Weight: </td>
                   <td style="text-align: left;"><input type="text" name="weight" </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Width: </td>
                   <td style="text-align: left;"><input type="text" name="width" </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Height: </td>
                   <td style="text-align: left;"><input type="text" name="height" </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Description: </td>
                   <td style="text-align: left;">
                      <input type="text" name="product_desc"  readonly   value=</span>
                   </td>
                </tr>



 							 <tr>
 									<td style="text-align: left;"><br> <h3>Sender</h3> <br> </td>
 							 </tr>
 							 <tr>




                <tr>
                   <td style="text-align: left;"> Full Name: </td>
                   <td style="text-align: left;"><input type="text" name="fullname"  </span></td>
                </tr>
                <tr>
                   <td  style="text-align: left;" >Gender:</td>
                   <td><input type="radio" name="gender" value="Male">Male
                      <input type="radio" name="gender" value="Female">Female
                      <span></span>
                   </td>
                </tr>
                <tr>
                   <td style="text-align: left;">Email:</td>
                   <td style="text-align: left;"><input type="text" name="email" </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Contact No:</td>
                   <td style="text-align: left;">
                      <input type="text" name="phone_no"    </span>
                   </td>
                </tr>
 							 <tr>
 		           <td style="text-align: left;">City: </td>
 		           <td  >
 		               <select name="city"  name="wgtmsr" id="wgtmsr"  >
 		               <option disabled selected> Select City</option>

 		               <?php include "../php/city.php" ;?>
 		             </select> <span></span>
 		           </td>



 		         </tr>


 		 				<tr>
 		 				<td style="text-align: left;">Zip: </td>
 		 				<td >
 		 						<select name="zip" name="wgtmsr" id="wgtmsr" >
 		 						<option disabled selected> Select Zip</option>

 		 						<?php include "../php/zip.php" ;?>
 		 					</select> <span></span>
 		 				</td>



 		 			</tr>
                <tr>
                   <td style="text-align: left;">Address </td>
                   <td style="text-align: left;">
                      <input type="text" name="address"   </span>
                   </td>
                </tr>



 							 							 <tr>
 							 									<td style="text-align: left;"> <br> <h3>Receiver</h3> <br> </td>
 							 							 </tr>
 							 							 <tr>


                <tr>


                   <td style="text-align: left;"> Full Name: </td>
                   <td style="text-align: left;"><input type="text" name="fullname2" </span></td>
                </tr>
                <tr>
                   <td  style="text-align: left;" >Gender:</td>
                   <td><input  type="radio" name="gender2"  value="Male">Male
                      <input type="radio" name="gender2" value="Female">Female
                      <span></span>
                   </td>
                </tr>
                <tr>
                   <td style="text-align: left;">Email:</td>
                   <td style="text-align: left;"><input type="text"  name="email2"  </span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Contact No:</td>
                   <td style="text-align: left;">
                      <input type="text" name="phone_no2"  > <span></span>
                   </td>
                </tr>
 							 <tr>
 		           <td style="text-align: left;">City: </td>
 		           <td  >
 		               <select name="city2"  name="wgtmsr" id="wgtmsr"  >
 		               <option disabled selected> Select City</option>

 		               <?php include "../php/city.php" ;?>
 		             </select> <span></span>
 		           </td>



 		         </tr>


 		 				<tr>
 		 				<td style="text-align: left;">Zip: </td>
 		 				<td >
 		 						<select name="zip2" name="wgtmsr" id="wgtmsr" >
 		 						<option disabled selected> Select Zip</option>

 		 						<?php include "../php/zip.php" ;?>
 		 					</select> <span></span>
 		 				</td>



 		 			</tr>
                <tr>
                   <td style="text-align: left;">Address </td>
                   <td style="text-align: left;">
                      <input type="text" name="address2"   </span>
                   </td>
                </tr>


 							 <tr>
 									<td style="text-align: left;"> <br> <h3>Billing</h3> </td>
 							 </tr>

 							 <tr>
 									<td  style="text-align: left;" >Payment Method:</td>
 									<td><input type="radio" name="billing_method" value="COD">Cash on delivery
 										 <input type="radio" name="billing_method" value="Card">Card
 										 <span></span>
 									</td>
 							 </tr>
             </table>

 						<br>


          </form>
       </fieldset>
       <br>

       <button type="button" class="btn btn-success active btn-lg btn-block" >Estimated income 120BDT</button>
       <br>
       <br>



           <button type="button" class="btn btn-outline-success btn-lg btn-block">Verify and Accept</button>  	<button type="button" class="btn btn-outline-warning btn-lg btn-block">Report</button>

    </body>
 </html>
