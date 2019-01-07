<?php
  $codcon = $_POST["codcon"];
  $descon = $_POST["descon"];
  $monto = $_POST["monto"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  include('bd/conexion.php');
  modificar($codcon,$descon,$monto,$conn);

  function modificar($codcon,$descon,$monto,$conn){
    $query= "UPDATE T_concepto SET descon='$descon', monto='$monto' WHERE codcon='$codcon'";
    $resultado = sqlsrv_query($conn,$query);
    verificar_resultado($resultado);
    cerrar($conn);
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
