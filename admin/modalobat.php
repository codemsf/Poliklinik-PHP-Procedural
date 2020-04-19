 <div class="container">    
  
  <br/>
  <!-- Tombol untuk menampilkan modal-->
  <button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Tambah Obat</button>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>Input Obat Baru</h2>
        </div>
        <!-- body modal -->
         <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Obat</label><br>
                        <input type="text" class="form-control" name="nama" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Jenis Obat</label><br>
                     <select name="obt" class="form-control">
                     <option value="" selected="">-</option>
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
                        <input  type="text" class="form-control" name="kat" required>
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Harga</label><br>
                        <input  type="text" class="form-control" name="hrg" required>
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Jumlah</label><br>
                        <input  type="text" class="form-control" name="jml" required>
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
  $b =$_POST['obt'];
  $c =$_POST['kat'];
  $d =$_POST['hrg'];
  $e =$_POST['jml'];

$sip=mysqli_query($con, "INSERT INTO obat (kode_obat,nama_obat,jenis_obat,kategori,harga_obat,jumlah_obat) values ('','$a','$b','$c','$d','$e')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=obat'</script>";
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