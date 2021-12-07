<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>[FORM NAME]</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/flexStyle.css">
        <style>
            h2{padding-left: 20px; padding-top: 20px}
            table{margin: 10px; background-color: whitesmoke; border: 1px solid black;}
            tr, td{border: 1px solid black; text-align: center; height: 30px}
            embed{height: 75px; width: 100%; pointer-events: none}
            a{padding-top: 30px}
        </style>
    </head>
    <body>
        <div class="header">
            <h1>[FORM NAME]</h1>
        </div>
        <div class="main">
            <div style="display: flex; justify-content: space-between">
                <h2><u>[PROFESSOR NAME]</u></h2>
                <h2><a href="requests.php">Delete Form</a></h2>
            </div>
            <table>
                <tr>
                    <td><b>Class</b></td>
                    <td><b>Title</b></td>
                    <td><b>Author</b></td>
                    <td><b>Edition</b></td>
                    <td><b>Publisher</b></td>
                    <td><b>ISBN</b></td>
                    <td><b>Delete?</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="order.php"><embed src="../images/trash.png" style="height: 30px; width: 30px"></a></td>
                </tr>
            </table>
            <a href="finalList.php">
                <embed src="../components/button.php"/>
            </a>
        </div>
    </body>
</html>