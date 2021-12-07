<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

include "database.php";

$inputData = json_decode(file_get_contents('php://input'), true);

$recipient = $inputData["recipients"];
$subject = $inputData["subject"];
$body = $inputData["body"];
$scheduleDate = $inputData["scheduleDate"];

$insertSql = "INSERT INTO scheduler (email, scheduleDate, flag) VALUES ('$email', '$scheduleDate', '0')";

if (mysqli_query($conn, $insertSql)) 
{
    echo('{"status":"success"}');
} 
else 
{
    echo('{"status":"failure"}');
}

?>
