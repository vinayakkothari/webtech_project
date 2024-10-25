<?php
session_start();

if ($_SESSION["logged_in"] !== true) {
    header("Location: /login.php");
    exit;
}
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
        <tr>
            <td>001</td>
            <td>John Doe</td>
            <td>Mi LED TV 4A PRO</td>
            <td>1</td>
            <td>$1289</td>
            <td>$1289</td>
        </tr>
        <tr>
            <td>002</td>
            <td>Jane Smith</td>
            <td>Bluetooth Headphones</td>
            <td>2</td>
            <td>$89</td>
            <td>$178</td>
        </tr>
        <tr>
            <td>003</td>
            <td>Mike Brown</td>
            <td>Gaming Console</td>
            <td>1</td>
            <td>$299</td>
            <td>$299</td>
        </tr>
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
