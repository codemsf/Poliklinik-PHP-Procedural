<?php include'koneksi.php'; ?>
<h2>Edit Resep</h2>
<?php $ambildata=$con->query("SELECT * FROM resep JOIN dokter ON resep.kode_dokter = dokter.kode_dokter JOIN pasien ON resep.kode_pasien=pasien.kode_pasien JOIN poliklinik ON resep.kode_poliklinik=poliklinik.kode_poliklinik WHERE nomer_resep='$_GET[id]'"); ?>
  <?php while($pecahin=$ambildata->fetch_assoc()){ ?>
<form action="" method="POST">
              <div class="form-group">
               <label>Tanggal</label><br>
                        <input type="date" class="form-control" name="tanggal" value="<?php echo "".$pecahin['tanggal'].""; ?>" >
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Nama Dokter</label><br>
                     <select name="kde" class="form-control">
                     <option  value="<?php echo "".$pecahin['kode_dokter'].""; ?>">Terpilih : <?php echo "".$pecahin['nama_dokter'].""; ?></option>
                   <?php $ambil=$con->query("SELECT * FROM dokter"); ?>
                      <?php while($dok=$ambil->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$dok['kode_dokter']."'>".$dok['nama_dokter']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div>  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Nama Pasien</label><br>
                     <select name="kde2" class="form-control">
                     <option  value="<?php echo "".$pecahin['kode_pasien'].""; ?>">Terpilih : <?php echo "".$pecahin['nama_pasien'].""; ?></option>
                   <?php $ambil=$con->query("SELECT * FROM pasien"); ?>
                      <?php while($pas=$ambil->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$pas['kode_pasien']."'>".$pas['nama_pasien']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div> 
              </div>
                 <div class="col-md-6">
                 <label>Poliklinik</label><br>
                  <select name="kde3" class="form-control">
                     <option value="<?php echo "".$pecahin['kode_poliklinik'].""; ?>">Terpilih : <?php echo "".$pecahin['nama_poliklinik'].""; ?></option>
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
                    <label>Total</label><br>
                        <input  type="text" class="form-control" name="tot" value="<?php echo "".$pecahin['total_harga'].""; ?>" >
                  </div>
                </div> 
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Bayar</label><br>
                        <input  type="text" class="form-control" name="byr" value="<?php echo "".$pecahin['bayar'].""; ?>" >
                  </div>
                </div>
              
              </div>
               <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form> 
          <?php } ?>

     <?php

if(isset($_POST['daftar'])){
 $a =$_POST['tanggal'];
  $b =$_POST['kde'];
  $c =$_POST['kde2'];
  $d =$_POST['kde3'];
  $e =$_POST['tot'];
  $f =$_POST['byr'];
  $g =$f - $e;

$sip=mysqli_query($con, "UPDATE resep SET tanggal='$a',kode_dokter='$b',kode_pasien='$c',kode_poliklinik='$d',total_harga='$e',bayar='$f',kembalian='$g' WHERE nomer_resep='$_GET[id]'");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=resep'</script>";
  }
?>