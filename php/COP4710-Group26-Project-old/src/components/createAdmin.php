
<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

include "database.php";

$inputData = json_decode(file_get_contents('php://input'), true);

$username = $inputData["username"];
$password = $inputData["password"];

$connection = mysqli_connect($host, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection terminated." . $conn->connect_error);
}

$checkSql = "SELECT * FROM employee WHERE username=" . $username . " AND password=" . $password . ";";
$insertSql = "INSERT INTO Employee (username, password, isAdmin) VALUES ('$username', '$password', 1)";

$checkResult = mysqli_query($conn, $checkSql);

if ($checkResult->num_rows > 0) {
    echo('{"status":"AlreadyExists"}');
} else if (mysqli_query($conn, $insertSql)) {
    echo('{"status":"success"}');
}

$connection->close();
