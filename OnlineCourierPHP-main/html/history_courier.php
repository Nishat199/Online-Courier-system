<?php include_once "../php/redirect_login.php" ;?>

<?php include_once "../php/customer_access.php" ;?>
<?php include_once "../php/history_courier.php" ;

$id_ind= $_COOKIE["logged_id"];
$orders = getAllOrders($id_ind);

?>

<html>
   <head>

     		<?php include "navbar.php" ;?>
      <title>Courier History</title>
      <link rel="stylesheet" href="../css/registration.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>

   <body class="text-white">
      <h1 align="center">Courier History</h1>
      <br>


      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Receiver</th>
      <th scope="col">Destination</th>

      <th scope="col">Bill</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

    foreach ($orders as $key) {
          echo '<tr  scope="row"  id="'.$key["id"].'">';
              echo '<td  scope="row"> '.$key["id"].'</td>';
              echo '<td  scope="row"> '.$key["fullname2"].'</td>';
              echo '<td  scope="row"> '.$key["name"].'</td>';
                echo '<td  scope="row"> '.$key["bill"].'</td>';
                if ($key["delivered"]==1)
                echo '<td scope="row"> Delivered</td>';
                elseif ($key["cancelled"]==1) {
                  echo '<td scope="row"> Cancelled </td>';
                }
                elseif ($key["verified"]==0) {
                  echo '<td scope="row"> To be verified </td>';
                }

                elseif ($key["verified"]==1) {
                  echo '<td scope="row"> Pending </td>';
                }

                if ($key["cancelled"]==0 && $key["verified"]==0){
             echo '<td scope="row"><a href="../php/cancel_order.php/?id='.$key["id"] . '" class="btn btn-danger" >Cancel Order</a> </td>';}
             else {
                  echo '<td scope="row"> No action available </td>';
             }

          echo '</tr>';
    }

     ?>

  </tbody>
</table>
	 <a  href="new_courier.php"  class="btn btn-outline-info btn-lg btn-block">Add Courier</a>



   </body>
</html>
