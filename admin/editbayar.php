<?php include 'koneksi.php'; ?>
 <?php $ambildata=$con->query("SELECT * FROM pembayaran INNER JOIN pasien ON pembayaran.kode_pasien = pasien.kode_pasien WHERE nomor_pembayaran='$_GET[id]'"); 
                        while($pecah2=$ambildata->fetch_assoc()){ ?>
<form action="" method="POST">
                 <div class="form-group">
                 <label>Pasien</label><br>
                  <select name="kde2" class="form-control">
                     <option value="<?php echo "".$pecah2['kode_pasien'].""; ?>">Terpilih : <?php echo "".$pecah2['nama_pasien'].""; ?></option>
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
                        <input type="date" class="form-control" name="tgl" value="<?php echo "".$pecah2['tanggal'].""; ?>">
              </div>
              <div class="form-group">
                 <label>Jumlah</label><br>
                        <input type="text" class="form-control" name="jml" value="<?php echo "".$pecah2['jumlah'].""; ?>">
              </div>
              <div class="row"></div>  
              <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
             <?php } ?>
     <?php

if(isset($_POST['daftar'])){

  $a =$_POST['kde2'];
  $b =$_POST['tgl'];
  $c =$_POST['jml'];

$sip=mysqli_query($con, "UPDATE pembayaran SET kode_pasien='$a',tanggal='$b',jumlah='$c' WHERE nomor_pembayaran='$_GET[id]'");

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=pembayaran'</script>";
  }
?>