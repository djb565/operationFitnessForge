<?php
require 'database.php';
if (!empty($_SESSION['id'])) {
    header("Location: home.php");
}
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
            <button id="loginbtn" onclick="goLogin()">Login</button>
        </div>
    </body>
    <script>
        function goHome() {
            window.location.href = 'index.php';
        }

        function goLogin() {
            window.location.href = 'login.php';
        }
    </script>
</html>

