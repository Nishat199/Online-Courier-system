<?php
	require  "../models/db_connect.php";
  function getCity($city_id)
	{
		$query ="SELECT latitude,longitude from cities where id=$city_id;";
		//echo $query;
		$result= get($query);
		return $result;
	}

$cid = $_GET["cid"];

          $month = getCity($cid);
                          // var_dump($month);

													 echo json_encode($month[0]);

 ?>
