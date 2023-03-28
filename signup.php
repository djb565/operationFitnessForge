<?php
require 'database.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div id="container">
            <p id="containtitle">Sign Up</p>
            <form id="signupform" name="signupinfo" method="post">
                <div class="gap"> 
                    <input class="forminput" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="gap"> 
                    <input class="forminput" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="gap"> 
                    <input class="forminput" type="password" name="confirmpassword" placeholder="Confirm Password" required>
                </div>
                <div class="gap"> 
                    <input class="forminput" type="text" name="email" placeholder="Email" required>
                </div>
                <button name='submit' type="submit" id="submitbtn" formaction='signupsuccess.php'>Sign Up</button>
            </form>
            <button id="cancelbtn" onclick="goHome()">Cancel</button>
        </div>
    </body>
    <script>
        function goHome() {
            location.href = "index.php";
        }
    </script>
</html>

