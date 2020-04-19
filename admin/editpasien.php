<?php include 'koneksi.php'; ?>
 <?php $ambil=$con->query("SELECT * FROM pasien WHERE kode_pasien='$_GET[id]'"); 
                        while($nm=$ambil->fetch_assoc()){ ?>
 <form action="" method="POST">
              <div class="form-group">
                 <label>Nama Pasien</label><br>
                        <input type="text" class="form-control" name="nama" value="<?php echo "".$nm['nama_pasien'].""; ?>">  
              </div>
                  <div class="form-group">
                    <label>No. Telepon</label><br>
                        <input  type="text" class="form-control" name="tel" value="<?php echo "".$nm['telepon'].""; ?>">  
                  </div>
              <div class="form-group">
                <label for="appointment_message" class="text-black">Alamat</label>
                <textarea name="alm" class="form-control" cols="30" rows="10" value="<?php echo "".$nm['alamat'].""; ?>" ><?php echo "".$nm['alamat'].""; ?></textarea>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Jenis Kelamin</label><br>
                     <select name="gnd" class="form-control">
                     <option value="<?php echo "".$nm['gender'].""; ?>" selected>Terpilih : <?php echo "".$nm['gender'].""; ?></option>
                     <option value="L">Laki-laki</option>
                     <option value="P">Perempuan</option>
                     </select>
                  </div>  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Umur</label><br>
                        <input  type="text" class="form-control" name="umr" value="<?php echo "".$nm['umur'].""; ?>">  
                  </div>
                </div>  
                </div>

              
               <div align="center" class="form-group">
                <button class="btn btn-primary" name="daftar">daftar</button>
                <button type="reset" class="btn btn-primary" name="reset">reset</button>
              </div>
            </form>
        <?php } ?>

     <?php
include'koneksi.php';

if(isset($_POST['daftar'])){

  $a =$_POST['nama'];
  $b =$_POST['alm'];
  $c =$_POST['gnd'];
  $d =$_POST['umr'];
  $e =$_POST['tel'];

$sip=mysqli_query($con, "UPDATE pasien SET nama_pasien='$a',alamat='$b',gender='$c',umur='$d',telepon='$e' WHERE kode_pasien='$_GET[id]'"); 

echo "<script>alert('MANTAP');</script>";
echo "<script>location='index.php?halaman=pasien'</script>";
  }
?>