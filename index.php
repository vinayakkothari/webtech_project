<?php
session_start();

if ($_SESSION["logged_in"] !== true) {
    header("Location: /login.php");
    exit;
}

include "db.php";

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloth Shop</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/3823abd3b7.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.jpg" alt="Shopping-site-logo" class="d-inline-block align-text-top" />
            </a>
            <form class="d-lg-flex w-25 position-relative d-none d-lg-block">
                <input class="form-control rounded-pill pe-5" type="search" placeholder="Search any Product" aria-label="Search" />
                <button style="right: 0px" class="rounded-pill border-0 bg-primary text-white btn btn-outline-success position-absolute" type="submit">Search</button>
            </form>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <section style="background-color: #f4f4f4">
        <div class="container py-5">
            <div class="d-flex justify-content-between pb-3"></div>

            <!-- Product Grid -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 text-center">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card border-0 h-100">
                                    <img src="./images/shoes/shoe-' . $row["product_id"] . '.png" class="card-img-top" alt="' . htmlspecialchars($row["name"]) . '" />
                                    <div class="card-body">
                                        <h3 class="card-title mt-3">' . htmlspecialchars($row["name"]) . '</h3>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                        <h5>$' . htmlspecialchars($row["price"]) . '</h5>
                                        <button class="btn btn-primary">BUY NOW</button>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "<p>No products found.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <section style="background-color: #fff2f1; height: 300px; padding-top: 70px;">
        <div class="container d-flex justify-content-center align-content-center">
            <div>
                <h1>LET'S STAY IN TOUCH</h1>
                <p>Get updates on sales specials and more</p>
                <input class="form-control" type="Email" placeholder="Your Email" />
                <button class="btn btn-success mt-2">Submit</button>
            </div>
        </div>
    </section>
</main>

<footer>
    <p class="text-center pt-3">&copy; Copyright 2024 ABCD</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
