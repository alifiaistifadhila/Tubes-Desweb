<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodiest Restaurant</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">

    <style>
        .collection{
            margin-left:160px;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?php echo base_url('index.php/bibliografi/index')?>#header">
                <i class="fas fa-cloud-meatball" style="color: #ff8551;"></i>
                <span class="text-uppercase fw-lighter ms-2" style="color: #FF8551">Foodiest</span>
            </a>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/c_home/index'); ?>">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/menu')?>#collection">Menu</a>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-3" href="<?php echo base_url('index.php/cart')?>#">
                <i class="fas fa-shopping-cart me-2"></i>
            </a>
        </div>
    </nav>
    <!-- end of navbar -->
    
    <!-- collection -->
    <section id="collection" class="py-5 mt-5">
        <!-- tentang kami -->
        <div class="container">
            <div class="col-md-6 px-0">
                <div class="title text-left py-5">
                    <h2 class="position-relative d-inline-block">Mengapa memilih kami?</h2>
                </div>
            <p class="lead my-3">FOODIEST didirikan pada tahun 2023 di Bandung, menyediakan berbagai macam hidangan tradisional dibuat denagn bahan-bahan berkualitas tinggi. </p>
            </div>
        </div>
        <!-- end of tentang kami -->

        <!-- produk terlaris -->
        <div class="container">
            <div class="title text-left py-5">
                <h2 class="position-relative d-inline-block">Produk Terlaris</h2>
            </div>
            <div class="row">
                <!-- menu 1 -->
                <div class="col">
                    <div class="card" style="width: auto;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/nasgor.png'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Goreng</h5>
                            <p class="card-text">Nasi yang digoreng dengan bumbu rempah dan dilengkapi dengan telur, ayam, dan sayuran.</p>
                        </div>
                    </div>
                </div>
                <!-- menu 2 -->
                <div class="col">
                    <div class="card" style="width: auto;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/rendang.png'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rendang</h5>
                            <p class="card-text">Daging sapi yang dimasak dalam santan dan rempah-rempah, dengan rasa pedas dan gurih.</p>
                        </div>
                    </div>
                </div>
                <!-- menu 3 -->
                <div class="col">
                    <div class="card" style="width: auto;">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/es campur.png'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Es Campur</h5>
                            <p class="card-text">Es Campur adalah minuman yang terdiri dari campuran berbagai bahan seperti buah, sirup, dll.</p>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="button" style="align-items: center; justify-content: center;">
                <a href="<?php echo base_url('index.php/menu')?>#collection" class="btn btn-primary" style="align-items: center; justify-content: center;">Lihat semua produk</a>
            </div>
        </div>
    </div>
    
    <!-- review -->
    <div class="container">
        <div class="title text-left py-5">
            <h2 class="position-relative d-inline-block">Kata Mereka</h2>
        </div>
        
        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Controls
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
        -->
        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow-1-strong mb-4"
                    src="<?php echo base_url('assets/images/bayu.jpg'); ?>" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Bayu</h5>
                    <p>PNS</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Mantap tenan! harga merakyat kualitas kelas!
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
                    src="<?php echo base_url('assets/images/gigi.jpg'); ?>" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Gigi</h5>
                    <p>Model</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Comfort food ku beli di sini loch!
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
                    src="<?php echo base_url('assets/images/sule.jpg'); ?>" alt="avatar"
                    style="width: 150px;" />
                    <h5 class="mb-3">Sule</h5>
                    <p>Komedian</p>
                    <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Kacau (enak banget)
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

        <!-- Inner -->
        </div>
        <!-- Carousel wrapper -->
    </div>
    </section>
    <!-- end of collection -->

        <!-- Footer -->
    <footer class="text-center text-lg-start text-black">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Jam Operasional
            </h6>
            <p>Senin-Jumat <br> 08.00-20.00 WIB</p>
            <p>Sabtu-Minggu 10.00-22.00 WIB</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fas fa-home me-3"></i>JL Cempaka, Bandung</p>
            <p><i class="fas fa-envelope me-3"></i>foodiest@gmail.com</p>
            <p><i class="fas fa-phone me-3"></i>+ 62 234 567 88</p>
            <p></p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Sosial Media</h6>
            <p><i class="fab fa-instagram me-3"></i>foodiest</p>
            <p><i class="fab fa-twitter me-3"></i>foodiest</p>
            <p><i class="fab fa-facebook me-3"></i>FOODIEST</p>
            <p></p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="#">FOODIEST</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->    
</body>
</html>