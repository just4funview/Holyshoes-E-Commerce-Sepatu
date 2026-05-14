<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Redstore | Ecommerce website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/customStyle.css" />
    </head>
    <body>
        <div class ="header">
        <div class="container">
            <!-- START: navbar -->
			<?php require_once './utils/navbar.php'; ?>
            <!-- END: navbar -->
            <div class="row">
                <div class="col-2">
                    <h1>Give your Workout <br>A New Style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
                    <a href="products.html" class="btn">Khám phá ngay &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>
        
        <!------------------------------ featured categories------------------------------>
        <div class="categories">
            <div class="small-container">
                <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3 (2).jpg">
                </div>
            </div>
            </div>
        </div>
        
        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Sản phẩm nổi bật</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-11.jpg"></a>
                        <a href="products-details.html"><h4>Giày thể thao Downshifter</h4></a>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
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
            
            
             <h2 class="title" >Sản phẩm mới nhất</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="images/product-5.jpg"></a>
                        <h4>Giày đế bệt màu xám</h4>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
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
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
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
            </div>
        
        <!--------------------------`   offer   --------------------------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Độc quyền có sẵn trên LeoPard</p>
                        <h1>Sports Shoes</h1>
                        <small> Mua trực tuyến các bộ sưu tập giày thể thao mới nhất trên Redstore với giá tốt nhất từ các thương hiệu hàng đầu như Adidas, Nike, Puma, Asics và Sparx khi rảnh rỗi với giá tốt nhất. </small><br>
                        <a href="products.html" class="btn">Mua ngay &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-1.png">
                        <h3>Lan Anh</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-2.png">
                        <h3>Do Tu</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/user-3.png">
                        <h3>Thuy Linh</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!----------------------------------Brands------------------------------------>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        
        <!----------------------------------footer------------------------------------->
        <div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Tải xuống ứng dụng cho điện thoại di động Android và ios.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Mục đích của chúng tôi là làm cho nhiều người có thể tiếp cận niềm vui và lợi ích của thể thao một cách bền vững.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Giới thiệu về chúng tôi</li>
                       <li>Phiếu giảm giá</li>
                       <li>Bài viết trên blog</li>
                       <li>Chính sách đổi trả</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            <p class="copyright">Copyright 2021 - Apurba Kr. Pramanik</p>
            
        </div>
    </div>
        
        
        <!-----------------------------------js for toggle menu----------------------------------------------->
        <script>
            var menuItems=document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight="200px";
                }
                else{
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>
    </body>
</html>
