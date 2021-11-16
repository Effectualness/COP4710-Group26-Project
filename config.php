<?php
/* Attempt to connect to MySQL database */
$link = mysqli_connect(getenv('DB_SERVER'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'), getenv('DB_NAME'));
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>