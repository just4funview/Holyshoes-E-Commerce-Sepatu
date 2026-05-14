<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" type="text/css" href="./css/style1.css">
  <link rel="stylesheet" type="text/css" href="./css/style2.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./css/bootstrap.bundle.min.js"></script>
  <script src="./css/jquery-3.3.1.slim.min.js"></script>
  <script src="./css/kit.fontawesome.js"></script>
</head>
<body>
  <?php 
   session_start(); 
    //    require_once '../utils/connect_sql.php';
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_sp_mk15";
    $con = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()){
        echo "Connection Fail: ".mysqli_connect_errno();
        exit;
    }else{
        echo 'connected';
    }



    if(!isset($_SESSION["cart"]))
    {
      //Sesi Neu Chua Co ['Cart'] -> Create
      $_SESSION["cart"] = array();
    }

    if(!empty($_GET['action']))
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

      switch ($_GET['action']) 
      {
        case 'add':
          //var_dump($_POST); exit;
                update_cart(true);
                //var_dump(update_cart()); exit();
                header('Location: ./giohang.php');
          //var_dump($_SESSION["cart"]); exit;
          break;

            case 'delete':
                if(isset($_GET['id']))
                {
                    unset($_SESSION["cart"][$_GET['id']]);
                    ?>
                    <script language="javascript">alert("Xoá thành công...!");window.location = './giohang.php';</script>
                <?php
                }
                // header('Location: ./giohang.php');
                break;            

            case 'submit':
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        echo "Đặt hàng";
                        exit;
                    }
                    header('Location: ./giohang.php');
                    break;
      }
    }

    if(!empty($_SESSION["cart"]))
    {
        /*
            array_keys() //chuyển string về int 
            var_dump(array_keys($_SESSION["cart"])); exit();
            implode()//nối các phân tử của mảng lại thành một chuỗi
            implode(",") // ngăn cách bởi dấu ","
        */
        //var_dump(implode(",", array_keys($_SESSION["cart"]))); exit; //get id
        $get_id = implode(",", array_keys($_SESSION["cart"]));

      $sql = "SELECT * FROM `sanpham` WHERE `id_sp` IN (".$get_id.") ";
      $products = mysqli_query($con, $sql);
      /*var_dump($products); exit;*/
    }


    /*set gia tri*/
      $total_prd = 0;
      $temp_money = 0;
      $total_money = 0;
      $diff_money = 0;
  ?>
  <div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center">
      <h1 class="display-4">Giỏ hàng</h1>
      </p>
    </div>
    <!-- End -->

  <form action="giohang.php?action=submit" method="POST">
      <div class="pb-5" style="">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
              <?php
              if(!isset($products))
                {
                  echo "<h2 style='text-align: center;'>Không có sản phẩm nào trong giỏ hàng của bạn.<br><img src='../images/empty-cart.png' width= '200'; height= '200'></h2>";
                  ?><a href="../../../index.php"><input class="btn btn-dark px-4 rounded-pill" style="float: right;" type="button" name="back" value="Tiếp tục mua sắm";></a>
                <?php
                }else
                {
                    // // echo "meow" .$proInfo;
                    // // echo "meow" .$products;
                    // while ($row = mysqli_fetch_assoc($products)) {
                    //     // Xử lý dữ liệu ở đây và in ra theo mong muốn
                    //     echo "Product name: " . $row['ten_sp'] . "<br>";
                    //     echo "Product price: " . $row['gia_sp'] . "<br>";
                    // }
                    ?>
                  <!-- Shopping cart table -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">SẢN PHẨM</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">GIÁ</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">SỐ LƯỢNG</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">THÀNH TIỀN</div>
                          </th>
                        </tr>
                      </thead>
                    
                    <tbody>
                      <?php 
                          //$products = [];
                          //var_dump($products); exit;
                          while ($row = mysqli_fetch_array($products)) 
                          {
                            $total_prd = ($row['gia_sp'] * $_SESSION["cart"][$row['id_sp']]);
                            var_dump($total_money);
                            var_dump($products);
                            echo 'mee';
                            ?>
                            <tr>
                              <th scope="row" class="border-0">
                                <div class="p-2">
                                  <a href="./giohang.php?action=delete&id=<?=$row['id_sp']?>" class="text-dark" style="position: relative; left: -20px;"><i class="fa fa-trash"></i></a>
                                  <img src="../<?=$row['hinhanh_sp']?>" alt="<?=$row['ten_sp']?>" width="70" class="img-fluid rounded shadow-sm">
                                  <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?=$row['ten_sp']?></a></h5>
                                  </div>
                                </div>
                              </th>
                              <td class="border-0 align-middle"><strong><?= number_format($row['gia_sp'], 0, ",", ".") ?> đ</strong></td>
                              <td class="border-0 align-middle"><input class="quantity12" min="0" name="quantity[<?=$row['id_sp']?>]" value="<?=$_SESSION["cart"][$row['id_sp']]?>" type="number" size="2" style="width: 50px;"></td>
                              <td class="border-0 align-middle"><strong><?=number_format($total_prd, 0, ",", ".")?> đ</strong></td>
                            </tr>
                            <?php
                            $temp_money += $row['gia_sp'] * $_SESSION["cart"][$row['id_sp']];
                            $total_money = $temp_money + $diff_money;
                          }
                        ?>
                  </tbody>

                </table>
                <a href="http://localhost/ungdungcongnghe/shoe_store/"><input class="btn btn-dark px-4 rounded-pill" style="float: left;" type="button" name="back" value="Tiếp tục mua sắm";></a>

                <input class="btn btn-dark px-4 rounded-pill" style="float: right; " type="submit" name="update_click" value="Cập nhật giỏ hàng">
              </div>
            <?php }?>
            <!-- End -->
          </div>
        </div>

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông tin giao hàng</div>
            <div class="p-4">
                <?php if (empty($_SESSION['cur_user'])) { 
                    echo "<p class='font-italic mb-4'>Bạn đã có tài khoản? <a href='../../../index.php'>Gabung</a></p>";
                }?>
                  <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Họ và tên</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Họ và Tên"> </div>
                  <div class="row no-gutters">
                      <div class="col-sm-6 pr-sm-2">
                          <div class="form-group"> <label for="NAME" class="small text-muted mb-1">E-mail</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Example@email.com"> </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Số điện thoại</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                      </div>
                  </div>           
                  <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Địa chỉ</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>                
                  <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Ghi chú</label><textarea name="" cols="30" rows="2" class="form-control"></textarea></div>
            </div>
            <!--Hoa Don-->
          </div>
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Chi tiết hóa đơn </div>
            <div class="p-4">
              <p class="font-weight-bold mb-4">Cửa hàng quần áo nam Tuấn Anh</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tạm tính: </strong><strong><?=number_format($temp_money, 0, ",", ".")?> đ</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Phí vận chuyển:</strong><strong>—</strong></li>              
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Phí dịch vụ:</strong><strong><?=$diff_money?> đ</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng cộng:</strong>
                  <h5 class="font-weight-bold"><?=number_format($total_money, 0, ",", ".")?> đ</h5>
                </li>
              </ul><a href="../payment/payment.php" class="btn btn-dark rounded-pill py-2 btn-block">Đặt hàng và đến phương thức thanh toán</a>
            </div>
          </div>
        </div>

       <?php
          echo "<br>";
        //   require '../footer/footer.php'; 
       ?>
      </div>
    </div>
    </form>
  </div>