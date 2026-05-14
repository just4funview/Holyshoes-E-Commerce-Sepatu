<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Giao diện</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylecss.css">
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid row">
	    <a class="navbar-brand col-4" href="#">Mạng K17</a>
	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item">

	          

	          <?php
					if (isset($_SESSION['tennd'])) {
						if ($_SESSION['quyennd']==1) {
							?>
							<li><a class="nav-link active" aria-current="page" href="index.php?action=quantri">Quản trị</a></li>
							<a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form>
							</li>
							
							<?php
						}
						else{
							?>
							<a class="nav-link active" aria-current="page" href="#"> <?php echo $_SESSION['tennd']; ?> 
							</a>
							<li><form method="post"><input type="submit" name="nutdx" value="Đăng xuất"></form></li>

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
							<a class="nav-link" href="index.php?idloai=<?php echo $value['id_loaisp'] ?>">

								<?php echo $value['ten_loaisp'];
								?>
							</a>
							</option>
						<?php
						}
						?>
			  
			</nav>
	    </div>
	    <div class="col-10">
	    	<div class="row khoangcach">
	    		
	    			<?php
						if (isset($_GET['idloai'])) {
							if($data2==0){
									echo "Đang cập nhật";
								}else{
									foreach ($data2 as $value) {
										
									?><div class="col-3"> <div class="card" style="width: 13rem;">
											  <img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="...">
											  <div class="card-body">
											    <h5 class="card-title"><?php echo $value['ten_sp'];?></h5>
											    <p class="card-text"><?php echo $value['gia_sp'];?></p>
											    <a href="#" class="btn btn-primary">Mua hàng</a>
											  </div>
											</div>
										</div>
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
										<div class="col-3">
									    	<div class="card" style="width: 13rem;">
											  <img src="<?php echo $value['hinhanh_sp'];?>" class="card-img-top" alt="...">
											  <div class="card-body">
											    <h5 class="card-title"><?php echo $value['ten_sp'];?></h5>
											    <p class="card-text"><?php echo $value['gia_sp'];?></p>
											    <a href="#" class="btn btn-primary">Mua hàng</a>
											  </div>
											</div>
										</div>
									<?php
									}
								}
						}
					?>

						
	    		
		    	
			</div>

	    	
	    </div>
	  </div>
	  
	</div>
</body>
</html>