<?php

	require  "../models/db_connect.php";

  function getCity()
	{
		$query ="SELECT id,name from states where country_id=19;";
		$result= getArray($query);
		return $result;

	}

                             $state = getCity();
                            // var_dump($month);
                            echo "<option disabled selected> Select State</option>";

                             foreach ($state as $val) {
                              // echo "<option>  .$key["name"] </option>";
                            //  var_dump($val);
                            //  echo $val["id"];
                                echo "<option value=" .$val["id"] ." >"  .$val["name"] . "</option>";
                                // code...
                              }

   ?>
