<?php
// set page title
$pageTitle = "404 Page Error - Holyshoes";

// header 
// src 404 template: https://dev.to/stackfindover/35-html-404-page-templates-5bge
require_once './utils/header.php';
?>

<body>
    <div class="container">
        <?php
        require_once './utils/navbar.php'
        ?>
    </div>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center ">404</h1>
                        </div>

                        <div class="contant_box_404">
                            <h3>Sepertinya Kamu Tersesat</h3>
                            <p>Halaman yang Anda Cari Tidak Ada</p>
                            <a href="./" class="btn">Kembali ke Halaman Utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: body -->


    <?php
    // footer
    require_once './utils/footer.php';
    ?>
</body>

</html>