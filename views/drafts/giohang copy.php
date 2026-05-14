<?php
    // set page title
    $pageTitle = "Giỏ hàng - LeoPard";

    // header
    require_once './utils/header_cart.php';
?>
  <?php 
    // 
    $isLoggedIn = isset($_SESSION['tennd']);


    if(!isset($_SESSION["cart"]))
    {
      $_SESSION["cart"] = array();
    }

    if(!empty($_GET['action']) && !empty($_GET['task']))
    {
        function update_cart($add = false)
        {
            foreach ($_POST['quantity'] as $id => $soluong) 
            {
                if($soluong == 0)
                {
                    unset($_SESSION["cart"][$id]);
                }else
                {
                    if($add)
                    {
                        $_SESSION["cart"][$id] += $soluong;
                    }else
                    {
                        $_SESSION["cart"][$id] = $soluong;
                    }
                }
            }
        }

      switch ($_GET['task']) 
      {
            case 'add':
                  update_cart(true);
                  header('Location: index.php?action=giohang');
            break;

            case 'delete':
                if(isset($_GET['id']))
                {
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
                        //Đặt hàng sản phẩm
                        
                        // Kiểm tra nếu có dữ liệu POST từ form
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tennguoinhan'], $_POST['emailnguoinhan'], $_POST['sdtnguoinhan'], $_POST['diachinguoinhan'], $_POST['ghichunguoinhan'])) {
                          // Lấy các giá trị từ form POST và lưu vào SESSION
                          $_SESSION['tennn'] = $_POST['tennguoinhan'];
                          $_SESSION['emailnn'] = $_POST['emailnguoinhan'];
                          $_SESSION['sdtnn'] = $_POST['sdtnguoinhan'];
                          $_SESSION['diachinn'] = $_POST['diachinguoinhan'];
                          $_SESSION['ghichunn'] = $_POST['ghichunguoinhan'];

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
              if(!isset($data_cart))
                {
                  ?>
                    <div style="align-items: center; flex-direction: column;display: flex;">
                        <h2 style='align-items: center;'>Không có sản phẩm nào trong giỏ hàng của bạn</h2>
                        <img src="images/empty-cart.png" width="200" height="200" style="margin-top: 50px; margin-bottom: 50px;" draggable="false">

                    </div>
                  <!-- <a href="index.php?action=sanpham"><input class="btn btn-dark px-4 rounded-pill" style="float: right; height: 45px; background-color: #ff523b;" type="button" name="back" value="Tiếp tục mua sắm";></a> -->
                  <a href="index.php?action=sanpham">
                      <input class="btn btn-dark px-4 rounded-pill" style="float: right; height: 45px; background-color: #ff523b;" type="button" name="back" value="Tiếp tục mua sắm"; onmouseover="this.style.backgroundColor='#ff523bb5';" onmouseout="this.style.backgroundColor='#ff523b';">
                  </a>

                <?php
                }else
                {?>
                  <!-- Shopping cart table -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 bg-light table__sp">
                            <div class="p-2 px-3 text-uppercase">SẢN PHẨM</div>
                          </th>
                          <th scope="col" class="border-0 bg-light table__sp">
                            <div class="py-2 text-uppercase">GIÁ</div>
                          </th>
                          <th scope="col" class="border-0 bg-light table__sp">
                            <div class="py-2 text-uppercase">SỐ LƯỢNG</div>
                          </th>
                          <th scope="col" class="border-0 bg-light table__sp">
                            <div class="py-2 text-uppercase">THÀNH TIỀN</div>
                          </th>
                        </tr>
                      </thead>
                    
                    <tbody>
                      <?php 
                          // while ($row = mysqli_fetch_array($products)) 
                         if(isset($_SESSION["cart"])){
                          foreach ($data_cart as $row)
                          {
                            $total_prd = ($row['gia_sp'] * $_SESSION["cart"][$row['id_sp']]);
                            ?>
                            <tr>
                              <th scope="row" class="border-0">
                                <div class="p-2">
                                  <a href="index.php?action=giohang&task=delete&id=<?=$row['id_sp']?>" class="text-dark" style="position: relative; left: -20px;"><i class="fa fa-trash"></i></a>
                                  <img src="<?=$row['hinhanh_sp']?>" alt="<?=$row['ten_sp']?>" width="70" class="img-fluid rounded shadow-sm">
                                  <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle txt_tensp"><?=$row['ten_sp']?></a></h5>
                                  </div>
                                </div>
                              </th>
                              <td class="border-0 align-middle"><strong><?= number_format($row['gia_sp'], 0, ",", ".") ?> đ</strong></td>
                              <td class="border-0 align-middle"><input class="quantity12" min="0" name="quantity[<?=$row['id_sp']?>]" value="<?=$_SESSION["cart"][$row['id_sp']]?>" type="number" size="2" style="width: 80px;text-align:center;"></td>
                              <td class="border-0 align-middle"><strong><?=number_format($total_prd, 0, ",", ".")?> đ</strong></td>
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
                  <a href="index.php?action=sanpham"><input class="btn btn-dark px-4 rounded-pill btn__has-sp"  type="button" name="back" value="Tiếp tục mua sắm";></a>
  
                  <input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="submit" name="update_click" value="Cập nhật giỏ hàng">
                </div>
              </div>
            <?php }?>
            <!-- End -->
          </div>
        </div>

        <form method="post">
          <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold" style="<?= empty($isLoggedIn) ? 'margin-bottom: 10px;' : 'margin-bottom: 19px;'; ?>">Thông tin giao hàng</div>
              <div class="p-4">
                  <?php if (empty($isLoggedIn)) { 
                      echo "<p class='font-italic mb-4'>Bạn đã có tài khoản? <a href='index.php?action=taikhoan' class='btn__has-account'>Đăng nhập</a></p>";
                  }?>
                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Họ và tên</label> <input type="text" class="form-control form-control-sm" name="tennguoinhan" id="NAME" aria-describedby="helpId" placeholder="Họ và Tên" required value="Minh Duc"> </div>
                    <div class="row no-gutters">
                        <div class="col-sm-6 pr-sm-2">
                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">E-mail</label> <input type="text" class="form-control form-control-sm" name="emailnguoinhan" id="NAME" aria-describedby="helpId" placeholder="Example@email.com" required value="minhduc@mail.com"> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Số điện thoại</label> <input type="text" class="form-control form-control-sm" name="sdtnguoinhan" id="NAME" aria-describedby="helpId" required value="0964 103 861"> </div>
                        </div>
                    </div>           
                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Địa chỉ</label> <input type="text" class="form-control form-control-sm" name="diachinguoinhan" id="NAME" aria-describedby="helpId" required value="Cao ky - Cho Moi - Bac Kan"> </div>                
                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Ghi chú</label><textarea name="ghichunguoinhan" cols="30" rows="2" class="form-control"></textarea></div>
              </div>
              <!--Hoa Don-->
            </div>
            <div class="col-lg-6" style="<?= empty($isLoggedIn) ? 'top: -24px' : 'top: unset'; ?>">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Chi tiết hóa đơn </div>
              <div class="p-4">
                <p class="font-weight-bold mb-4">Cửa hàng giầy LeoPard</p>
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tạm tính: </strong><strong><?=number_format($temp_money, 0, ",", ".")?> đ</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Phí vận chuyển:</strong><strong>—</strong></li>              
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Phí dịch vụ:</strong><strong><?=$diff_money?> đ</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng cộng:</strong>
                    <h5 class="font-weight-bold"><?=number_format($total_money, 0, ",", ".")?> đ</h5>
                  </li>
                </ul>
                <!-- <div class="wrapper__btn">
                  <a href="index.php?action=thanhtoan" class="btn btn-dark rounded-pill py-2 btn-block btn__has-sp">Đặt hàng và đến phương thức thanh toán</a>
                </div> -->
                <div class="wrapper__btn">
                  <input class="btn btn-dark px-4 rounded-pill btn__has-sp" type="submit" name="order_click" value="Đặt hàng và đến phương thức thanh toán">
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