<?php

	include('bd/conexion.php');

	// Helping Function

  		$tsql = "SELECT  tipdoc, serdoc, d.nrodoc, d.codcon, d.codalu, mondoc, estdoc, descon,convert(varchar(10), fechadoc, 103) as fechad ,CONCAT(nomalu,' ',appalu,' ',apmalu) as alumn
FROM     T_docingresos d INNER JOIN T_alumno a ON d.codalu = a.codalu INNER JOIN T_concepto c ON d.codcon = c.codcon";

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
