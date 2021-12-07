<?php
header("Access-Control-Allow-Headers: Content-type");
header("Access-Control-Allow-Origin: *");

$input = json_decode(file_get_contents('TODO'), true);

$recipient = $input["recipients"];
$subject = $input["subject"];
$body = $input["body"];

$headers = "From: group26bookorders@gmail.com". "\r\n". "Reply-To: group26bookorders@gmail.com". "\r\n". "X-Mailer: PHP/" . phpversion() . "\r\n"
		   
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";

if (mail($to, $subject, $message, $headers)) 
{
    echo("Email was sent successfully.");
} 
else 
{
    die("Error: Email was not sent successfully");
}
?>
