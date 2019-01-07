<?php
  session_start();
    $serverName = "";
    $connectionInfo = array("Database"=>"cecin","UID"=>"sa", "PWD"=>"y3553n14");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false){
        echo "Error in connection.\n";
        die( print_r( sqlsrv_errors(), true));
    }
    $username = $_REQUEST['nomusu'];
    $password  = $_REQUEST['passusu'];
    $tsql = "SELECT * FROM T_usuario WHERE nomusu='$username' AND passusu='$password'";
    $result = sqlsrv_query( $conn, $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if(sqlsrv_fetch($result)){
        $_SESSION['valid_user'] = true;
        $_SESSION['nomusu'] = $username;
        echo '<script language="javascript">window.location="menu.php "</script>;';
        die();
    }else{
        header("Location: error.php");
    }
 ?>
