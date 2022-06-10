<?php include_once "../php/redirect_login.php" ;?>
<?php include_once "../php/deliveryboy_access.php" ;?>
<?php include "../php/cancel_courier_order.php" ;?>
<html>
	<head>
		<title>Cancel Courier</title>
  <link rel="stylesheet" href="../css/registration.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
	<?php include "navbar.php" ;?>
    <h1 align="center">Cancel Courier</h1><br>
		<h2 align="center" >ID-WSE235CCF#$4Q</h2><br>
		<body class="text-white">
       <fieldset id="register_form" align= "center">


          <form action="" method="post"  >
             <table>


 														 <tr>
 																<td style="text-align: left;"> <h3>Courier Details</h3> <br> </td>
 														 </tr>
 														 <tr>
                <tr>
                   <td style="text-align: left;"> Contains: </td>
                   <td style="text-align: left;"><input type="text" name="contains" readonly value=<?php echo $contains; ?>><span><?php echo $error_contains; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Weight: </td>
                   <td style="text-align: left;"><input type="text" name="weight" readonly value=<?php echo $weight; ?>><span><?php echo $error_weight; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Width: </td>
                   <td style="text-align: left;"><input type="text" name="width"  readonly value=<?php echo $width; ?>><span><?php echo $error_width; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;"> Height: </td>
                   <td style="text-align: left;"><input type="text" name="height" readonly value=<?php echo $height; ?>><span><?php echo $error_height; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Description: </td>
                   <td style="text-align: left;">
                      <input type="text" name="product_desc"  readonly   value=<?php echo $product_desc; ?>> <span><?php echo $error_product_desc; ?></span>
                   </td>
                </tr>



 							 <tr>
 									<td style="text-align: left;"><br> <h3>Sender</h3> <br> </td>
 							 </tr>
 							 <tr>




                <tr>
                   <td style="text-align: left;"> Full Name: </td>
                   <td style="text-align: left;"><input type="text" name="fullname"  readonly value=<?php echo $fullname; ?>><span><?php echo $error_fullname; ?></span></td>
                </tr>
                <tr>
                   <td  style="text-align: left;" >Gender:</td>
                   <td><input type="radio" name="gender" value="Male">Male
                      <input type="radio" name="gender" value="Female">Female
                      <span><?php echo $error_gender; ?></span>
                   </td>
                </tr>
                <tr>
                   <td style="text-align: left;">Email:</td>
                   <td style="text-align: left;"><input type="text" name="email" readonly  value=<?php echo $email; ?> ><span><?php echo $error_email; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Contact No:</td>
                   <td style="text-align: left;">
                      <input type="text" name="phone_no"    readonly  value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span>
                   </td>
                </tr>
 							 <tr>
 		           <td style="text-align: left;">City: </td>
 		           <td  >
 		               <select name="city"  name="wgtmsr" id="wgtmsr"  >
 		               <option disabled selected> Select City</option>

 		               <?php include "../php/city.php" ;?>
 		             </select> <span><?php echo $error_city; ?></span>
 		           </td>



 		         </tr>


 		 				<tr>
 		 				<td style="text-align: left;">Zip: </td>
 		 				<td >
 		 						<select name="zip" name="wgtmsr" id="wgtmsr" >
 		 						<option disabled selected> Select Zip</option>

 		 						<?php include "../php/zip.php" ;?>
 		 					</select> <span><?php echo $error_zip; ?></span>
 		 				</td>



 		 			</tr>
                <tr>
                   <td style="text-align: left;">Address </td>
                   <td style="text-align: left;">
                      <input type="text" name="address"   value=<?php echo $address; ?>> <span><?php echo $error_address; ?></span>
                   </td>
                </tr>



 							 							 <tr>
 							 									<td style="text-align: left;"> <br> <h3>Receiver</h3> <br> </td>
 							 							 </tr>
 							 							 <tr>


                <tr>


                   <td style="text-align: left;"> Full Name: </td>
                   <td style="text-align: left;"><input type="text" name="fullname2" readonly  value=<?php echo $fullname2; ?>><span><?php echo $error_fullname2; ?></span></td>
                </tr>
                <tr>
                   <td  style="text-align: left;" >Gender:</td>
                   <td><input  type="radio" name="gender2"  value="Male">Male
                      <input type="radio" name="gender2" value="Female">Female
                      <span><?php echo $error_gender2; ?></span>
                   </td>
                </tr>
                <tr>
                   <td style="text-align: left;">Email:</td>
                   <td style="text-align: left;"><input type="text"  name="email2"  readonly value=<?php echo $email2; ?> ><span><?php echo $error_email2; ?></span></td>
                </tr>
                <tr>
                   <td style="text-align: left;">Contact No:</td>
                   <td style="text-align: left;">
                      <input type="text" name="phone_no2"   readonly  value=<?php echo $phone_no2; ?>> <span><?php echo $error_phone_no2; ?></span>
                   </td>
                </tr>
 							 <tr>
 		           <td style="text-align: left;">City: </td>
 		           <td  >
 		               <select name="city2"  name="wgtmsr" id="wgtmsr"  >
 		               <option disabled selected> Select City</option>

 		               <?php include "../php/city.php" ;?>
 		             </select> <span><?php echo $error_city2; ?></span>
 		           </td>



 		         </tr>


 		 				<tr>
 		 				<td style="text-align: left;">Zip: </td>
 		 				<td >
 		 						<select name="zip2" name="wgtmsr" id="wgtmsr" >
 		 						<option disabled selected> Select Zip</option>

 		 						<?php include "../php/zip.php" ;?>
 		 					</select> <span><?php echo $error_zip2; ?></span>
 		 				</td>



 		 			</tr>
                <tr>
                   <td style="text-align: left;">Address </td>
                   <td style="text-align: left;">
                      <input type="text" name="address2"   value=<?php echo $address2; ?>> <span><?php echo $error_address2; ?></span>
                   </td>
                </tr>


 							 <tr>
 									<td style="text-align: left;"> <br> <h3>Billing</h3> </td>
 							 </tr>

 							 <tr>
 									<td  style="text-align: left;" >Payment Method:</td>
 									<td><input type="radio" name="billing_method" value="COD">Cash on delivery
 										 <input type="radio" name="billing_method" value="Card">Card
 										 <span><?php echo $error_billing_method; ?></span>
 									</td>
 							 </tr>


 						<br>

            <tr>
               <td style="text-align: left;"> <br> <h3>Cancel Order</h3> </td>
            </tr>


            <tr>
              	<td  style="text-align: left;" >Reason of cancellation:</td>

               <td  style="text-align: left;">
                  <input type="text"   name="cancel"   value=<?php echo $cancel; ?>> <span><?php echo $error_cancel; ?></span>
               </td>
            </tr>
                         </table>
                         <br>


                          <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="cancel_order">Cancel Order</button>

          </form>
       </fieldset>
       <br>


       <br>
       <br>








    </body>
 </html>
