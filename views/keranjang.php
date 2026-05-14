<?php
// Setel judul halaman
$pageTitle = "Keranjang - Holyshoes";

// header
require_once './utils/header_cart.php';
?>
<?php
// 
$isLoggedIn = isset($_SESSION['tennd']);

// Fungsi membuat kode pesanan acak
function generate_random_order_id()
{
  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $length = 6; // Panjang kode pesanan
  $random_order_id = '';

  for ($i = 0; $i < $length; $i++) {
    $random_order_id .= $characters[rand(0, strlen($characters) - 1)];
  }

  return $random_order_id;
}


if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}

if (!empty($_GET['action']) && !empty($_GET['task'])) {
  function update_cart($add = false)
  {
    foreach ($_POST['quantity'] as $id => $soluong) {
      if ($soluong == 0) {
        unset($_SESSION["cart"][$id]);
      } else {
        if ($add) {
          $_SESSION["cart"][$id] += $soluong;
        } else {
          $_SESSION["cart"][$id] = $soluong;
        }
      }
    }
  }

  switch ($_GET['task']) {
    case 'add':
      update_cart(true);
      header('Location: index.php?action=giohang');
      break;

    case 'delete':
      if (isset($_GET['id'])) {
        unset($_SESSION["cart"][$_GET['id']]);
?>
        <!-- <script language="javascript">alert("Xoá thành công...!");window.location = 'index.php?action=giohang';</script> -->
<?php
      }
      header('Location: index.php?action=giohang');
      break;

    case 'submit':
      if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
        update_cart();
        header('Location: index.php?action=giohang');
      } elseif ($_POST['order_click']) {
        // Đặt hàng sản phẩm
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tennguoinhan'], $_POST['emailnguoinhan'], $_POST['sdtnguoinhan'], $_POST['diachinguoinhan'], $_POST['ghichunguoinhan'])) {
          // Tạo mã đơn hàng ngẫu nhiên
          $ma_don_hang = generate_random_order_id(); // Hàm tạo mã đơn hàng ngẫu nhiên

          // Lưu các giá trị từ form POST vào SESSION dựa trên mã đơn hàng
          $_SESSION[$ma_don_hang]['tennn'] = $_POST['tennguoinhan'];
          $_SESSION[$ma_don_hang]['emailnn'] = $_POST['emailnguoinhan'];
          $_SESSION[$ma_don_hang]['sdtnn'] = $_POST['sdtnguoinhan'];
          $_SESSION[$ma_don_hang]['diachinn'] = $_POST['diachinguoinhan'];
          $_SESSION[$ma_don_hang]['ghichunn'] = $_POST['ghichunguoinhan'];
          $_SESSION[$ma_don_hang]['ghichunn'] = $_POST['ghichunguoinhan'];
          $_SESSION[$ma_don_hang]['tongtien'] = $_POST['totalmoney'];

          // echo $_POST['totalmoney']; exit;

          // Lưu mã đơn hàng vào SESSION
          $_SESSION['ma_don_hang'] = $ma_don_hang;

          // Chuyển hướng đến trang thanhtoan.php
          header('Location: index.php?action=thanhtoan');
        }

      }

      break;
  }
}

/*set gia tri*/
$total_prd = 0;
$temp_money = 0;
$total_money = 0;
$diff_money = 0;
?>


<div class="containerCustom">
  <?php
  require_once './utils/navbar.php'
  ?>
</div>


