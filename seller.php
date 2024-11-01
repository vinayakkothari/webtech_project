<?php
session_start();

if ($_SESSION["logged_in"] !== true) {
    header("Location: /login.php");
    exit;
} elseif ($_SESSION["type"] === "buyer") {
    header("Location: /");
}

include "db.php";

$sql = "SELECT o.order_id, o.customer_name, p.name AS product_name, o.order_quantity,
               p.price, (o.order_quantity * p.price) AS total
        FROM orders o
        JOIN products p ON o.product_id = p.product_id";

$result = mysqli_query($conn, $sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Shop | Seller Dashboard | Orders</title>
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Order Details</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Rate</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
// Check if there are any results and display them
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['order_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['customer_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['product_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['order_quantity']) . '</td>';
        echo '<td>$' . htmlspecialchars(number_format($row['price'], 2)) . '</td>';
        echo '<td>$' . htmlspecialchars(number_format(floatval($row['price']) * intval($row['order_quantity']), 2)) . '</td>';
        echo '<td>$' . htmlspecialchars(($row['total'])) . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="6" class="text-center">No orders found</td></tr>';
}
?>
        </tbody>
    </table>
    <a href="/logout.php" class="btn btn-secondary">Logout</a>
</div>
<script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>
