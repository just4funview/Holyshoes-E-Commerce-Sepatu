<!DOCTYPE html>
<html>
<head>
	<title>Tambahkan Produk</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Tambahkan Produk</h5>
		    
		  </div>
		</div>
		<form method="post">
		  <div class="mb-3">
		    <label class="form-label">Nama Produk</label>
		    <input type="text" class="form-control" name="tsp" value="<?php echo $data2[0]['ten_sp'];?>">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Harga Produk</label>
		    <input type="text" class="form-control" name="gsp" value="<?php echo $data2[0]['gia_sp'];?>">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Deskripsi Produk</label>
		    <input type="text" class="form-control" name="mtsp" value="<?php echo $data2[0]['mota_sp'];?>">
		    
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Gambar Produk</label>
		    <img src="<?php echo $data2[0]['hinhanh_sp'];?>">
		    <input type="file" class="form-control" name="lha">
		    
		  </div>
		  <div class="mb-3">
		      <label class="form-label">Merk</label>
		      <select class="form-select form-control" aria-label="Default select example" name="idlsp">
				  <?php
						foreach ($data as $value) {
							if ($value['id_loaisp']==$data2[0]['id_loaisp']) {
					?>
							<option selected="selected" value="<?php echo $value['id_loaisp'];?>"><?php echo $value['ten_loaisp']; ?></option>
						<?php			
							}else{
						?>
				  			<option value="<?php echo $value['id_loaisp'];?>"><?php echo $value['ten_loaisp']; ?></option>
				  <?php }} ?>
			  </select>
		   </div>
		  
		  <input type="submit" class="btn btn-lg btn-primary" name="sua" value="Tambahkan">
		</form>
	</div>
	
</body>
</html>