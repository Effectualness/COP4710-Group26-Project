<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Forgot Password</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
    </head>
    <body>
        <div class="header">
            <h1>Forgot Password?</h1>
        </div>
        <div class="main" style="align-items: center; justify-content: center;">
            <div class="roundedBox">
                <h2>Reset Password</h2>
                <p>Please enter you email address</p>
                <form action="./forms.php">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group" style="display:flex; justify-content: center; padding-top: 30px">
                        <input type="submit" class="btn btn-primary" value="Submit" style="width:100%">
                    </div>
                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                </form>
            </div>
        </div>
    </body>
</html>