<?php
  include('bd/conexion.php');

  $codcon = $_POST["codcon"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  eliminar($codcon,$conn);

  function eliminar($codcon,$conn){
    $query = "DELETE FROM T_concepto WHERE codcon = '$codcon'";
    $resultado = sqlsrv_query($conn,$query);
    verificar_resultado($resultado);
    cerrar($conn);
  }

  function verificar_resultado($resultado){
    if (!$resultado) $informacion["respuesta"] = "ERROR";
    else $informacion["respuesta"]= "BIEN";
    echo json_encode($informacion);
  }

  function cerrar($conn){
    sqlsrv_close($conn);
  }
?>
