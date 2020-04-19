 <div class="container">    
  
  <br/>
  <!-- Tombol untuk menampilkan modal-->
  <button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#myModal">Input Resep</button> <a href="index.php?halaman=listresep2" class="btn btn-primary btn-s">Semua Data</a>
 
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>Input Resep Baru</h2>
        </div>
        <!-- body modal -->
         <div class="modal-body">
             <form action="" method="POST">
              <div class="form-group">
               <label>Tanggal</label><br>
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
                    <label>Total</label><br>
                        <input  type="text" class="form-control" name="tot" required>
                  </div>
                </div> 
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Bayar</label><br>
                        <input  type="text" class="form-control" name="byr" required>
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
 $a =$_POST['tanggal'];
  $b =$_POST['kde'];
  $c =$_POST['kde2'];
  $d =$_POST['kde3'];
  $e =$_POST['tot'];
  $f =$_POST['byr'];
  $g =$f - $e;

$sip=mysqli_query($con, "INSERT INTO resep (nomer_resep,tanggal,kode_dokter,kode_pasien,kode_poliklinik,total_harga,bayar,kembalian) values ('','$a','$b','$c','$d','$e', '$f', '$g')");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=resep'</script>";
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