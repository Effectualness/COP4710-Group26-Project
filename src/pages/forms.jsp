<%@ page contentType="text/html;charset=UTF-8" language="java" %>
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
        <div class="header">
            <h1>Welcome, [NAME]</h1>
        </div>
        <div class="main">
            <h2><u>My Forms</u></h2>
            <a href="order.jsp">
                <embed src="../components/formLink.jsp"/>
            </a>
        </div>
    </body>
</html>