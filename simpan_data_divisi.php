<?php 
//koneksi
require_once('koneksi.php');

//ambil data dari from
$kode_divisi=$_POST['kode_divisi'];
$nama_divisi=$_POST['nama_divisi'];
$tunjangan=$_POST['tunjangan'];
$nama=$_POST['id'];

//memasukan data ke database
$query="INSERT INTO tb_divisi VALUES ('$kode_divisi','$nama_divisi','$tunjangan','$nama')";
$simpan=mysqli_query($conn,$query);

header('location: tampil_data_divisi.php')
// if($simpan) {
// 	echo "Data Berhasil Disimpan";
// }else{
// 	echo "Data Gagal Disimpan";
// }

 ?>

<!-- <a href="tampil_data.php">kembali</a> -->