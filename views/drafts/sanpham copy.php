<?php
    // set page title
    $pageTitle = "Sản phẩm - LeoPard";

    // header
    require_once './utils/header.php';
?>

<body>
        <div class="container">
            <?php 
                require_once './utils/navbar.php' 
            ?>
        </div>
    
        
        <!------------------------------ Products------------------------------>
        <div class="small-container">
            <div class="row row-2">
                <h2>Tất cả sản phẩm</h2>
                <select>
                    <option>Sắp xếp theo liên quan</option>
                    <option>Sắp xếp theo giá</option>
                    <option>Sắp xếp theo mới nhất</option>
                    <option>Sắp xếp theo bán chạy</option>
                </select>
            </div>
            
            
            <!--<h2 class="title" >Sản phẩm nổi bật</h2>-->
            <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-11.jpg"></a>
                        <a href="products-details.html"><h4>Giày thể thao Downshifter</h4></a>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>50.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-2.jpg"></a>
                        <h4>Giày chạy bộ buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>35.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>Giày buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>15.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-10.jpg"></a>
                        <h4>Giày buộc dây phẳng</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>48.000đ</p>
                    </div>  
                </div>
            
            <!-------------- new row----------------->
            
            <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-5.jpg"></a>
                        <h4>Giày đế bệt màu xám</h4>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>50.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-3.jpg"></a>
                        <h4>Giày buộc dây màu đen</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$21.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-7.jpg"></a>
                        <h4>Vớ cotton nam HRX</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$09.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-2.jpg"></a>
                        <h4>Giày chạy bộ buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>35.000đ</p>
                    </div>  
                </div>
            <!--new row for the latest product-->
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-7.jpg"></a>
                        <h4>Vớ cotton HRX</h4>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$10.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-10.jpg"></a>
                        <h4>Giày buộc dây phẳng</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>48.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-11.jpg"></a>
                        <h4>Giày Lười Nam (Xám)</h4>
                        <div class="rating">
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>15.000đ</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-12.jpg"></a>
                        <h4>Giày trắng buộc dây</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$21.00</p>
                    </div>  
                </div>
            
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
            
        </div>

        <?php 
    // footer
    require_once './utils/footer.php';
?>
</body>
</html>