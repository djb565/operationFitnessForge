<?php
require 'database.php';
$conn = getDB();
if (isset($_POST['login'])) {
    $usernameemail = $_POST['usernameemail'];
    $password = $_POST['password'];

    $checkLogin = mysqli_query($conn, "SELECT * FROM users WHERE Username='$usernameemail' OR Email='$usernameemail'");

    $pass = mysqli_fetch_assoc($checkLogin);

    if (mysqli_num_rows($checkLogin) > 0) {
        if ($password == $pass['Password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $pass['UserID'];
            header("Location: home.php");
        } else {
            echo "<script> alert('Wrong username or password.'); </script>";
        }
    } else {
        echo "<script> alert('User does not exist.'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <form id='loginForm' method="post">
            <input type="text" id="usernameemail" name="usernameemail" placeholder="Username/Email">
            <input type="password" id="password" name="password" placeholder="Password">
            <button id="loginbtn" name="login">Login</button>
            <button id="homebtn" formaction="index.php">Back</button>
        </form>
    </body>
</html>