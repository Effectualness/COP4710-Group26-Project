<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
    </head>
    <body>
        <div class="header">
            <h1>Bookstore Register</h1>
        </div>
        <div class="main" style="align-items: center; justify-content: center;">
            <div class="roundedBox">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form method="post" action="./adminHome.jsp">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group" style="display:flex; justify-content: space-between;">
                        <input type="submit" class="btn btn-primary" value="Submit" style="width:50%">
                        <input type="reset" class="btn btn-secondary ml-2" value="Reset" style="width:50%">
                    </div>
                    <p>Already have an account? <a href="login.jsp">Login here</a>.</p>
                </form>
            </div>
        </div>   
    </body>
</html>