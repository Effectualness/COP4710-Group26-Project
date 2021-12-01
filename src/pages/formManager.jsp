<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>All Forms</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
        <style>
            h2{padding: 20px;}
            embed{height: 75px; width: 100%; pointer-events: none}
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Form Manager</h1>
        </div>
        <div class="main">
            <div style="display: flex; justify-content: space-between">
                <h2><u>All Forms</u></h2>
                <h2><a href="formManager.jsp">+ Create Form</a></h2>
            </div>
            <a href="formAdmin.jsp">
                <embed src="../components/formLink.jsp"/>
            </a>
        </div>
    </body>
</html>