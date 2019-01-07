<?php
  include('bd/conexion.php');
  $codalu = $_POST["codalu"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  eliminar($codalu,$conn);

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
