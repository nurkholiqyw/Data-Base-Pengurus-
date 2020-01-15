<?php 
//koneksi
require_once('koneksi.php');

//ambil data dari from
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

//memasukan data ke database
$query="UPDATE tb_pengurus SET nama = '$nama', alamat = '$alamat', gender='$gender', gaji='$gaji' WHERE id = '$id'";
$simpan=mysqli_query($conn,$query);

// langsung pindah ke laman tampil data
header('location: tampil_data.php')
// if($simpan) {
// 	echo "Data Berhasil Disimpan";
// }else{
// 	echo "Data Gagal Disimpan";
// }

 ?>

<!-- <a href="tampil_data.php">kembali</a> -->