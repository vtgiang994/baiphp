<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Retrieving the session cookie</h1>
    <?php
    if (isset($_SESSION['test2'])) {
        $data = $_SESSION['test2'];
        echo "<p>Session cookie: $data</p>";
    } else{
        echo "<p>Error accessing the session cookie</p>";
    }
    ?>
    <a href="session_cookie.php">Go back to start</a>
    </body>
</html>