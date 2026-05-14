<?php
// set page title
$pageTitle = "Pesanan - Holyshoes";

// header
require_once './utils/header_cart.php';
?>

<body>
    <div class="container">
        <?php
        require_once './utils/navbar.php'
        ?>
    </div>
    <!-- START: body2 -->
    <?php
    // unset($_SESSION);
    // exit;

    // Kiểm tra nếu các giá trị đã được lưu trong session
    if (isset($_SESSION['ma_don_hang'])) {
        // Lấy mã đơn hàng từ session
        $ma_don_hang = $_SESSION['ma_don_hang'];

        // Kiểm tra nếu các giá trị đã được lưu trong session
        if (isset($_SESSION[$ma_don_hang]['tennn'], $_SESSION[$ma_don_hang]['emailnn'], $_SESSION[$ma_don_hang]['sdtnn'], $_SESSION[$ma_don_hang]['diachinn'], $_SESSION[$ma_don_hang]['ghichunn'])) {
            // Lấy các giá trị từ session
            $tennn = $_SESSION[$ma_don_hang]['tennn'];
            $emailnn = $_SESSION[$ma_don_hang]['emailnn'];
            $sdtnn = $_SESSION[$ma_don_hang]['sdtnn'];
            $diachinn = $_SESSION[$ma_don_hang]['diachinn'];
            $ghichunn = $_SESSION[$ma_don_hang]['ghichunn'];
            $tongtien = $_SESSION[$ma_don_hang]['tongtien'];
    ?>

            <div class="row wrapper__thanhtoan">
                <div class="col-lg-6 wrapper__item">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="margin-top: 40px; text-align: center;">Detail Pesanan</div>
                    <div class="p-4">
                        <h2 class="font-weight-bold mb-4">Pesanan Sukses</h2>
                        <p class="font-weight-bold mb-4">Toko Sepatu Holyshoes</p>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Kode </strong><strong>#<?=$ma_don_hang?></strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Terimakasih atas pembelian anda!</strong><strong>❤</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Detail pesanan sudah dikirim ke email</strong><strong><?=$emailnn?></strong></li>
                        </ul>
                        <p class="font-weight-bold mb-4">Informasi pembeli</p>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Nama</strong><strong><?=$tennn?></strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Nomor telepon</strong><strong><?=$sdtnn?></strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Alamat</strong><strong><?=$diachinn?></strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Catatan</strong><strong><?=$ghichunn?></strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">Rp.  <?= number_format($tongtien, 0, ",", ".") ?></h5>
                            </li>
                        </ul>
                        <p class="font-weight-bold mb-4">Cara pembayaran</p>
                        <form action="#" method="post">
                           <div class="wrapper__pttt"> 
                                <div class="pttt__radio">
                                    <input type="radio" name="phuongthucthanhtoan" value="COD" checked>
                                    Pembayaran setelah pengiriman (COD)
                                </div>
                                <div class="pttt__radio">

                                    <input type="radio" name="phuongthucthanhtoan" value="Momo">
                                    Transfer Bank 
                                </div>
                           </div>
                        </form>
                        
                        <form action="./" method="post">
                            <div class="wrapper__btn">
                                <input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="submit" style="width: 100%;border: none" value="Selesai">
                            </div>
                        </form>

                    </div>
                </div>
            </div>


    <?php

        } else {
            // Nếu không có các giá trị trong session, xử lý một cách phù hợp, ví dụ:
            echo "Không có thông tin địa chỉ giao hàng cho mã đơn hàng: " . $ma_don_hang . ".";
        }
    } else {
        // Nếu không có mã đơn hàng trong session, xử lý một cách phù hợp, ví dụ:
        echo "Không có thông tin đơn hàng.";
    }

    ?>
    <!-- END: body -->
    <?php
    // footer
    require_once './utils/footer.php';
    ?>
</body>

</html>