<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-commerce-Site</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <script
            src="https://kit.fontawesome.com/3823abd3b7.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container d-flex justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img
                            src="./images/logo.jpg"
                            alt="Shopping-site-logo"
                            class="d-inline-block align-text-top"
                        />
                    </a>

                    <form
                        class="d-lg-flex w-25 position-relative d-none d-lg-block"
                    >
                        <input
                            class="form-control rounded-pill pe-5"
                            type="search"
                            placeholder="Search any Product"
                            aria-label="Search"
                        />
                        <button
                            style="right: 0px"
                            class="rounded-pill border-0 bg-primary text-white btn btn-outline-success position-absolute"
                            type="submit"
                        >
                            Search
                        </button>
                    </form>

                    <div>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div
                            class="collapse navbar-collapse"
                            id="navbarSupportedContent"
                        >
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        aria-current="page"
                                        href="#"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#login.php">Log in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div
                style="
                    background-color: #feeae9;
                    border-radius: 10px;
                    padding: 50px;
                "
                class="container my-5"
            >
                <div
                    id="carouselExampleSlidesOnly"
                    class="carousel slide"
                    data-bs-ride="carousel"
                >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-7 d-flex align-items-center">
                                    <div>
                                        <h1>Mi LED TV 4A PRO 32</h1>

                                        <p>
                                            Amet minim mollit non deserunt
                                            ullamco est sit aliqua dolor do amet
                                            sint. Velit officia consequat duis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </p>
                                        <h1>$1289</h1>
                                        <button class="btn btn-primary">
                                            BUY NOW
                                            <i
                                                class="fa-solid fa-cart-arrow-down"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img
                                        src="./images/banner-images/tv.png"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-7 d-flex align-items-center">
                                    <div>
                                        <h1>Mi LED TV 4A PRO 32</h1>

                                        <p>
                                            Amet minim mollit non deserunt
                                            ullamco est sit aliqua dolor do amet
                                            sint. Velit officia consequat duis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </p>
                                        <h1>$1289</h1>
                                        <button class="btn btn-primary">
                                            BUY NOW
                                            <i
                                                class="fa-solid fa-cart-arrow-down"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img
                                        src="./images/banner-images/headphone.png"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-7 d-flex align-items-center">
                                    <div>
                                        <h1>Mi LED TV 4A PRO 32</h1>

                                        <p>
                                            Amet minim mollit non deserunt
                                            ullamco est sit aliqua dolor do amet
                                            sint. Velit officia consequat duis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </p>
                                        <h1>$1289</h1>
                                        <button class="btn btn-primary">
                                            BUY NOW
                                            <i
                                                class="fa-solid fa-cart-arrow-down"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img
                                        src="./images/banner-images/xbox.png"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section style="background-color: #f4f4f4">
                <div class="container py-5">
                    <div class="d-flex justify-content-between pb-3"></div>
                    <div
                        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 text-center"
                    >
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/bags/bag-1.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/bags/bag-2.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/bags/bag-3.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/shoes/shoe-1.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/shoes/shoe-2.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img
                                    src="./images/shoes/shoe-3.png"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h3 class="card-title mt-3">Card title</h3>
                                    <p class="card-text">
                                        This is a longer card with supporting
                                        text below as a natural lead-in to
                                        additional content.
                                    </p>
                                    <h5>$1290</h5>
                                    <button class="btn btn-primary">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                style="
                    background-color: #fff2f1;
                    height: 300px;
                    padding-top: 70px;
                "
            >
                <div
                    class="container d-flex justify-content-center align-content-center"
                >
                    <div>
                        <h1>LET'S STAY IN TOUCH</h1>
                        <p>Get updates on sales specials and more</p>
                        <input
                            class="form-control"
                            type="Email"
                            placeholder="Your Email"
                        />
                        <button class="btn btn-success mt-2">Submit</button>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p class="text-center pt-3">&copy; Copyright 2024 ABCD</p>
        </footer>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
            <!-- Thank you Beyonce -->
        </script>
    </body>
</html>
