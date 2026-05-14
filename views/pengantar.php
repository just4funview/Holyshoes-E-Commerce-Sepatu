<?php
    // set page title
    $pageTitle = "Tentang - Holyshoes";

    // header
    require_once './utils/header.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>

        <!-- START: body -->
    
        
        <!------------------------------ Single product details------------------------------>
        <div class="small-container single-product">
            
            
            <!--<h2 class="title" >Sản phẩm nổi bật</h2>-->
            <div class="row">
                    <div class="col">
                        <img src="images/gt1.png" width="100%" id="productImg">
                    </div>
                
                    <div class="col">
                        <h2 style="color:orangered; margin-top: 25px">Deskripsi toko</h2>
                        <p>"Holy shoes kudus "TOKO SEPATU LOKAL TERMURAH DI KUDUS"</p>
                        <p>menyediakan berbagai macam sepatu 100% original BNIB, dari mulai sepatu ventela, patrobas, hingga vans. Kami buka setiap hari, dan setiap hari pasti ada promo menarik. Kami juga menyediakan jasa pengiriman. Kami juga melayani jasa cuci sepatu dari mulai fast clean hingga deep clean.</p>
                        <p>Happy shopping 😊😊</p>
                        <h2 style="color:orangered; margin-top: 25px">Opsi Layanan</h2>
                        <p>Ambil di tepi jalan</p>
                        <p>Ambil di toko</p>
                        <p>Pengiriman di hari yang sama</p>
                        <p>Pesan antar</p>
                        <p>Belanja di toko</p>
                        
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2 >Lanjutkan Belanja</h2>
                <a href="index.php?action=sanpham"><p>Lihat lebih banyak</p></a>
            </div>
        </div>
                
        <!----------------------------------products------------------------------------->
        <div class="small-container">
             <div class="row">
             <?php 
                        if($spnn==0){
                                echo "Đang cập nhật";
                            }else{
                                foreach ($spnn as $value) {
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
        </div>
        <!-- END: body -->

    
    <?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>