<?php
require 'database.php';

if (isset($_SESSION['id'])) {
    $loggedin = True;
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id="logoutForm">
            <button id="logoutbtn" formaction="logout.php">Logout</button>
        </form>
    </body>
</html>