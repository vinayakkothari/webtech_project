<?php
const valid_username = "sam";
const valid_password = "sam";

session_start();

if (count($_POST)) {
    if ($_POST["username"] === valid_username && $_POST["password"] === valid_password) {
        echo "Valid credentials... Logging in";

        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $_POST["username"];

        header("Location: /");
    } else {
        echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Cloth Shop | Login</title>
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
        <title>Cloth Shop | Login</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <div class="container">
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
