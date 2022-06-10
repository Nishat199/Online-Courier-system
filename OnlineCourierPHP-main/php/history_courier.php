
<?php
require_once '../models/db_connect.php';

function getAllOrders($id_ind){
  $query = "SELECT orders.id,orders.fullname2,orders.bill,orders.delivered , orders.verified,orders.cancelled , cities.name  FROM webtech.orders  inner join cities on orders.city2=cities.id where orders.order_by=$id_ind";
  return get($query);
}

 ?>
