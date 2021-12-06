<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
    </head>
    <body>
        <div class="header">
            <h1>Bookstore Login</h1>
        </div>
        <div class="main" style="align-items: center; justify-content: center;">
            <div class="roundedBox">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="/virtual-directory/servlet/loginServlet" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div style="display:flex; justify-content: flex-end;">
                        <p><a href="forgotPassword.jsp">Forgot Password?</a></p>
                    </div>
                    <div class="form-group" style="display:flex; justify-content: center; padding-top: 30px">
                        <input type="submit" class="btn btn-primary" value="Login" style="width:100%">
                    </div>
                    <br>${message}
                    <p>Don't have an account? <a href="register.jsp">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </body>
</html>