<?php

// Debug mode
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && count($_POST)) {
    include "db.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $sql = "SELECT username type FROM users WHERE username LIKE '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo "Registering...";

        $password = mysqli_real_escape_string($conn, hash("sha256", $_POST['password']));
        $type = "buyer";

        $sql = $conn->prepare("INSERT INTO users (username, password, type) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $username, $password, $type);
        $sql->execute();

        header("Location: /login.php");
    } else {
        echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Smart Shop | Login</title>
                <link rel="stylesheet" href="assets/style.css" />
            </head>
            <body>
            <div class="container-login-error">
                <p>Username has been taken</p>
                <a href="/register.php">Try again</a>
            </div>
            </body>
        </html>';
    }
} else {
    echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Smart Shop | Register</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <div class="container-login">
            <h3>Register</h3>
            <form method="POST">
                <label for="name">Username:</label>
                <input type="text" name="username" required /><br /><br />

                <label for="phone">Password:</label>
                <input type="password" name="password" required /><br /><br />

                <div style="display: flex; justify-content: space-between;">
                    <input type="submit" value="Submit" />
                    <a href="/login.php">Login</a>
                </div>
            </form>
        </div>
    </body>
</html>';
}
