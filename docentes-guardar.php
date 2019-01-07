<?php
  $coddoc = $_POST["coddoc"];
  $tipodoc = $_POST["tipodoc"];
  $nrodoc = $_POST["nrodoc"];
  $nomdoc = $_POST["nomdoc"];
  $appdoc = $_POST["appdoc"];
  $apmdoc = $_POST["apmdoc"];
  $teldoc = $_POST["teldoc"];
  $direcdoc = $_POST["direcdoc"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  $serverName = ""; // Enter Your MS SQL Host Name OR IP
  $connectionOptions = array(
    "Database" => "cecin", // Database Name
    "Uid" => "sa", // Database Username
    "PWD" => "y3553n14" // Database Password
  );

  //Establishes the connection
  $conexion = sqlsrv_connect($serverName, $connectionOptions);
  modificar($coddoc,$tipodoc,$nrodoc,$nomdoc,$appdoc,$apmdoc,$teldoc,$direcdoc,$conexion);

  function modificar($coddoc,$tipodoc,$nrodoc,$nomdoc,$appdoc,$apmdoc,$teldoc,$direcdoc,$conexion){
    $query= "UPDATE T_alumno SET tipodoc='$tipodoc', nrodoc='$nrodoc', nomalu='$nomdoc',appalu='$appdoc', apmalu='$apmdoc', telalu='$teldoc', correo='$direcdoc'  WHERE codalu='$coddoc'";
    $resultado = sqlsrv_query($conexion,$query);
    verificar_resultado($resultado);
    cerrar($conexion);
  }

  function verificar_resultado($resultado){
    if (!$resultado) $informacion["respuesta"] = "ERROR";
    else $informacion["respuesta"]= "BIEN";
    echo json_encode($informacion);
  }

  function cerrar($conexion){
    sqlsrv_close($conexion);
  }
?>
