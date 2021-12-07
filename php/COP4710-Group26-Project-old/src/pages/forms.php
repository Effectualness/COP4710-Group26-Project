<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Your Forms</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
        <style>
            h2{padding: 20px;}
            embed{height: 75px; width: 100%; pointer-events: none}
        </style>
    </head>
    <body>
        <div class="header" style="justify-content: space-between">
            <div></div>
            <div style="display: flex; justify-content: center">
                <h1>Welcome, <?php echo $_SESSION["name"]?></h1>
            </div>
            <div>
                <a href="../components/logout.php" class="btn btn-danger ml-3" style="margin-left:50px;">Sign Out of Your Account</a>
            </div>
            
        </div>
        <div class="main">
            <h2><u>My Forms</u></h2>
            <a href="orders.php">
                <embed src="../components/formLink.php"/>
            </a>
        </div>
    </body>
</html>