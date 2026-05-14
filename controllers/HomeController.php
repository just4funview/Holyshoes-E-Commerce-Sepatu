<?php
session_start();
require_once 'models/BaseModel.php';

class SanphamController
{
    public $model;

    function __construct()
    {
        $this->model = new BaseModel();
    }

    public function dieuhuong(){
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'taikhoan':
                    $this->handleAccountPage();
                    break;

                case 'sanpham':
                    $this->handleProductsPage();
                    break;

                case 'gioithieu':
                    $this->handleIntroductionPage();
                    break;

                case 'lienhe':
                    $this->handleContactPage();
                    break;

                case 'ketquatimkiem':
                    $this->handleSearchResultsPage();
                    break;

                case 'chitietsanpham':
                    $this->handleProductDetailPage();
                    break;

                case 'giohang':
                    $this->handleCartPage();
                    break;

                case 'thanhtoan':
                    $this->handlePaymentPage();
                    break;
                
                case 'themsanpham':
                    $this->handleAddProductPage();
                    break;

                case 'quantri':
                    $this->handleAdminPage();
                    break;
                
                case 'sua':
                    $this->handleEditProductPage();
                    break;

                case 'xoasanpham':
                    $this->handleDeleteProduct();
                    break;

                case 'register': // tambahkan case untuk aksi register
                    $this->handleRegister();
                    break;

                default:
                    include_once('views/404pages.php');
                    break;
            }
        } else {
            $this->handleHomePage();
        }
    }

    private function handleAccountPage() {
        include_once('views/akun.php');
        
        if (isset($_POST['nutdangnhap'])) {
            $t = $_POST['tdn'];
            $m = $_POST['mk'];
            $dem1 = $this->model->dembanghi($t, $m);
            $data2 = $this->model->kiemtradangnhap($t, $m);
            
            if ($dem1 == 0) {
                echo "<script>alert('Gagal login. \nAkun atau kata sandi salah, silakan coba lagi.')</script>";
            } else {
                $_SESSION['tennd'] = $t;
                $_SESSION['quyennd'] = $data2[0]['quyen_nd'];
                echo "<script>location.href = 'index.php';</script>";
            }
        }
    }

    private function handleRegister() {
        if (isset($_POST['nutdangky'])) {
            $tendk = $_POST['tendk'];
            $mkdk = $_POST['mkdk'];

            $this->model->dangky($tendk, $mkdk);

            // setelah register berhasil, arahkan kembali ke halaman yang sesuai atau tampilkan pesan sukses
            $data2 = $this->model->kiemtradangnhap($tendk, $mkdk);

            $_SESSION['tennd'] = $tendk;
            $_SESSION['quyennd'] = $data2[0]['quyen_nd'];
            echo "<script>alert('Akun Berhasil Dibuat!');location.href = 'index.php';</script>";
        }
    }

    private function handleProductsPage() {
        $data = $this->model->layJenisProduk();
        $data1 = $this->model->laysanpham();
        if (isset($_GET['idloai'])) {
            $data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
        }
        include_once('views/produk.php');
    }

    private function handleIntroductionPage() {
        $spnn = $this->model->laysanphamngaunhien(4);
        include_once('views/pengantar.php');
    }

    private function handleContactPage() {
        $spnn = $this->model->laysanphamngaunhien(8);
        include_once('views/kontak.php');
    }

    private function handleSearchResultsPage() {
        $spnn = $this->model->laysanphamngaunhien(8);
        $data_cart = [];
    
        if (!empty($_GET["keyword"])) {
            $kw = $_GET['keyword'];
            $data_cart = $this->model->timkiemsp($kw);
        }
    
        include_once('views/hasil_pencarian.php');
    }

    private function handleProductDetailPage() {
        $data = $this->model->layJenisProduk();
        $data1 = $this->model->laysanpham();
        $spnn = $this->model->laysanphamngaunhien(8);

        if (isset($_GET['idloai'])) {
            $data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
        }
        include_once('views/detail_produk.php');
    }

    private function handleCartPage() {
        if (!empty($_SESSION["cart"])) {
            $id_cart = $_SESSION["cart"];
            $data_cart = $this->model->laysanphamtheoidList(array_keys($id_cart));
        }

        include_once('views/keranjang.php');
    }

    private function handlePaymentPage() {
        include_once('views/pembayaran.php');
    }
    
	private function handleAddProductPage() {
		$data = $this->model->layJenisProduk();
		$data1 = $this->model->laysanpham();
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Tambahkan'])) {
			// Handle form submission
			$t = $_POST['tsp'];
			$g = $_POST['gsp'];
			$m = $_POST['mtsp'];
			$li = $_POST['idlsp'];
			$n = date('Y-m-d');
	
			// Set path to store uploads
			$uploadDir = 'anh/'; // Path to store uploads
			
			// Handle file upload
			$uploadFile = $uploadDir . basename($_FILES['lha']['name']);
	
			if (move_uploaded_file($_FILES['lha']['tmp_name'], $uploadFile)) {
				// File uploaded successfully
				$l = $uploadFile;
			} else {
				// Handle error if file upload failed
				echo "File upload failed!";
				return;
			}
	
			// Call model method to add product
			$this->model->themsanpham($t, $l, $g, $n, $li, $m);
			
			// Redirect after successful addition
			header('Location: index.php?action=quantri');
			exit; // Ensure script stops here
		}
	
		// Load the view
		include_once('views/them.php');
	}
	
    private function handleAdminPage() {
        $data = $this->model->layJenisProduk();
        $data1 = $this->model->laysanpham();
        if (isset($_GET['idloai'])) {
            $data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
        }
        include_once('views/admin.php');
    }
    
    private function handleEditProductPage() {
        $data = $this->model->layJenisProduk();
        $data1 = $this->model->laysanpham();
        
        if (isset($_GET['id_sua'])) {
            $data2 = $this->model->laysanpham_id($_GET['id_sua']);
            include_once('views/edit.php');
            if (isset($_POST['sua'])) {
                $t = $_POST['tsp'];
                if ($_POST['lha'] == "") {
                    $l = $data2[0]['hinhanh_sp'];
                } else {
                    $l = "anh/".$_POST['lha'];
                }
                                                                            
                $g = $_POST['gsp'];
                $m = $_POST['mtsp'];
                $li = $_POST['idlsp'];
                $n = date('Y-m-d');
                $this->model->suasanpham($_GET['id_sua'], $t, $l, $g, $n, $li, $m);
                header('Location:index.php?action=quantri');
            }
        }
    }

    private function handleDeleteProduct() {
        if (isset($_GET['id_xoa'])) {
            $id_xoa = $_GET['id_xoa'];
            $this->model->xoasanpham($id_xoa);
            header('Location: index.php?action=quantri');
        }
    }

    private function handleHomePage() {
        $data = $this->model->layJenisProduk();
        $data1 = $this->model->laysanpham();

        $spnoibat = $this->model->laysanphamnoibat();
        $spmoinhat = $this->model->laysanphammoinhat();

        if (isset($_GET['idloai'])) {
            $data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
        }
        
        include_once('views/home.php');
    }
}
?>
