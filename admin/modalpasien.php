 <div class="container">		
	
	<br/>
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Input Pasien</button>
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Input Pasien Baru</h2>
				</div>
				<!-- body modal -->
				 <div class="modal-body">
             <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Pasien</label><br>
                        <input type="text" class="form-control" name="nama" required>
              </div>
                  <div class="form-group">
                    <label>No. Telepon</label><br>
                        <input  type="text" class="form-control" name="tel" required>
                  </div>
              <div class="form-group">
                <label for="appointment_message" class="text-black">Alamat</label>
                <textarea name="alm" class="form-control" cols="30" rows="10"></textarea>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Jenis Kelamin</label><br>
                     <select name="gnd" class="form-control">
                     <option value="" selected="">-</option>
                     <option value="L">Laki-laki</option>
                     <option value="P">Perempuan</option>
                     </select>
                  </div>  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Umur</label><br>
                        <input  type="text" class="form-control" name="umr" required>
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
</html>

     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];
  $b =$_POST['alm'];
  $c =$_POST['gnd'];
  $d =$_POST['umr'];
  $e =$_POST['tel'];

$sip=mysqli_query($con, "INSERT INTO pasien (kode_pasien,nama_pasien,alamat,gender,umur,telepon) values ('','$a','$b','$c','$d','$e')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=pasien'</script>";
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