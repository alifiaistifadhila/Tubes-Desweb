<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodiest Restaurant - Cart</title>

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
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/c_home/index'); ?>">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?php echo base_url('index.php/menu')?>#collection">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- banner -->
    <section class="pt-5 mt-5">
        <div class="container mt-5">
            <h4>Shopping Cart</h4>
        </div>
    </section>
    <!-- end of banner -->

    <?php
        if ($this->cart->total_items() == 0) {
        $this->session->set_flashdata('cart_empty', 'Your cart is empty.');
        }
    ?>

<!-- Cart items -->
<section id="cart" class="py-5">
    <div class="container">
        <?php if ($this->cart->total_items() == 0) : ?>
            <p>Your cart is empty.</p>
        <?php else : ?>
            <table class="table">
                <!-- Table headers go here -->
                <thead>
                    <tr>
                        <th width="5%"></th>
                        <th width="8%">Nama Menu</th>
                        <th width="8%">Harga</th>
                        <th width="5%" style="text-align: center;">Quantity</th>
                        <th width="10%" style="text-align: center;">Total</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->cart->contents() as $item) : ?>
                        <tr>
                            <td>
                                <?php $image = $item['image']; ?>
                                <img class="" width="70" src="<?php echo base_url() . '/assets/images/' . $image; ?>">
                            </td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo 'Rp. ' . $item['price']; ?></td>
                            <td>
                                <input type="number" class="form-control text-center" value="<?php echo $item['qty']; ?>"
                                    onchange="updateCartItem(this, '<?php echo $item['rowid'] ?>')"
                                    data-price="<?php echo $item['price']; ?>">
                            </td>
                            <td style="text-align: center;" id="subtotal-<?php echo $item['rowid']; ?>"><?php echo 'Rp. ' . $item['subtotal']; ?></td>
                            <td>
                            <a href="<?php echo base_url() . 'index.php/cart/removeItem/' . $item['rowid']; ?>" 
                                onclick="return confirmDelete();"
                                class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt"></i>
                            </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- Table footer goes here -->
                <tfoot>
                    <tr>
                        <td></td>
                        <td colspan="3"></td>
                        <?php if ($this->cart->total_items() > 0) : ?>
                            <td id="total-price" class="text-left" style="text-align: center;">Total Harga: <b><span id="total-amount"><?php echo 'Rp. ' . $this->cart->total(); ?></span></b></td>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    </div>
</section>
<!-- End of cart items -->

<script>
    function updateCartItem(input, rowid) {
        const qty = input.value;
        const price = input.dataset.price;
        const subtotalElement = $('#subtotal-' + rowid);
        const formData = new FormData();
        formData.append('rowid', rowid);
        formData.append('qty', qty);

        $.post('<?php echo base_url('Cart/updateCartItem') ?>', formData, function (data) {
            if (data.success) {
                subtotalElement.html('Rp. ' + data.subtotal);
                updateTotal();
            }
        }, 'json')
            .fail(function (error) {
                console.error('Error:', error);
            });
    }

    function updateTotal() {
        $.post('<?php echo base_url('Cart/getTotal') ?>', function (data) {
            if (data.success) {
                const totalElement = $('#total-amount');
                totalElement.html('Rp. ' + data.total);
            }
        }, 'json')
            .fail(function (error) {
                console.error('Error:', error);
            });
    }

    function confirmDelete() {
        return confirm('Apakah anda yakin akan menghapus item menu ini?');
    }

    // Panggil updateTotal saat halaman dimuat
    $(document).ready(function () {
        updateTotal();

        <?php if ($this->session->flashdata('item_deleted')) : ?>
            alert('<?php echo $this->session->flashdata('item_deleted'); ?>');
            // Remove the following line to prevent redirecting to another page
            // window.location.href = '<?php echo base_url('cart'); ?>';
        <?php endif; ?>
    });
</script>

</body>
</html>
