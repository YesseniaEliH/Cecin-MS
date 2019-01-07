<?php
$serverName = ""; // Enter Your MS SQL Host Name OR IP
$connectionOptions = array(
  "Database" => "cecin", // Database Name
  "Uid" => "sa", // Database Username
  "PWD" => "y3553n14" // Database Password
);

//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
 ?>
