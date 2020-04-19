 <div class="container">    
  
  <br/>
  <!-- Tombol untuk menampilkan modal-->
  <button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Tambah Pembayaran</button> <a href="index.php?halaman=pembayaran2" class="btn btn-primary btn-s">Semua Data</a>
 
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>Input Pembayaran Baru</h2>
        </div>
        <!-- body modal -->
         <div class="modal-body">
              <form action="" method="POST">
                 <div class="form-group">
                 <label>Pasien</label><br>
                  <select name="kde2" class="form-control">
                     <option >-</option>
                   <?php $ambil=$con->query("SELECT * FROM pasien"); ?>
                      <?php while($pol=$ambil->fetch_assoc()){ ?>
                    <?php  
                        echo "<option value='".$pol['kode_pasien']."'>".$pol['nama_pasien']."</option>";
                       ?>
                     <?php } ?>
                     </select>
                  </div>
              <div class="form-group">
                 <label>Tanggal</label><br>
                        <input type="date" class="form-control" name="tgl" required>
              </div>
              <div class="form-group">
                 <label>Jumlah</label><br>
                        <input type="text" class="form-control" name="jml" required>
              </div>
              <div class="row"></div>  
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['kde2'];
  $b =$_POST['tgl'];
  $c =$_POST['jml'];

$sip=mysqli_query($con, "INSERT INTO pembayaran (nomor_pembayaran,kode_pasien,tanggal,jumlah) values ('','$a','$b','$c')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=pembayaran'</script>";
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