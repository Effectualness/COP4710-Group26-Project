
<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

include "database.php";

// Include config file
require_once "../../config.php";

$username = $confirmUsername;
$password = $confirmPassword;

$checkSql = "SELECT * FROM employee WHERE username=" . $username . " AND password=" . $password . ";";
$insertSql = "INSERT INTO Employee (username, password, isAdmin) VALUES ('$username', '$password', 1)";

$checkResult = mysqli_query($conn, $checkSql);

if ($checkResult->num_rows > 0) {
    echo('{"status":"AlreadyExists"}');
} else if (mysqli_query($conn, $insertSql)) {
    echo('{"status":"success"}');
}

?>
