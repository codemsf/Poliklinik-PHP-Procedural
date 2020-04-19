 <div class="container">		
	
	<br/>
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Input Poliklinik</button>
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Input Poliklinik Baru</h2>
				</div>
				<!-- body modal -->
				 <div class="modal-body">
             <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Poliklinik</label><br>
                        <input type="text" class="form-control" name="nama" required>
              </div>
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
</body>
</html>

     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];

$sip=mysqli_query($con, "INSERT INTO poliklinik (kode_poliklinik,nama_poliklinik) values ('','$a')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=poliklinik'</script>";
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