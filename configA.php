<?php
error_reporting( E_ALL );
ini_set('error_reporting', E_ALL);


$serverName = ""; // Enter Your MS SQL Host Name OR IP
$connectionOptions = array(
  "Database" => "cecin", // Database Name
  "Uid" => "sa", // Database Username
  "PWD" => "y3553n14" // Database Password
);

//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Helping Function

function FormatErrors( $errors )
{
  /* Display errors. */
  echo "Error information: ";
  foreach ( $errors as $error )
  {
    echo "SQLSTATE: ".$error['SQLSTATE']."";
    echo "Code: ".$error['code']."";
    echo "Message: ".$error['message']."";
  }
}
 ?>
