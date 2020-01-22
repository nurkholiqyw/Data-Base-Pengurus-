<?php 
//koneksi
require_once('koneksi.php');

//ambil data dari from
$kode_divisi=$_POST['kode_divisi'];
$nama_divisi=$_POST['nama_divisi'];
$tunjangan=$_POST['tunjangan'];
$id=$_POST['id'];

//memasukan data ke database
$query="UPDATE tb_divisi SET kode_divisi = '$kode_divisi', nama_divisi = '$nama_divisi', tunjangan='$tunjangan', id='$id' WHERE kode_divisi = '$kode_divisi'";
$simpan=mysqli_query($conn,$query);

// langsung pindah ke laman tampil data
header('location: tampil_data_divisi.php')
// if($simpan) {
// 	echo "Data Berhasil Disimpan";
// }else{
// 	echo "Data Gagal Disimpan";
// }

 ?>

<!-- <a href="tampil_data.php">kembali</a> -->