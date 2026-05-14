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
		<form method="post" enctype="multipart/form-data">
		  <div class="mb-3">
		    <label class="form-label">Tambahkan Produk</label>
		    <input type="text" class="form-control" name="tsp">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Harga Produk</label>
		    <input type="text" class="form-control" name="gsp">
		    
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Deskripsi Produk</label>
		    <input type="text" class="form-control" name="mtsp">
		    
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Gambar Produk</label>
		    <input type="file" class="form-control" name="lha">
		    
		  </div>
		  <div class="mb-3">
		      <label class="form-label">Merk</label>
		      <select class="form-select form-control" aria-label="Default select example" name="idlsp">
				  <option selected>Pilih merk</option>
				  <?php
						foreach ($data as $value) {
						?>
				  <option value="<?php echo $value['id_loaisp'];?>"><?php echo $value['ten_loaisp']; ?></option>
				  <?php } ?>
			  </select>
		   </div>
		  
		  <input type="submit" class="btn btn-lg btn-primary" name="Tambahkan" value="Tambahkan">
		</form>
	</div>
	
</body>
</html>
