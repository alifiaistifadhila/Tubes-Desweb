<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodiest Restaurant</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel = "stylesheet" href = "<?php echo base_url('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css')?>">

    <link rel = "stylesheet" href = "<?php echo base_url('assets/css/main.css')?>">

</head>
<body>
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "<?php echo base_url('index.php/menu_detail/index')?>#header">
                <i class="fas fa-cloud-meatball" style="color: #ff8551;"></i>
                <span class = "text-uppercase fw-lighter ms-2">Foodiest</span>
            </a>
            
            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/home')?>#header">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/menu')?>#collection">Menu</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/order')?>">Order</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/history')?>">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->


    <!-- banner -->
    <section  class = "pt-5 mt-5">
        <div class = "container mt-5">
            <h4>Detail Menu</h4>
        </div>
    </section>
    <!-- end of banner -->

<!-- about us -->
<section id="about" class="py-5">
    <div class="container">

        <div class="row gy-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                <p>Nama Menu : <?php echo $menuDetail->nama_menu; ?></p>
                <p>Harga    : Rp. <?php echo $menuDetail->harga; ?></p>
                <p>Deskripsi: <br> <?php echo $menuDetail->deskripsi; ?></p><br>
            </div>
            <div class="col-lg-5 order-lg-0">
                <img src="<?php echo base_url('assets/images/'.$menuDetail->foto); ?>" alt="" class="img-fluid">
            </div>
        </div>
        <br>
        <a href="<?php echo base_url('index.php/menu/addToCart/'.$menuDetail->id_menu); ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
    </div>
</section>
<!-- end of about us -->

<script src="<?php echo base_url('assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>