<?php
	include('bd/conexion.php');
	$tsql = "SELECT * FROM T_alumno";
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
