<?php
  $serverName = ""; // Enter Your MS SQL Host Name OR IP
  $connectionOptions = array(
    "Database" => "cecin", // Database Name
    "Uid" => "sa", // Database Username
    "PWD" => "y3553n14" // Database Password
  );

  //Establishes the connection
  $conexion = sqlsrv_connect($serverName, $connectionOptions);

  $codalu = $_POST["codalu"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  eliminar($codalu,$conexion);

  function eliminar($codalu,$conexion){
    $query = "DELETE FROM T_alumno WHERE codalu = '$codalu'";
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
