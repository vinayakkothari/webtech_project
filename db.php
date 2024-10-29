<?php
$host = 'localhost';
$user = 'roast';
$password = 'Roast#2024';
$dbname = 'shopping';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
