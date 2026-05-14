<?php
    // set page title
    $pageTitle = "Administrasi - Holyshoes";

    // header
    // require_once './utils/header.php';

	if (isset($_POST['nutdx'])) {
		session_unset();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kelola Produk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylecss.css">
    <link rel="stylesheet" href="public/css/customStyle.css" />
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid row">
	    <a class="navbar-brand col-4" href="./">Holyshoes</a>
	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">home</a>
	        </li>
	        <li class="nav-item">

	          

	          <?php
					if (isset($_SESSION['tennd'])) {
						if ($_SESSION['quyennd']==1) {
							?>
							<li><a class="nav-link active" aria-current="page" href="index.php?action=quantri">Kelola produk</a></li>
							<a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Keluar"></form>
							</li>
							
							<?php
						}
						else{
							?>
							<a class="nav-link active" aria-current="page" href="#"> <?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Keluar"></form></li>

							<?php

						}
					
					
					}else {
						?>
							<a class="nav-link" href="index.php?action=taikhoan">Gabung</a>
						<?php
					} ?>





	        </li>
	      </ul>
	      
	    </div>
	  </div>
	</nav>

	  <div class="row">
	    <div class="col-2">

	    	<nav class="nav flex-column">
	    		<?php
						foreach ($data as $value) {
						?>
							<a class="nav-link" href="index.php?action=quantri&idloai=<?php echo $value['id_loaisp'] ?>">

								<?php echo $value['ten_loaisp'];
								?>
							</a>
							
						<?php
						}
						?>
			  			<a href="index.php?action=themsanpham" class="nav-link btn__themsp btn--primary">Tambahkan produk</a>
			</nav>
	    </div>
	    <div class="col-10">
	    	<table class="table table-striped">
	  			<thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Gambar</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Tanggal ditambahkan</th>
				      <th scope="col">Jenis</th>
				      <th scope="col">Deskripsi produk</th>
				      <th scope="col">Opsi</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$stt=1;
						if (isset($_GET['idloai'])) {
							if($data2==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data2 as $value) {
										
									?>
									<tr>
								      <th scope="row"><?php echo $stt++; ?></th>
								      <td><?php echo $value['ten_sp'];?></td>
								      <td><img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="..."></td>
								      <td><?php echo $value['gia_sp'];?></td>
								      <td><?php echo $value['ngaynhap_sp'];?></td>
								      <td><?php echo $value['ten_loaisp'];?></td>
								      <td><?php echo $value['mota_sp'];?></td>
								      <td><a href="#">Ubah</a>/<a href="#">Hapus</a></td>
								    </tr>
									
									<?php
									}
								}
						}
						else{
							if($data1==0){
									echo "Đang cập nhật";
								}else{
									
								
									foreach ($data1 as $value) {

									?>
										<tr>
									      <th scope="row"><?php echo $stt++; ?></th>
									      <td><?php echo $value['ten_sp'];?></td>
									      <td><img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="..."></td>
									      <td><?php echo $value['gia_sp'];?></td>
									      
									      <td><?php echo $value['ngaynhap_sp'];?></td>
									      <td><?php echo $value['ten_loaisp'];?></td>
									      <td><?php echo $value['mota_sp'];?></td>
									      
									      <td>
											<a href="index.php?action=sua&id_sua=<?php echo $value['id_sp'];?>">Ubah</a>/<a href="index.php?action=xoasanpham&id_xoa=<?php echo $value['id_sp']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a></td>
									    </tr>
									<?php
									}
								}
						}
					?>
				    
				  </tbody>
			</table>
	    	

	    	
	    </div>
	  </div>
	  
	</div>
</body>
</html>