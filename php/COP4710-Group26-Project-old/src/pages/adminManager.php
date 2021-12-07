<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Manager</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
        <style>
            embed{height: 75px; width: 100%; pointer-events: none}
            a{padding-top: 30px}
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Admin Manager</h1>
        </div>
        <div class="main" >
            <a href="createAdmin.php">
                <embed src="../components/button.php"/>
            </a>
            <a href="deleteAdmin.php">
                <embed src="../components/button.php"/>
            </a>
        </div>
    </body>
</html>
