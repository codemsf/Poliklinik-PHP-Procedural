<?php include'koneksi.php'; ?>
<?php $ambildata=$con->query("SELECT * FROM obat INNER JOIN jenisobat ON obat.jenis_obat=jenisobat.jenis_obat WHERE kode_obat='$_GET[id]'"); 
                        while($pecah2=$ambildata->fetch_assoc()){ ?>
<form action="" method="POST">
              <div class="form-group">
                 <label>Nama Obat</label><br>
                        <input type="text" class="form-control" name="nama" value="<?php echo "".$pecah2['nama_obat'].""; ?>">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Jenis Obat</label><br>
                     <select name="obt" class="form-control">
                      <option value="<?php echo "".$pecah2['jenis_obat'].""; ?>">Terpilih : <?php echo "".$pecah2['jenis_obat'].""; ?></option>
                   <?php $ambil=$con->query("SELECT * FROM jenisobat"); ?>
                      <?php while($dok=$ambil->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$dok['jenis_obat']."'>".$dok['jenis_obat']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div>  
                </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Kategori</label><br>
                        <input  type="text" class="form-control" name="kat" value="<?php echo "".$pecah2['kategori'].""; ?>">
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Harga</label><br>
                        <input  type="text" class="form-control" name="hrg" value="<?php echo "".$pecah2['harga_obat'].""; ?>">
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Jumlah</label><br>
                        <input  type="text" class="form-control" name="jml" value="<?php echo "".$pecah2['jumlah_obat'].""; ?>">
                  </div>
                </div>
              </div>
               <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
          </div>

</body>

             <?php } ?>

     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];
  $b =$_POST['obt'];
  $c =$_POST['kat'];
  $d =$_POST['hrg'];
  $e =$_POST['jml'];

$sip=mysqli_query($con, "UPDATE obat SET nama_obat='$a',jenis_obat='$b',kategori='$c',harga_obat='$d',jumlah_obat='$e' WHERE kode_obat='$_GET[id]'");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=obat'</script>";
  }
?>