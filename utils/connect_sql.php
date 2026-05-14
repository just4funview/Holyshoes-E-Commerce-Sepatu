<?php
 include ('connect_db.php');
 if(isset($_GET['id'])){
		$prodId = $_GET['id'];
		$sqlSelector = "select * from produk where id_sp = $prodId";

		// echo $sqlSelector;
		$rs = mysqli_query($con, $sqlSelector);

		$proInfo = mysqli_fetch_assoc($rs);
 }else{
	echo 'not connect';
 }

?>