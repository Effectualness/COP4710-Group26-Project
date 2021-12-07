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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div className="schedulePage">
            <h1>Schedule Email</h1>
            <div class="wrapper">
                <input style = "height:20px;width:300px;font-size:12pt; type="text" id="emailEntry2" placeholder="email@domain.com"/>
                
                <input style = "height:20px;width:300px;font-size:12pt; type="text" id="emailEntry1" placeholder="Subject"/>
                <input style="height:200px;width:300px;font-size:12pt rows="2" cols="30" placeholder="Body"></textarea>
                <input type="date" id="scheduleDate">
				<button style = "height:40px;width:300px;font-size:12pt; id="emailButton2" type="button" onClick={scheduleInviteEmail}>Send Reminder</button>
            </div>
            
            <h3>Request Book Information</h3>
            <div class="wrapper"> 
            <input style = "height:20px;width:300px;font-size:12pt; type="text" id="emailEntry2" placeholder="email@domain.com"/>
            
                <button style = "height:40px;width:300px;font-size:12pt; id="emailButton" type="button" onClick={sendEmail} >Send Request</button><br />
            </div>
            
            <button type="button" onClick={doGoBack}>Return to Dashboard</button><br />
        </div>
</body>
</html>
