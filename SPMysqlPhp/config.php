<?php

define('DB_SERVER', 'developeros.com.mx');
define('DB_USERNAME', 'develop7_ulsa_a');
define('DB_PASSWORD', 'r00tUls@');
define('DB_NAME', 'develop7_ulsa');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>