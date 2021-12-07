<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

include "database.php";

$inputData = json_decode(file_get_contents('php://input'), true);

$username = $inputData["username"];

$connection = mysqli_connect($host, $username, $password, $dbname);
if($connection->connect_error)
{
  die("Connection terminated." . $conn->connect_error);
}

$deleteSql = "DELETE FROM employee WHERE username=" . $username . ";";

# Not verifying deletion, there isn't a case where that would be
# feature-breakingfor the user.

# Does this need the super admin's password to perform action?

$connection->close();
