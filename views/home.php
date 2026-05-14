<?php
    // set page title
    $pageTitle = "Home - Holyshoes";

    // header
    require_once './utils/header.php';
?>
<body>
<div class="header">
    <div class="container">
          <!-- START: navbar -->
          <?php require_once './utils/navbar.php'; ?>
            <!-- END: navbar -->
            <div class="row" id="home__thumb">
                <div class="col-2">
                    <h1>Kudus Sneakers Local</h1>
                    <p>Hola Holygance!<br>Welcome to our website</p>
                    <a href="index.php?action=sanpham" class="btn">Jelajahi Sekarang &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image12.png">
                </div>
            </div>
    </div>
</div>
          
        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Produk Unggulan</h2>
                <div class="row">
                    <?php 
                        if($spnoibat==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spnoibat as $value) {
                                ?>
                                        <div class="col-4 product-shadow__hover">
                                        <div class="products-item" style="overflow: unset">
                                            <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><img src="<?php echo $value['hinhanh_sp'];?>" alt="..."></a>
                                            <div class="product-item__info">
                                                <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><h4 class="product-item__title"><?php echo $value['ten_sp'];?></h4></a>
                                                <div class="rating">
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star-half-o" ></i>
                                                    <i class="fa fa-star-o" ></i>
                                                </div>
                                                <p class="product-item__price" class="product-item__price">Rp. <?php echo number_format($value['gia_sp'], 0, ',', '.');?></p>
                                            </div>

                                            <!-- Overlay -->
                                            <div class="home-product-item__favorite">
                                                    <i class="fa fa-check"></i>
                                                    <span>Favorit</span>
                                            </div>
                                            <div class="home-product-item__discount">
                                                <span class="home-product-item__discount-label"
                                                    >NEW</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                    ?> 
                </div>
            
            
             <h2 class="title" >Produk Terbaru</h2>
                <div class="row"><?php 
                        if($spmoinhat==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spmoinhat as $value) {

                                ?>
                                        <!-- <div class="col-4 products-item"> -->
                                        <div class="col-4 product-shadow__hover">
                                        <div class="products-item">
                                            <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><img src="<?php echo $value['hinhanh_sp'];?>" alt="..."></a>
                                            <div class="product-item__info">
                                                <a href="index.php?action=chitietsanpham&id=<?=$value['id_sp']; ?>"><h4 class="product-item__title"><?php echo $value['ten_sp'];?></h4></a>
                                                <div class="rating">
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star-half-o" ></i>
                                                    <i class="fa fa-star-o" ></i>
                                                </div>
                                                <p class="product-item__price" class="product-item__price">Rp. <?php echo number_format($value['gia_sp'], 0, ',', '.');?></p>
                                            </div>
                                        </div>

                                    </div>
                                <?php
                                }
                            }
                    ?> 
                </div>
            <!--new row for the latest product-->
            </div>
        
        <!--------------------------`   offer   --------------------------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/Ventela Public Low Black _ Natural.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Tersedia secara eklusif di Holyshoes</p>
                        <h1>Sepatu Lokal</h1>
                        <small> Beli koleksi sneakers terbaru secara online di Holyshoes dengan harga terbaik dari brand lokal seperti Ventella, dan Patrobas hingga brand ternama seperti Vans sesuka Anda dengan harga terbaik. </small><br>
                        <a href="index.php?action=sanpham" class="btn">Beli Sekarang &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
       
<?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>