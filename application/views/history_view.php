<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodiest Restaurant - History</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?php echo base_url('index.php/menu_detail/index') ?>#header">
                <i class="fas fa-cloud-meatball" style="color: #ff8551;"></i>
                <span class="text-uppercase fw-lighter ms-2">Foodiest</span>
            </a>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo site_url ('C_Home/index'); ?>" class = "active">Home</a>
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
    <section class="pt-5 mt-5">
        <div class="container mt-5">
            <h4>Order History</h4>
        </div>
    </section>
    <!-- end of banner -->

    <!-- History items -->
    <section id="history" class="py-5">
        <div class="container">
            <?php if (empty($history)) : ?>
                <p>No history found.</p>
            <?php else : ?>
                <table class="table">
                    <!-- Table headers go here -->
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama User</th>
                            <th>Nama Menu</th>
                            <th>Kuantitas</th>
                            <th>Total Harga</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($history as $item) : ?>
                            <tr>
                                <td><?php echo $item['tanggal']; ?></td>
                                <td><?php echo $item['nama_user']; ?></td>
                                <td><?php echo $item['nama_menu']; ?></td>
                                <td><?php echo $item['kuantitas']; ?></td>
                                <td><?php echo 'Rp. ' . $item['total_harga']; ?></td>
                                <td><?php echo $item['alamat']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>
    <!-- End of history items -->

</body>
</html>
