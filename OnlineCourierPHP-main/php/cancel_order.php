<?php
	require  "../models/db_connect.php";
  function cancel_order($id)
	{
		$query ="UPDATE orders SET cancelled=1 WHERE id=$id;";
		echo $query;
		execute($query);
		//return $result;
	}
$cid = $_GET["id"];
          $month = cancel_order($cid);
					header("Location: ../../html/history_courier.php");
 ?>
