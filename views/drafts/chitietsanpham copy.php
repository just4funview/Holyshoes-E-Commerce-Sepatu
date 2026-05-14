<?php
    // set page title
    $pageTitle = "Chi tiết sản phẩm - LeoPard";

    // header
    require_once './utils/header.php';

    // connect sql
    require_once './utils/connect_sql.php';
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
                        <img src="<?=$proInfo['hinhanh_sp']?>" width="100%" id="productImg">
                    </div>
                <?php $soluong =1 ?>
                    <div class="col-2">
                        <p><a href="./">Home</a> / <a href="index.php?action=sanpham">Shoes</a></p>
                        <h1><?=$proInfo['ten_sp'];?></h1>
                        <h4><?= number_format($proInfo['gia_sp'], 0, ",", ".") ?>đ</h4>
                        <div class="products__size">
                            <h5>Kích thước</h5>
                            <select>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                            </select>
                        </div>
                        <div class="products__soluong">
                            <h5>Số lượng</h5>
                            <input type="number" min="1" value="<?=$soluong?>">
                       </div>

                        <form action="views/giohang.php?action=add" method="GET">	 
                            <input type = "number" min = "0" value = "1" name="quantity[<?=$proInfo['id_sp']?>]">
                            <button type="submit" class= "btn" style="width: 150px;">Thêm vào giỏ hàng<i class = "fas fa-shopping-cart"></i></button>
					    </form>

                        <h3>Chi tiết sản phẩm <i class="fa fa-indent" ></i></h3>
                        <br>
                        <p><?=$proInfo['mota_sp']?></p>
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Produk serupa</h2>
                <a href="index.php?action=sanpham"><p>Produk serupa</p></a>
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
                                                <p class="product-item__price" class="product-item__price"><?php echo number_format($value['gia_sp'], 0, ',', '.');?>đ</p>
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