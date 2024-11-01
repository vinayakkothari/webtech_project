<?php

// Debug mode
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

if ($_SESSION["logged_in"] !== true) {
    header("Location: /login.php");
    exit;
} elseif ($_SESSION["type"] === "seller") {
    header("Location: /seller.php");
}

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: /");
}

include "db.php";

$product_id = $_GET["id"];
$qty = $_GET["qty"];
$sql = "SELECT * FROM products WHERE product_id='$product_id'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {
    echo "Product not found!";
} else {
    $customer_name = $_SESSION["username"];
    $date = date("Y-m-d");

    $sql = $conn->prepare("INSERT INTO orders (customer_name, product_id, order_quantity, order_date) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $customer_name, $product_id, $qty, $date);
    $sql->execute();

    echo "Order placed. We will contact you shortly regarding the payment.";
}

$conn->close();
