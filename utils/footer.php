<!----------------------------------footer------------------------------------->
<div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Unduh Aplikasi Kami</h3>
                    <p>Dapatkan aplikasinya di Android dan IOS.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Menyediakan berbagai pilihan sepatu kasual berkualitas tinggi dengan harga terjangkau.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Memperkenalkan</li>
                       <li>Kupon</li>
                       <li>Kunjungi Blog</li>
                       <li>Kebijakan Pengembalian</li>
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
            <p class="copyright">©Holyshoes 2023</p>
            
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

    // seacrh
    const searchIco = document.querySelector('.search-ico');
    const searchCancel = document.querySelector('.search-cancel');
    const searchBar = document.querySelector('.search-bar');

    searchIco.addEventListener('click', () => {
        searchBar.classList.toggle('search-bar-active');
    });

    searchCancel.addEventListener('click', () => {
        searchBar.classList.remove('search-bar-active');
    });

    // const homeThumb = document.getElementById('home__thumb');
    // const searchForm = document.getElementById('search-form');
    // // console.log(homeThumb);
    // console.log('searchForm: ', searchForm);

    // searchForm.addEventListener('submit', () => {
    //     alert('meow');
    //     // console.log(homeThumb);
    // })

    document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.querySelector('#search-form');
    const searchInput = document.querySelector('#search-input');

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu

        const keyword = searchInput.value; // Lấy giá trị từ trường nhập liệu

        // Chuyển hướng đến URL với tham số keyword
        window.location.href = `index.php?action=ketquatimkiem&keyword=${keyword}`;
    });
});



</script>



