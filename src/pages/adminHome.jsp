<%@ page contentType="text/html;charset=UTF-8" language="java" %>
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
        <div class="header">
            <h1>Admin Home</h1>
        </div>
        <div class="main" >
            <a href="forms.jsp">
                <embed src="../components/button.jsp"/>
            </a>
            <a href="adminManager.jsp">
                <embed src="../components/button.jsp"/>
            </a>
            <a href="formManager.jsp">
                <embed src="../components/button.jsp"/>
            </a>
        </div>
    </body>
</html>