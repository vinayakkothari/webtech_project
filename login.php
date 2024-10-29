<?php

session_start();

if (count($_POST)) {
    include "db.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, hash("sha256", $_POST['password']));

    $sql = "SELECT username, password, type FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "Valid credentials... Logging in";

        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $row["username"];
        $_SESSION["type"] = $row['type'];

        if ($_SESSION["type"] === "buyer") {
            header("Location: /");
        } else {
            header("Location: /seller.php");
        }
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
            <div class="container">
                <p>Invalid credentials!</p>
                <a href="/">Try again</a>
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
        <title>Smart Shop | Login</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <div class="container-login">
            <h3>Login</h3>
            <form method="POST">
                <label for="name">Username:</label>
                <input type="text" name="username" value="sam" /><br /><br />

                <label for="phone">Password:</label>
                <input type="password" name="password" value="sam" /><br /><br />

                <input type="submit" value="LOGIN" />
            </form>
        </div>
    </body>
</html>';
}
