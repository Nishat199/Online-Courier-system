<?php include "../php/redirect_login.php" ;?>
<?php include "../php/customer_access.php" ;?>
<?php include "../php/new_courier.php" ;?>


<html>
   <head>
      <title>Add Courier</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/registration.css">
  <script type="text/javascript" src="js/validate_new_courier.js"></script>
  <script type="text/javascript" src="js/city.js">	</script>
  <script type="text/javascript" src="js/state.js">	</script>
  <script type="text/javascript">
      window.onload =  function(){
           cities();
  				   states();
             cities2();
              states2();
      };
  </script>
   </head>
   <body >

     <?php include "navbar.php" ;?>
		  <h1 align="center">Request Courier Service</h1>
      <fieldset id="register_form" align= "center">
         <br>

         <form action="" method="post"   onsubmit="return validateform()" name="registerform" >
            <table>


														 <tr>
																<td style="text-align: left;"> <h3>Courier Details</h3> <br> </td>
														 </tr>
														 <tr>
               <tr>
                  <td style="text-align: left;"> Contains: </td>
                  <td style="text-align: left;"><input type="text" name="contains" id="contains" value=<?php echo $contains; ?>>
                    <span id="contains_error"><?php echo $error_contains; ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;"> Weight: </td>
                  <td style="text-align: left;"><input type="text" name="weight" id="weight" value=<?php echo $weight; ?>>
                    <span id="weight_error" ><?php echo $error_weight; ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;"> Width: </td>
                  <td style="text-align: left;"><input type="text" name="width" id="width" value=<?php echo $width; ?>>
                    <span id="width_error" ><?php echo $error_width; ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;"> Height: </td>
                  <td style="text-align: left;"><input type="text" name="height" id="height"  value=<?php echo $height; ?>>
                    <span id="height_error" ><?php echo $error_height; ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;">Description: </td>
                  <td style="text-align: left;">
                     <input type="text" name="product_desc" id="product_desc"   value=<?php echo $product_desc; ?>>
                     <span id="product_desc_error"><?php echo $error_product_desc; ?></span>
                  </td>
               </tr>



							 <tr>
									<td style="text-align: left;"><br> <h3>Sender</h3> <br> </td>
							 </tr>
							 <tr>




               <tr>
                  <td style="text-align: left;"> Full Name: </td>
                  <td style="text-align: left;"><input type="text" name="fullname" id="fullname" value=<?php echo $fullname; ?>>
                    <span id="name_error" ><?php echo $error_fullname; ?></span></td>
               </tr>
               <tr>
                  <td  style="text-align: left;" >Gender:</td>
                  <td><input type="radio" name="gender" id="gender" value="1">Male
                     <input type="radio" name="gender" value="0">Female
                     <span id="gender_error"><?php echo $error_gender; ?></span>
                  </td>
               </tr>
               <tr>
                  <td style="text-align: left;">Email:</td>
                  <td style="text-align: left;"><input type="text" name="email" id="email" value=<?php echo $email; ?> >
                    <span id="email_error"><?php echo $error_email;
                    ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;">Contact No:</td>
                  <td style="text-align: left;">
                     <input type="text" name="phone_no"  id="phone_no"  value=<?php echo $phone_no; ?>>
                      <span id="phone_error"><?php echo $error_phone_no; ?></span>
                  </td>
               </tr>
               <tr>
               <td style="text-align: left;">City: </td>
               <td  >
                   <select name="city"   id="city" onchange="calcuate_cost()" >
                 </select> <span id="city_error"><?php echo $error_city; ?></span> </td>
               </td>
             </tr>
     				<tr>
     				<td style="text-align: left;">State: </td>
     				<td >
     						<select name="state" id="state" >
     					</select> <span  id="state_error"><?php echo $error_state; ?></span>
     			</tr>
          <tr>
          <td style="text-align: left;">Address: </td>
          <td style="text-align: left;">
          <input type="text" name="address"  id="address_label"  value=<?php echo $address; ?>> <span  id="address_error"><?php echo $error_address; ?></span>

          </td>
          </tr>
							 							 <tr>
							 									<td style="text-align: left;"> <br> <h3>Receiver</h3> <br> </td>
							 							 </tr>
							 							 <tr>
               <tr>

                  <td style="text-align: left;"> Full Name: </td>
                  <td style="text-align: left;"><input type="text" id="fullname2" name="fullname2" value=<?php echo $fullname2; ?>>
                    <span id="name_error2" ><?php echo $error_fullname2; ?></span></td>
               </tr>
               <tr>
                  <td  style="text-align: left;" >Gender:</td>
                  <td><input type="radio" name="gender2" id="gender2" value="1">Male
                     <input type="radio" name="gender2"  value="0">Female
                     <span id="gender_error2"><?php echo $error_gender2; ?></span>
                  </td>
               </tr>
               <tr>
                  <td style="text-align: left;">Email:</td>
                  <td style="text-align: left;"><input type="text" id="email2" name="email2" value=<?php echo $email2; ?> >
                    <span id="email_error2"><?php echo $error_email2; ?></span></td>
               </tr>
               <tr>
                  <td style="text-align: left;">Contact No:</td>
                  <td style="text-align: left;">
                     <input type="text" name="phone_no2" id="phone_no2"   value=<?php echo $phone_no2; ?>>
                      <span id="phone_error2"><?php echo $error_phone_no2; ?></span>
                  </td>
               </tr>


               <tr>
               <td style="text-align: left;">City: </td>
               <td  >
                   <select name="city2"   id="city2" onchange="calcuate_cost()" >


                 </select> <span id="city_error2"><?php echo $error_city2; ?></span> </td>
               </td>
             </tr>


             <tr>
             <td style="text-align: left;">State: </td>
             <td >
                 <select name="state2" id="state2" >


               </select> <span  id="state_error2"><?php echo $error_state2; ?></span>

           </tr>


          <tr>
          <td style="text-align: left;">Address: </td>
          <td style="text-align: left;">
          <input type="text" name="address2"  id="address_label2"  value=<?php echo $address2; ?>> <span  id="address_error2"><?php echo $error_address; ?></span>

          </td>
          </tr>
							 <tr>
									<td style="text-align: left;"> <br> <h3>Billing</h3> </td>
							 </tr>
							 <tr>
									<td  style="text-align: left;" >Payment Method:</td>
									<td id="billing_method"><input type="radio" name="billing_method"  value="COD">Cash on delivery
										 <input type="radio" name="billing_method" value="Card">Card
										 <span id="billing_method_error"><?php echo $error_billing_method; ?></span>
									</td>
							 </tr>


            </table>
						<br>
            <input type="hidden" name="payable" id="payable" value="">
            <p id="bill" name="bill" class=" btn-success btn-lg btn-block">Add Location to calcualte cost</p>  <br>
            <br>

	 <span id="payable_error"></span>
            <button type="button" class="btn btn-outline-success btn-lg btn-block" name="courier" id="cost_calcualte" onclick="calcuate_cost()" >Calcualte Cost</button> <br>
						  <button type="submit" class="btn btn-outline-success btn-lg btn-block" name="courier" >Submit Order</button> <br>
							 <a href="history_courier.php" class="btn btn-outline-info btn-lg btn-block">Courier History</a>
         </form>
      </fieldset>
      <br>
   </body>
</html>
