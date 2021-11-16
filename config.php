<?php
/* Attempt to connect to MySQL database */
$link = mysqli_connect($_SERVER["DB_SERVER"], $_SERVER["DB_USERNAME"], $_SERVER["DB_PASSWORD"], $_SERVER["DB_NAME"]);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>