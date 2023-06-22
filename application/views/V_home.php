<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
    <style>
        nav {
            background-color: #9BCDD2;
        }
        h1 {
            font-size: medium;
        }  
        .btn {
            margin: auto;
            background-color: #9BCDD2;
        }
        footer {
            background-color: #9BCDD2;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                </li>
        </ul>
    </div>
    </nav>

    <div class="container">
        <div class="col-md-6 px-0">
        <h1 class="display-4">Mengapa memilih kami?</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        </div>
    </div>

    <div class="container">
    <h1 class="display-4">Produk Terlaris</h1>
        <div class="row">
            <div class="col">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
                <div class="col">
                    <div class="card" style="width: auto;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: auto;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="button">
                <a href="#" class="btn btn-primary">Lihat semua produk</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="display-4">Kata Mereka...</h1>
        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
            <button class="carousel-control-prev position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Anna Deynah</h5>
                    <p>UX Designer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                    officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">John Doe</h5>
                    <p>Web Developer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid commodi.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Maria Kate</h5>
                    <p>Photographer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">John Doe</h5>
                    <p>UX Designer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                    officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Alex Rey</h5>
                    <p>Web Developer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid commodi.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Maria Kate</h5>
                    <p>Photographer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Anna Deynah</h5>
                    <p>UX Designer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                    officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">John Doe</h5>
                    <p>Web Developer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid commodi.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm"></i>
                    </li>
                    </ul>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Maria Kate</h5>
                    <p>Photographer</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Inner -->
        </div>
        <!-- Carousel wrapper -->
    </div>

        <!-- Footer -->
    <footer class="text-center text-lg-start text-black">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Right -->
        <div>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
        </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Jam Operasional
            </h6>
            <p>Senin - Jumat: 08.00-20.00 WIB</p>
            <p>Sabtu - Minggu: 1o.00-22.00 WIB</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="#">Nama Restoran</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->    
</body>
</html>