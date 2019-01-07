<?php
  $codalu = $_POST["codalu"];
  $tipodoc = $_POST["tipodoc"];
  $nrodoc = $_POST["nrodoc"];
  $nomalu = $_POST["nomalu"];
  $appalu = $_POST["appalu"];
  $apmalu = $_POST["apmalu"];
  $telalu = $_POST["telalu"];
  $correo = $_POST["correo"];
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
  modificar($codalu,$tipodoc,$nrodoc,$nomalu,$appalu,$apmalu,$telalu,$correo,$conexion);

  function modificar($codalu,$tipodoc,$nrodoc,$nomalu,$appalu,$apmalu,$telalu,$correo,$conexion){
    $query= "UPDATE T_alumno SET tipodoc='$tipodoc', nrodoc='$nrodoc', nomalu='$nomalu',appalu='$appalu', apmalu='$apmalu', telalu='$telalu', correo='$correo'  WHERE codalu='$codalu'";
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
