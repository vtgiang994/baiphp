<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SESSION COOKIE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Setting a session cookie</h1>
    <?php
        $_SESSION['test2'] = "Second test cookie";
    ?>
    <a href="sessiontest2.php">Click to continue</a>
    </body>
</html>