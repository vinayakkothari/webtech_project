<?php
session_start();

if ($_SESSION["logged_in"] !== true) {
    header("Location: /login.php");
    exit;
}

include "db.php";

// Fetch order details from the database
$sql = "SELECT o.order_id, o.customer_name, p.name AS product_name, o.order_quantity, 
               p.price, (o.order_quantity * p.price) AS total
        FROM orders o
        JOIN products p ON o.product_id = p.product_id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard | Orders</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
    />
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
                echo '<td>$' . htmlspecialchars(number_format($row['total'], 2)) . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="6" class="text-center">No orders found</td></tr>';
        }
        ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
</div>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
</script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
