<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cess.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Apotek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
  <nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><font color='orange'><b>APOTEK</b></font></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="datapasien.php">DATA PASIEN</a></li>
          <li><a href="dataobat.php">DATA OBAT</a></li>
          <li><a href="datadokter.php">DATA DOKTER</a></li>
          <li><a href="datapoliklinik.php">DATA POLIKLINIK</a></li>
          <li><a href="pembayaran.php">PEMBAYARAN</a></li>
          <input type="checkbox" id="tag-menu"  align="right" />
          <label class="fa fa-bars menu-bar" for="tag-menu"><font color="red">Menu</font></label>
          <div class="jw-drawer">
            <nav>
              <ul>
                <li><a href="tambahobat.php">TAMBAH OBAT</a></li>
                <li><a href="tambahdokter.php"></i>TAMBAH DOKTER</a></li>
                <li><a href="pasien.php">TAMBAH PASIEN</a></li>
                <li><a href="poliklinik.php">TAMBAH POLIKLINIK</a></li>
                <li><a href="tentang.php"></i>TENTANG</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:70px">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs"></p>
          <div class="jumbotron"><br>
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                  <h3 class="page-header">PENDAFTARAN</h2>
                    <form action="" method="POST">
                      <div class="form-group">
                        <input type="number" class="hidden" placeholder="Nomor pendaftaran" name="nomorpend">
                        <label>Tanggal pendaftaran</label><br>
                        <input type="date" class="form-control" placeholder="Tanggal pendaftaran" name="tanggal">
                        <label>Kode dokter</label><br>
                        <input type="text" class="form-control" cols="40" rows="5" placeholder="Kode dokter" name="dokter">
                        <label>Kode pasien</label><br>
                        <input type="text" class="form-control" placeholder="Kode pasien" name="pasien">
                        <label>Kode poliklinik</label><br>
                        <input type="text" class="form-control" placeholder="Kode poliklinik" name="poli">
                        <label>Biyaya</label><br>
                        <input type="text" class="form-control" placeholder="Biyaya" name="biyaya">
                        <label>Keterangan</label><br>
                        <textarea type="text" class="form-control" placeholder="Keterangan" name="keterangan"></textarea>
                        <button class="btn btn-danger" type="submit" name="simpan">Simpan</button>
                      </div>	
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.container-->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/offcanvas.js"></script>
  </body>
</html>

<?php
include'koneksi.php';

if(isset($_POST['simpan'])){

  $no =$_POST['nomorpend'];
  $tgl =$_POST['tanggal'];
  $dkt =$_POST['dokter'];
  $psn =$_POST['pasien'];
  $pl =$_POST['poli'];
  $bi =$_POST['biyaya'];
  $ktg =$_POST['keterangan'];
 $input= mysqli_query("INSERT INTO pendaftaran (NomorPendf,TanggalPendf,KodeDkt,KodePsn,KodePlk, Biyaya, Ket) values ('$no','$tgl','$dkt','$psn','$pl', '$bi', '$ktg')");

    if ($input) {
    echo "masuk";
  }else{
    echo "keluar";
  }
  }

?>