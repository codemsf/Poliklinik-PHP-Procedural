<?php include 'koneksi.php' ?>
<!-- daftar -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">DAFTAR</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Pendaftar</label><br>
                        <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
               <label>Tanggal pendaftaran</label><br>
                        <input type="date" class="form-control" name="tanggal" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Nama Dokter</label><br>
                     <select name="kde" class="form-control">
                     <option value="" selected="">-</option>
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
                     <option value="" selected="">-</option>
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
                     <option >-</option>
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
                    <label>Biaya</label><br>
                        <input  type="text" class="form-control" name="biaya" required>
                  </div>
                </div>
              
              </div>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Keterangan</label>
                <textarea name="ket" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>

              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
              </div>
            </form>
          </div>
      </div>
      </div>
    </div>

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

$sip=mysqli_query($con, "INSERT INTO pendaftaran (nomor_pendaftaran,nama_pendaftar,tanggal,kode_dokter,kode_pasien,kode_poliklinik,biaya,keterangan) values ('','$nm','$tgl','$dkt','$psn','$pl', '$bi', '$ktg')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='pendaftar.php'</script>";
  }
?>

