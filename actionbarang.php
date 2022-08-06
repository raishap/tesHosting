<?php 
include'function.php';

	$idbarang=$_POST['idbarang'];
	$namabarang=$_POST['namabarang'];
	$deskripsi=$_POST['deskripsi'];
	$stock=$_POST['stock'];
mysqli_query($conn,"INSERT INTO stok VALUES('$idbarang','$namabarang','$deskripsi','$stock')");
header("location:viewbarang.php");
 ?>