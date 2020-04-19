<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php $ambil=$con->query("SELECT * FROM dokter INNER JOIN poliklinik ON dokter.kode_poliklinik = poliklinik.kode_poliklinik WHERE kode_dokter='$_GET[id]'"); 
                        while($nm=$ambil->fetch_assoc()){ ?>
			<h2>Edit Data Dokter</h2>
	            <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Dokter</label><br>
                        <input type="text" class="form-control" name="nama" value="<?php echo "".$nm['nama_dokter'].""; ?>">  
                    </div>
              <div class="form-group">
               <label>Spesialis</label><br>
                        <input type="text" class="form-control" name="spec" value="<?php echo "".$nm['spesialis'].""; ?>">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Alamat</label><br>
                        <input type="text" class="form-control" cols="40" rows="5" name="alm" value="<?php echo "".$nm['alamat'].""; ?>">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label><br>
                        <input type="text" class="form-control" name="tel" value="<?php echo "".$nm['telepon'].""; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                 <label>Poliklinik</label><br>
                  <select name="kde3" class="form-control">
                     <option value="<?php echo "".$nm['kode_poliklinik'].""; ?>">Terpilih : <?php echo "".$nm['nama_poliklinik'].""; ?></option>
                   <?php $ambil=$con->query("SELECT * FROM poliklinik"); ?>
                      <?php while($pol=$ambil->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$pol['kode_poliklinik']."'>".$pol['nama_poliklinik']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Tarif</label><br>
                        <input type="text" class="form-control" name="trf" value="<?php echo "".$nm['tarif'].""; ?>">
                  </div>
                </div>
              </div>  
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">Input</button>
               <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
             <?php } ?>
     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];
  $b =$_POST['spec'];
  $c =$_POST['alm'];
  $d =$_POST['tel'];
  $e =$_POST['kde3'];
  $f =$_POST['trf'];

$sip=mysqli_query($con, "UPDATE dokter SET nama_dokter='$a',spesialis='$b',alamat='$c',telepon='$d',kode_poliklinik='$e',tarif='$f' WHERE kode_dokter='$_GET[id]'");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=dokter'</script>";
  }
?>
</body>
</html>