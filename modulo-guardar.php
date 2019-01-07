<?php
  $codmod = $_POST["codmod"];
  $nommod = $_POST["nommod"];
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
  modificar($codmod,$nommod,$conexion);

  function modificar($codmod,$nommod,$conexion){
    $query= "UPDATE T_modulo SET nommod='$nommod' WHERE codmod='$codmod'";
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
