<?php
    // set page title
    $pageTitle = "Login - Holyshoes";

    // header
    require_once './utils/header.php';
?>
<body>
    <div class="container">
        <?php 
            require_once './utils/navbar.php'; 
        ?>
    </div>
    
    <!------------------------------ account-page details------------------------------>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/user.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" method="post" action="index.php?action=taikhoan">
                            <input type="text" placeholder="username" name="tdn" required maxlength="10">
                            <input type="password" placeholder="password" name="mk" required maxlength="32">
                            <button type="submit" class="btn" name="nutdangnhap">Login</button>
                            <a href="">Lupa Sandi?</a>
                        </form>
                        
                        <form id="RegForm" method="post" action="index.php?action=register">
                            <input type="text" placeholder="username" name="tendk" required maxlength="10">
                            <input type="email" placeholder="example@email.com" name="emaildk" required maxlength="32">
                            <input type="password" placeholder="password" name="mkdk" required maxlength="32">
                            <button type="submit" class="btn" name="nutdangky">Buat Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <?php require_once './utils/footer.php'; ?>
    
    <!-----------------------------------js for toggle menu-------------------------------------->
    <script>
        "use strict"
        var menuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        
        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>
</body>
</html>
