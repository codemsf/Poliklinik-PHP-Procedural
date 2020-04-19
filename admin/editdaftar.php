<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h2>Edit Data Pendaftar</h2>
    <?php $ambildata=$con->query("SELECT * FROM pendaftaran JOIN dokter ON pendaftaran.kode_dokter = dokter.kode_dokter JOIN pasien ON pendaftaran.kode_pasien=pasien.kode_pasien JOIN poliklinik ON pendaftaran.kode_poliklinik=poliklinik.kode_poliklinik WHERE nomor_pendaftaran='$_GET[id]'"); ?>
  <?php while($pecahin=$ambildata->fetch_assoc()){ ?>
<form action="" method="POST">
              <div class="form-group">
                 <label>Nama Pendaftar</label><br>
                        <input type="text" class="form-control" name="nama" value="<?php echo "".$pecahin['nama_pendaftar'].""; ?>" >
              </div>
              <div class="form-group">
               <label>Tanggal pendaftaran</label><br>
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
                     <?php $ambilp=$con->query("SELECT * FROM pasien"); ?>
                      <?php while($pas=$ambilp->fetch_assoc()){ ?>
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
                   <?php $ambilpl=$con->query("SELECT * FROM poliklinik"); ?>
                      <?php while($pol=$ambilpl->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$pol['kode_poliklinik']."'>".$pol['nama_poliklinik']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div>  
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Biaya</label><br>
                        <input  type="text" class="form-control" name="biaya" value="<?php echo "".$pecahin['biaya'].""; ?>" >
                  </div>
                </div>
              
              </div>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Keterangan</label>
                <textarea name="ket" id="appointment_message" class="form-control" cols="30" rows="10" value="<?php echo "".$pecahin['biaya'].""; ?>" ><?php echo "".$pecahin['keterangan'].""; ?></textarea>
              </div>
               <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
             <?php } ?>

</body>
</html>

     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $nm =$_POST['nama'];
  $tgl =$_POST['tanggal'];
  $dkt =$_POST['kde'];
  $psn =$_POST['kde2'];
  $pl =$_POST['kde3'];
  $bi =$_POST['biaya'];
  $ktg =$_POST['ket'];

$sip=mysqli_query($con, "UPDATE pendaftaran SET nama_pendaftar='$nm',tanggal='$tgl', kode_dokter='$dkt', kode_pasien='$psn', kode_poliklinik='$pl', biaya='$bi', keterangan='$ktg' WHERE nomor_pendaftaran='$_GET[id]'");
echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=pendaftar'</script>";
  }
?>