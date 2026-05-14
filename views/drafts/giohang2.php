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
<?php
    session_start(); 
    
    // set page title
    $pageTitle = "Giỏ hàng - LeoPard";

    // header
    // require_once './utils/header.php';

    // require_once './utils/connect_sql.php';
    require_once '../utils/connect_sql.php';

    // handle
    if(!isset($_SESSION["cart"]))
    {
      //neu chua co seesion['cart'] -> create
      echo "created _SESSION_cart";
      $_SESSION["cart"] = array();
    }

    if(!empty($_GET['action']))
    {
        function update_cart($add = false)
        {
            foreach ($_GET['quantity'] as $id => $soluong) 
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
                // var_dump($_POST); exit;
                update_cart(true);
                //var_dump(update_cart()); exit();
                header('Location: ./giohang.php');
                //var_dump($_SESSION["cart"]); exit;
                break;

            case 'delete':
                if(isset($_GET['id_sp']))
                {
                    unset($_SESSION["cart"][$_GET['id_sp']]);
                    ?>
                    <!--
                    <script language="javascript">alert("Xoá thành công...!");window.location = './cart.php';</script> -->
                <?php
                }
                header('Location: ./cart.php');
                break;            

            case 'submit':
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        echo "Đặt hàng";
                        exit;
                    }
                    header('Location: ./cart.php');
                    break;
            
            default:
                echo "action is: {$_GET['action']}";

      }
    }

    if(!empty($_SESSION["cart"]))
    {

        // 
        if(isset($_GET['id_sp'])){
            echo 'meow';
            echo $_GET['id_sp'];
            unset($_SESSION["cart"][$_GET['id_sp']]);
            echo 'removed';
        }else{
            if (isset($_GET['action'])) {
                echo "action is: " . $_GET['action'];
            } else {
                echo "action is not set.";
            }
        }
        // 

        /*
            array_keys() //chuyển string về int 
            var_dump(array_keys($_SESSION["cart"])); exit();
            implode()//nối các phân tử của mảng lại thành một chuỗi
            implode(",") // ngăn cách bởi dấu ","
        */
        //var_dump(implode(",", array_keys($_SESSION["cart"]))); exit; //get id
        $get_id = implode(",", array_keys($_SESSION["cart"]));
        echo "id= " . $get_id; 

    //   $sql = "SELECT * FROM `sanpham` WHERE `id_sp` IN (".$get_id.") ";
    //   $sql = "SELECT * FROM `sanpham` WHERE `id_sp` = 5";
    //   $products = mysqli_query($con, $sql);
    // //   var_dump($products); exit;
    //     while($row = mysqli_fetch_array($products))
    //     {
    //         var_dump($row);
    //     } 
    //      exit;
    }else{
        echo ('dont have 2');
        echo "action is: {$_GET['action']}";
    }

        if (isset($_GET['action'])) {
            echo "action is: " . $_GET['action'];
            // Xử lý tương ứng với action
            if ($_GET['action'] === 'add') {
                if (!empty($_POST['quantity'])) {
                    update_cart(true);
                    echo 'here1';
                    // exit;
                }
            }
        } else {
            echo "action is not set.";
        }
    

    /*set gia tri*/
      $total_prd = 0;
      $temp_money = 0;
      $total_money = 0;
      $diff_money = 0;
  ?>

<body>
<div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center">
      <h1 class="display-4">Giỏ hàng</h1>
      </p>
    </div>
    <!-- End -->

  <form action="cart.php?action=submit" method="POST">
      <div class="pb-5" style="">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
              <?php
              if(!isset($products))
                {
                  echo "<h2 style='text-align: center;'>Không có sản phẩm nào trong giỏ hàng của bạn.<br><img src='../../../img/icon/empty-cart.png' width= '200'; height= '200'></h2>";
                  ?><a href="http://localhost/ungdungcongnghe/shoe_store"><input class="btn btn-dark px-4 rounded-pill" style="float: right;" type="button" name="back" value="Tiếp tục mua sắm";></a>
                <?php
                }else
                {?>
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
                            $total_prd = ($row['price'] * $_SESSION["cart"][$row['id_sp']]);
                            //var_dump($total_money);
                            //var_dump($products);
                            ?>
                            <tr>
                              <th scope="row" class="border-0">
                                <div class="p-2">
                                  <a href="./cart.php?action=delete&id=<?=$row['id_sp']?>" class="text-dark" style="position: relative; left: -20px;"><i class="fa fa-trash"></i></a>
                                  <img src="../../../<?=$row['image']?>" alt="<?=$row['name']?>" width="70" class="img-fluid rounded shadow-sm">
                                  <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?=$row['name']?></a></h5>
                                  </div>
                                </div>
                              </th>
                              <td class="border-0 align-middle"><strong><?= number_format($row['price'], 0, ",", ".") ?> đ</strong></td>
                              <td class="border-0 align-middle"><input class="quantity12" min="0" name="quantity[<?=$row['id_sp']?>]" value="<?=$_SESSION["cart"][$row['id_sp']]?>" type="number" size="2" style="width: 50px;"></td>
                              <td class="border-0 align-middle"><strong><?=number_format($total_prd, 0, ",", ".")?> đ</strong></td>
                            </tr>
                            <?php
                            $temp_money += $row['price'] * $_SESSION["cart"][$row['id_sp']];
                            $total_money = $temp_money + $diff_money;
                          }
                        ?>
                  </tbody>

                </table>
                <a href="../../../index.php"><input class="btn btn-dark px-4 rounded-pill" style="float: left;" type="button" name="back" value="Tiếp tục mua sắm";></a>

                <input class="btn btn-dark px-4 rounded-pill" style="float: right; " type="submit" name="update_click" value="Cập nhật giỏ hàng">
              </div>
            <?php }?>
            <!-- End -->
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