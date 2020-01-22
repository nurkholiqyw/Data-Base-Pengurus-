<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/style.css" >
 <!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

</body>
</html>
<?php
// koneksi
require_once('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

// echo $id;
$query="SELECT * FROM tb_divisi WHERE kode_divisi = '$kode_divisi'";
$data=mysqli_query($conn,$query);

// menampung hasil
$row=mysqli_fetch_assoc($data);
// var_dump($row);

?>
<form method="post" action="ubah_data_divisi.php">
  <contact class="contact" id="pendaftaran">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="input"><font color="white">Ubah Data</font></h2>
             <hr>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-8 offset-2">
            <form>
              <div class="form-group">
                <label for="nama"><font color="white">Kode</font></label>
                <input type="text" name="kode_divisi" class="form-control" placeholder="" required="required" value="<?php echo $row['kode_divisi'];  ?>">
              </div>
              <div class="form-group">
                <label for="email"><font color="white">Nama Divisi</font></label>
                <input type="text" name="nama_divisi" class="form-control" placeholder="" required="required" value="<?php echo $row['nama_divisi'];  ?>">
              </div>
              <div class="form-group">
                <label for="telp"><font color="white">Tunjangan</font></label>
               <input type="text" name="tunjangan" class="form-control" placeholder="" required="required" value="<?php echo $row['tunjangan'];  ?>">
              </div>
              <div class="form-group">

                <label for="pesan"><font color="white">ID Pengurus</font></label>
              <select class="form-control" name="id">
                <?php 
                $query_pengurus="SELECT * FROM tb_pengurus";//bahasa sql
                $data_pengurus=mysqli_query($conn,$query_pengurus);
                
                while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
                 ?>
                <option value="<?php echo $row_pengurus['id'] ?>"><?php echo $row_pengurus['nama']; ?></option>
                <?php
                   } 
                ?>
              </select>
              </div>
              
             <p>
              <button type="submit" class="btn btn-primary"><i class="material-icons">swap_horiz</i>Ubah</button>
              <button type="submit" method="post" action="tampil_data.php" class="btn btn-danger"><i class="material-icons">clear</i>Batal</button>
            </p>
            


            </form>
          </div>  
        </div>
      </div>
    </contact>
</form>