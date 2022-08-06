<?php 
include'function.php';

	$idbarang=$_POST['idbarang'];
	$namabarang=$_POST['namabarang'];
	$deskripsi=$_POST['deskripsi'];
	$stock=$_POST['stock'];
mysqli_query($conn,"UPDATE stok SET  namabarang='$namabarang', deskripsi='$deskripsi', stock='$stock' where idbarang='$idbarang'");
header("location:viewbarang.php");
 ?>