<?php
// koneksi
require_once('koneksi.php');

$id=$_GET['id'];

// echo $id;
$query="DELETE FROM tb_pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);

// menampung hasil
$row=mysqli_fetch_assoc($data);
// var_dump($row);

header('location: tampil_data.php')

?>