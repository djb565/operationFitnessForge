<?php
require 'database.php';
$conn = getDB();
if (!empty($_SESSION['id'])) {
    header("Location: home.php");
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];

    $alreadyExists = "SELECT * FROM users WHERE Username=? OR email=?";

    $stmt = mysqli_prepare($conn, $alreadyExists);

    if (!$stmt) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    }

    if (!mysqli_stmt_execute($stmt)) {
        echo mysqli_stmt_error($stmt);
    } else {
        $userData = mysqli_stmt_get_result($stmt);
    }
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
                if (mysqli_num_rows($userData) > 0) {
                    echo 'Username or email already exists, please try a different one';
                } else {
                    if ($password = $confirmpassword) {
                        $addUser = "INSERT INTO users (Username, Password, Email) VALUES (?, ?, ?)";

                        $userStmt = mysqli_prepare($conn, $addUser);

                        mysqli_stmt_bind_param($userStmt, "sss", $username, $password, $email);

                        if (!mysqli_stmt_execute($userStmt)) {
                            echo mysqli_error($userStmt);
                        } else {
                            echo "Account created successfully! Please log in.";
                        }
                    } else {
                        echo "Passwords do not match.";
                    }
                }
            }
            ?>
        </label>
        <form id='returnhome'>
            <button id='returnbtn' formaction='login.php'>Login</button>
        </form>
    </body>
</html>