<?php
require 'database.php';
$conn = getDB();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];

    $alreadyExists = mysqli_query($conn, "SELECT * FROM users WHERE Username='$username' OR email='$email'");
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Signed Up</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <label id="displayinfolbl">
                <?php
                if (mysqli_num_rows($alreadyExists) > 0) {
                    echo 'Username or email already exists, please try a different one';
                } else {
                    if ($password = $confirmpassword) {
                        $addUser = "INSERT INTO users (Username, Password, Email) VALUES ('$username', '$password', '$email')";
                        mysqli_query($conn, $addUser);
                        echo "Account created successfully! Please log in.";
                    } else {
                        echo "Passwords do not match.";
                    }
                }
            }
            ?>
        </label>
        <form id='returnhome'>
            <button id='returnbtn' formaction='signup.php'>Return</button>
        </form>
    </body>
</html>