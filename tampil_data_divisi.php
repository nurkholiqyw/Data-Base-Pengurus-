<?php
require_once('koneksi.php'); //untuk menghemat memory
//include('koneksi.php'); //program terus berjalan atau boros memory

//ambil data dari database
$query="SELECT tb_divisi.kode_divisi, tb_divisi.nama_divisi, tb_divisi.tunjangan, tb_pengurus.nama FROM tb_divisi, tb_pengurus WHERE tb_divisi.id=tb_pengurus.id";//bahasa sql
$data=mysqli_query($conn,$query);

// var_dump($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Divisi</title>
<!-- untuk font awesome -->

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
<!-- untuk font awesome -->

<!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/style.css" >
</head>
<body>

<h1 align="center" class="data"><font color="blue">Data Divisi</font></h1>
<table class="table" id="table">
	<thead class="thead">
	<tr>
		<th scope="col">Kode</th>
		<th scope="col">Divisi</th>
		<th scope="col">Tunjangan</th>
		<th scope="col">Nama</th>
    <th scope="col">Aksi</th>
	</tr>
	</thead>
<?php
while ($row=mysqli_fetch_assoc($data)) {
	
?>
	<tr>
		<td><?php echo $row['kode_divisi'];  ?></td>
		<td><?php echo $row['nama_divisi'];  ?></td>
		<td><?php echo $row['tunjangan'];  ?></td>
		<td><?php echo $row['nama'];  ?></td>
    <td>
        <a href="edit_data_divisi.php?kode_divisi=<?php echo $row['kode_divisi']; ?>"><i class="fas fa-pencil-alt"><i class="material-icons">code</i>Edit</a> |
        <a href="hapus_data_divisi.php?kode_divisi=<?php echo $row['kode_divisi']  ?>" onclick="return confirm('Are You Seriously ?')"><i class="fas fa-times-circle"><i class="material-icons">clear</i>Delete</a>
    </td>
	</tr>
<?php
} 
?>
</table>



<hr>
<form method="post" action="simpan_data_divisi.php">
	<contact class="contact" id="pendaftaran">
      	<div class="container">
        <div class="row">
          	<div class="col-sm-12 text-center">
            	<h2 class="input" align="center"><font color="white">Input Data</font></h2>
           	 
          	</div>
        </div>

        <div class="row">
          <div class="col-sm-8 offset-2">
            <form>
              <div class="form-group">
                <label for="nama"><font color="white">Kode</font></label>
                <input type="text" name="kode_divisi" class="form-control" placeholder="" required="required">
              </div>
              <div class="form-group">
                <label for="email"><font color="white">Divisi</font></label>
                <input type="text" name="nama_divisi" class="form-control" placeholder="" required="required">
              </div>
              <div class="form-group">
                <label for="telp"><font color="white">Tunjangan</font></label>
               <input type="text" name="tunjangan" class="form-control" placeholder="" required="required">
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
              <button type="submit" class="btn btn-primary"><i class="material-icons">add</i>Tambah</button>
              <button type="reset" class="btn btn-danger" id="tombol"><i class="material-icons">clear</i>Batal</button>
            </p>
            


            </form>
          </div>  
        </div>
      </div>
    </contact>
</form>
 <!-- <form method="post" action="simpan_data.php" align="center">

	<p>ID <input type="text" name="id" required="required"></p>                                                      
	<p>Nama <input type="text" name="nama" required="required"></p>
	<p>Alamat <textarea name="alamat" required="required"></textarea>
	<p>Gender <input type="radio" name="gender" value="L">Laki - Laki
		  	  <input type="radio" name="gender" value="P">Perempuan</p>
	<p>Gaji <input type="number" name="gaji" required="required"></p>
<p>
	<button type="submit">Tambah</button>
	<button type="reset">Batal</button>
</p>
</form>  -->



</body>
</html>