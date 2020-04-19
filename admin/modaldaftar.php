 <div class="container">		
	
	<br/>
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Tambah Daftar</button> <a href="index.php?halaman=pendaftar2" class="btn btn-primary btn-s">Semua Data</a>
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Input Pendaftaran Baru</h2>
				</div>
				<!-- body modal -->
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
                   <?php $ambild=$con->query("SELECT * FROM dokter"); ?>
                      <?php while($dok=$ambild->fetch_assoc()){ ?>
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
                     <option >-</option>
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
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
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
echo "<script>location='index.php?halaman=pendaftar'</script>";
  }
?>
				<!-- footer modal
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div> -->
			</div>
		</div>
	</div>
   </div>