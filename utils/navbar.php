<?php
if (isset($_POST['nutdx'])) {
    session_unset();
}

$isLoggedIn = isset($_SESSION['tennd']);
$isAdmin = $isLoggedIn && $_SESSION['quyennd'] == 1;


    // // connect sql
    // require_once './utils/connect_db.php';

$host = "localhost";
$user = "root";
$password = "";
$database = "db_sp_mk15";
$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Connection Fail: ".mysqli_connect_errno();exit;
}
?>

<div class="navbar">
    <div class="logo">
        <a href="./"><img src="images/logo.png" width="185px"></a>
    </div>
    <nav>
        <ul id="MenuItems" class="menu-items">
            <li><a href="./">Beranda</a></li>
            <li><a href="index.php?action=sanpham">Produk</a></li>
            <li><a href="index.php?action=gioithieu">Tentang</a></li>
            <li><a href="index.php?action=lienhe">Kontak</a></li>
            <li><a href="#" class="search-ico"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <?php if ($isLoggedIn) { ?>
                <li class="navbar__user">
                    <a class="nav-link nav-link__active <?= $isAdmin ? 'active' : ''; ?>" href="#">
                        Halo <?= $_SESSION['tennd']; ?>
                    </a>
                    <ul class="navbar__user-menu">
                        <li class="navbar__user-menu-item">
                            <a>Akun Saya</a>
                        </li>
                        <?php if ($isAdmin) { ?>
                            <li class="navbar__user-menu-item">
                                <a class="nav-link active" href="index.php?action=quantri">Kelola Produk</a>
                            </li>
                        <?php } ?>
                        <li class="navbar__user-menu-item">
                            <a href="index.php?action=giohang">Keranjang</a>
                        </li>
                        <li class="navbar__user-menu-item navbar__user-menu-item--separate">
                            <form method="post">
                                <input class="btn-dangxuat" type="submit" name="nutdx" value="Keluar">
                            </form>
                        </li>
                    </ul>
                </li>
            <?php } else { ?>
                <li><a class="nav-link" href="index.php?action=taikhoan">Login / Register</a></li>
            <?php } ?>
        </ul>
    </nav>
    <a href="index.php?action=giohang"><img src="images/cart.png" width="30px" height="30px"></a>
    <img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
</div>

<!--search-->
<form action="index.php?action=ketquatimkiem&keyword=" method="POST" id="search-form">
    <div class="search-bar">
        <div class="search">
            <input type="text" id="search-input" placeholder="Cari produk..." name="str" required>
            <button type="submit" name="submit" style='border: none; background-color: white;'><a href="#" class="btn__search"><i class="fa fa-search"></i></a></button>
            <a href="#" class="btn__search search-cancel">&times;</a>
        </div>
    </div>
</form>




