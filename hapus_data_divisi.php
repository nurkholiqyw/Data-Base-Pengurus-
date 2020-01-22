<?php
// koneksi
require_once('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

// echo $id;
$query="DELETE FROM tb_divisi WHERE kode_divisi = '$kode_divisi' ";
$data=mysqli_query($conn,$query);

// menampung hasil
$row=mysqli_fetch_assoc($data);
// var_dump($row);

header('location: tampil_data_divisi.php')

?>