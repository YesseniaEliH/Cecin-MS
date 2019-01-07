<?php

	$serverName = ""; // Enter Your MS SQL Host Name OR IP
	$connectionOptions = array(
    "Database" => "cecin", // Database Name
    "Uid" => "sa", // Database Username
    "PWD" => "y3553n14" // Database Password
	);

	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);

	// Helping Function

  		$tsql = "SELECT * FROM T_matricula";

  		$getResults= sqlsrv_query($conn, $tsql);

  		if (!$getResults){
  			die("error_reporting");
      }else {
        while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
          $arreglo["data"][]= array_map("utf8_encode",$row);
         }
        echo (json_encode($arreglo));
      }

  sqlsrv_free_stmt($getResults);

  ?>
