<?php
    // set page title
    $pageTitle = "Produk - Holyshoes";

    // header
    require_once './utils/header.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>
    
        
        <!------------------------------ START: Products2------------------------------>
        <div class="small-container">
            <div class="row row-2">
                <h2>Produk</h2>
                <select>
                    <option>Urutkan berdasarkan relevansi</option>
                    <option>Urutkan berdasarkan harga</option>
                    <option>Urutkan berdasarkan produk terbaru</option>
                    <option>Urutkan berdasarkan pembelian terbanyak</option>
                </select>
            </div>
            
            <!-- Klasifikasi Produk -->
            <div class="row pd-50">
            <div class="col">

                <nav class="nav flex-column">
                    <?php
                            foreach ($data as $value) {
                            ?>
                                <a class="nav-link btn-main btn-loaisp" href="index.php?action=sanpham&idloai=<?php echo $value['id_loaisp'] ?>">
                                    <?php echo $value['ten_loaisp'];
                                    ?>
                                </a>
                            <?php
                            }
                            ?>
                
                </nav>
            </div>
	  </div>

            
            <div class="row">
                    <?php 
                        if (isset($_GET['idloai'])) {
							if($data2==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data2 as $value) {

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
						}
						else{
							if($data1==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data1 as $value) {

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
                                                    <p class="product-item__price" class="product-item__price">Rp. <?= number_format($value['gia_sp'], 0, ',', '.');?></p>
                                                </div>
                                            </div>
                                        </div>
									<?php
									}
								}
						}

                    ?>
                     
                </div>
            
           
            
            
            
        </div>
        <!------------------------------ END: Products 2 ------------------------------>


        <?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>