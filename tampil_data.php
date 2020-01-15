<?php
require_once('koneksi.php'); //untuk menghemat memory
//include('koneksi.php'); //program terus berjalan atau boros memory

//ambil data dari database
$query="SELECT * FROM tb_pengurus";//bahasa sql
$data=mysqli_query($conn,$query);

// var_dump($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengurus</title>
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

<h1 align="center" class="data"><font color="blue">Data Pengurus</font></h1>
<table class="table" id="table">
	<thead class="thead">
	<tr>
		<th scope="col">ID</th>
		<th scope="col">Nama</th>
		<th scope="col">Alamat</th>
		<th scope="col">Gender</th>
		<th scope="col">Gaji</th>
    <th scope="col">Aksi</th>
	</tr>
	</thead>
<?php
while ($row=mysqli_fetch_assoc($data)) {
	
?>
	<tr>
		<td><?php echo $row['id'];  ?></td>
		<td><?php echo $row['nama'];  ?></td>
		<td><?php echo $row['alamat'];  ?></td>
		<td><?php echo $row['gender'];  ?></td>
		<td><?php echo $row['gaji'];  ?></td>
    <td>
        <a href="edit_data.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pencil-alt"><i class="material-icons">code</i>Edit</a> |
        <a href="hapus_data.php?id=<?php echo $row['id']  ?>" onclick="return confirm('Are You Seriously ?')"><i class="fas fa-times-circle"><i class="material-icons">clear</i>Delete</a>
    </td>
	</tr>
<?php
} 
?>
</table>



<hr>
<form method="post" action="simpan_data.php">
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
                <label for="nama"><font color="white">ID</font></label>
                <input type="text" name="id" class="form-control" placeholder="" required="required">
              </div>
              <div class="form-group">
                <label for="email"><font color="white">Nama</font></label>
                <input type="text" name="nama" class="form-control" placeholder="" required="required">
              </div>
              <div class="form-group">
                <label for="telp"><font color="white">Alamat</font></label>
               <input type="text" name="alamat" class="form-control" placeholder="" required="required">
              </div>
              <div class="form-group">
                <label for="pesan"><font color="white">Gender</font></label>
              <select class="form-control" name="gender">
                <option>-- Pilih  --</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
          	  </div>
              <div class="form-group">
                <label for="pesan"><font color="white">Gaji</font></label>
                <input type="number" name="gaji" class="form-control" required="required">
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