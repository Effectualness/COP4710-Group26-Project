<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
        <style>
            embed{height: 75px; width: 100%; pointer-events: none}
            a{padding-top: 30px}
        </style>
    </head>
    <body>
        <div class="header" style="justify-content: space-between">
            <div></div>
            <div>
                <h1>Admin Home</h1>
            </div>
            <div>
                <a href="../components/logout.php" class="btn btn-danger ml-3" style="margin-left:50px;">Sign Out of Your Account</a>
            </div>
        </div>
        <div class="main" >
            <a href="forms.php">
                <embed src="../components/button.php"/>
            </a>
            <a href="adminManager.php">
                <embed src="../components/button.php"/>
            </a>
            <a href="formManager.php">
                <embed src="../components/button.php"/>
            </a>
        </div>
    </body>
</html>