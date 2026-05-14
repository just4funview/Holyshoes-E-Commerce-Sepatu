<?php
    // set page title
    $pageTitle = "Kontak - Holyshoes";

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
                    <div class="col-2">
                        <img src="images/lh1.jpg" width="100%" id="productImg">
                    </div>
                
                    <div class="col-2">
                       <h3>Alamat: Jl. Nasional 1 No.52, Mlati Lor, Mlati Norowito, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59319</h3>
                       <h3>Nomor Telepon: 08882603894</h3>
                       <h3>Maps: <a href="https://maps.app.goo.gl/8nuR8LXvmiacfHL86" target="_blank" style="color:blue">https://maps.app.goo.gl/8nuR8LXvmiacfHL86</a></h3>
                       <h3>Instagram: <a href="https://instagram.com/holy.shoes_?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" style="color:blue">https://instagram.com/holy.shoes_?igshid=OGQ5ZDc2ODk2ZA==</a></h3>
                       <h3>Shopee: <a href="https://shopee.co.id/kudussneakerslocal?smtt=0.0.9" target="_blank" style="color:blue">https://shopee.co.id/kudussneakerslocal?smtt=0.0.9</a></h3>
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