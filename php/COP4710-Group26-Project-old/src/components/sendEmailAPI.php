<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

$inputData = json_decode(file_get_contents('php://input'), true);

$recipient = $inputData["recipients"];
$subject = $inputData["subject"];
$body = $inputData["body"];

$headers = "From: group26cop4710bookorders@gmail.com". "\r\n" . "Reply-To: group26cop4710bookorders@gmail.com" . "\r\n";
		   
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo("Email was sent successfully.");
} else {
    die("Error: Email was not sent successfully");
}
?>
