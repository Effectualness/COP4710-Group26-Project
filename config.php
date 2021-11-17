<?php
/* Attempt to connect to MySQL database */
//$link = mysqli_connect(getenv('DB_SERVER'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'), getenv('DB_NAME'));
echo "h4i";
echo getenv('DB_SERVER');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>