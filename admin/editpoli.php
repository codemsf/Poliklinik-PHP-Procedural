<?php include'koneksi.php'; ?>
<h2>Edit Poliklinik</h2>
<?php $ambil=$con->query("SELECT * FROM poliklinik WHERE kode_poliklinik='$_GET[id]'"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
<form action="" method="POST">
              <div class="form-group">
                 <label>Nama Poliklinik</label><br>
                        <input type="text" class="form-control" name="nama" value="<?php echo "".$pecah['nama_poliklinik'].""; ?>" >
              </div>
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
</body>
</html>
<?php } ?>
     <?php

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];

$sip=mysqli_query($con, "UPDATE poliklinik SET nama_poliklinik='$a' WHERE kode_poliklinik='$_GET[id]'");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=poliklinik'</script>";
  }
?>