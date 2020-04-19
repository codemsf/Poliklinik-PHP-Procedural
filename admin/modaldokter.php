<!-- Modal Pop Up -->
  <div class="container">		
	<br/>
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Tambah Dokter</button> <a href="index.php?halaman=dokter2" class="btn btn-primary btn-s">Semua Data</a>
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="judul">		
				<h2>Input Data Dokter</h2>
				</div>
				</div>
				<!-- body modal -->
				<div class="modal-body">
	            <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Dokter</label><br>
                        <input type="text" class="form-control" name="nama" valuerequired>
              </div>
              <div class="form-group">
               <label>Spesialis</label><br>
                        <input type="text" class="form-control" name="spec" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Alamat</label><br>
                        <input type="text" class="form-control" cols="40" rows="5" name="alm" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label><br>
                        <input type="text" class="form-control" name="tel" required>
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
                    <label>Tarif</label><br>
                        <input type="text" class="form-control" name="trf" required>
                  </div>
                </div>
              </div>  
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
               <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];
  $b =$_POST['spec'];
  $c =$_POST['alm'];
  $d =$_POST['tel'];
  $e =$_POST['kde3'];
  $f =$_POST['trf'];

$sip=mysqli_query($con, "INSERT INTO dokter (kode_dokter,nama_dokter,spesialis,alamat,telepon,kode_poliklinik,tarif) values ('','$a','$b','$c','$d','$e','$f')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=dokter'</script>";
  }
?>
				</div>
				<!-- footer modal
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div> -->
			</div>
		</div>
	</div>
   </div>