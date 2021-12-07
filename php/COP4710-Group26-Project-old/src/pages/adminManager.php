<?php
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
<div className="creationDeletionPage">
  <h3>Create/Delete Admin Accounts</h3>
      <input style = "height:30px;width:300px;font-size:12pt"; type="text" id="username" placeholder="username"/><br/>
      <input style = "height:30px;width:300px;font-size:12pt"; type="text" id="password" placeholder="password"/><br/>
      <button type="button" onClick={createAdmin}>Create</button>
      <button type="button" onClick={deleteAdmin}>Delete</button><br/><br/>
      </div>
  	<h3>Change current account password</h3>
  	<p>Current username: </p>
  	<input style = "height:30px;width:300px;font-size:12pt"; type="text" id="newPassword" placeholder="new password"/><br/>
  	<button type="button" onClick={doChangePassword}>Change Password</button>
    <br/><br/>
	<button style = "height:40px;width:300px;font-size:12pt"; type="button" onClick={adminHome}>Return to Dashboard</button>
  </div>
</body>
</html>
<!--
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
</html>-->