<div class="px-4 px-lg-0" style="top: 0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center"></div>
  <!-- End -->


  <form action="index.php?action=giohang&task=submit" method="POST">
    <div class="pb-5">
      <div class="container">
        <div class="row" style="margin-bottom: 22px;">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
            <?php
            if (!isset($data_cart)) {
            ?>
              <div style="align-items: center; flex-direction: column;display: flex;">
                <h2 style='align-items: center;'>Belum ada produk di keranjang belanja anda</h2>
                <img src="images/empty-cart.png" width="200" height="200" style="margin-top: 50px; margin-bottom: 50px;" draggable="false">

              </div>
              <!-- <a href="index.php?action=sanpham"><input class="btn btn-dark px-4 rounded-pill" style="float: right; height: 45px; background-color: #ff523b;" type="button" name="back" value="Tiếp tục mua sắm";></a> -->
              <a href="index.php?action=sanpham">
                <input class="btn btn-dark px-4 rounded-pill" style="float: right; height: 45px; background-color: #ff523b;" type="button" name="back" value="Lanjutkan Belanja" ; onmouseover="this.style.backgroundColor='#ff523bb5';" onmouseout="this.style.backgroundColor='#ff523b';">
              </a>

            <?php
            } else { ?>
              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 bg-light table__sp">
                        <div class="p-2 px-3 text-uppercase">Produk</div>
                      </th>
                      <th scope="col" class="border-0 bg-light table__sp">
                        <div class="py-2 text-uppercase">Harga</div>
                      </th>
                      <th scope="col" class="border-0 bg-light table__sp">
                        <div class="py-2 text-uppercase">Jumlah</div>
                      </th>
                      <th scope="col" class="border-0 bg-light table__sp">
                        <div class="py-2 text-uppercase">Total</div>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    // while ($row = mysqli_fetch_array($products)) 
                    if (isset($_SESSION["cart"])) {
                      foreach ($data_cart as $row) {
                        $total_prd = ($row['gia_sp'] * $_SESSION["cart"][$row['id_sp']]);
                    ?>
                        <tr>
                          <th scope="row" class="border-0">
                            <div class="p-2">
                              <a href="index.php?action=giohang&task=delete&id=<?= $row['id_sp'] ?>" class="text-dark" style="position: relative; left: -20px;"><i class="fa fa-trash"></i></a>
                              <img src="<?= $row['hinhanh_sp'] ?>" alt="<?= $row['ten_sp'] ?>" width="70" class="img-fluid rounded shadow-sm">
                              <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle txt_tensp"><?= $row['ten_sp'] ?></a></h5>
                              </div>
                            </div>
                          </th>
                          <td class="border-0 align-middle"><strong>Rp. <?= number_format($row['gia_sp'], 0, ",", ".") ?></strong></td>
                          <td class="border-0 align-middle"><input class="quantity12" min="0" name="quantity[<?= $row['id_sp'] ?>]" value="<?= $_SESSION["cart"][$row['id_sp']] ?>" type="number" size="2" style="width: 80px;text-align:center;"></td>
                          <td class="border-0 align-middle"><strong>Rp. <?= number_format($total_prd, 0, ",", ".") ?></strong></td>
                        </tr>
                    <?php
                        $temp_money += $row['gia_sp'] * $_SESSION["cart"][$row['id_sp']];
                        $total_money = $temp_money + $diff_money;
                      }
                    }
                    ?>
                  </tbody>

                </table>
                <div class="wrapper__btn-has-sp">
                  <a href="index.php?action=sanpham"><input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="button" name="back" value="Lanjutkan Belanja" ;></a>

                  <input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="submit" name="update_click" value="Checkout">
                </div>
              </div>
            <?php } ?>
            <!-- End -->
          </div>
        </div>

        <form method="post">
          <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="<?= empty($isLoggedIn) ? 'margin-bottom: 10px;' : 'margin-bottom: 19px;'; ?>">Rincian Pengiriman</div>
              <div class="p-4">
                <?php if (empty($isLoggedIn)) {
                  echo "<p class='font-italic mb-4'>Apakah anda sudah memiliki akun? <a href='index.php?action=taikhoan' class='btn__has-account'>Gabung</a></p>";
                } ?>
                <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Nama</label> <input type="text" class="form-control form-control-sm" name="tennguoinhan" id="NAME" aria-describedby="helpId" placeholder="Nama" required> </div>
                <div class="row no-gutters">
                  <div class="col-sm-6 pr-sm-2">
                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">E-mail</label> <input type="email" class="form-control form-control-sm" name="emailnguoinhan" id="NAME" aria-describedby="helpId" placeholder="Example@email.com" required> </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Nomor telepon</label> <input type="text" class="form-control form-control-sm" name="sdtnguoinhan" id="NAME" aria-describedby="helpId" required> </div>
                  </div>
                </div>
                <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Alamat</label> <input type="text" class="form-control form-control-sm" name="diachinguoinhan" id="NAME" aria-describedby="helpId" required> </div>
                <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Catatan</label><textarea name="ghichunguoinhan" cols="30" rows="2" class="form-control"></textarea></div>
              </div>
              <!--Hoa Don-->
            </div>
            <div class="col-lg-6" style="<?= empty($isLoggedIn) ? 'top: -24px' : 'top: unset'; ?>">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Detail Invoice </div>
              <div class="p-4">
                <p class="font-weight-bold mb-4">Toko sepatu Holyshoes</p>
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sementara: </strong><strong> Rp. <?= number_format($temp_money, 0, ",", ".") ?></strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Biaya transportasi:</strong><strong>—</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Biaya layanan:</strong><strong> Rp. <?= $diff_money ?></strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total:</strong>
                    <h5 class="font-weight-bold"> Rp. <?= number_format($total_money, 0, ",", ".") ?></h5>
                  </li>
                </ul>
                <div class="wrapper__btn">
                  <input type="hidden" name="totalmoney" value="<?= $total_money ?>">
                  <input class="btn btn-dark px-4 rounded-pill btn__has-sp <?= !isset($data_cart) ? 'disabled-link' : ''; ?>" type="submit" name="order_click" value="Tempatkan pesanan anda dan buka metode pembayaran">
                </div>

              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </form>
</div>
<?php
require_once './utils/footer.php';
?>