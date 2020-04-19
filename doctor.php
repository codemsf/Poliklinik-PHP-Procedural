<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>POLIKLINIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
<?php include 'navbarnya.php'?>
<a href="dokter2.php" class="btn btn-primary btn-s">Semua Data</a>
 <table border="1" class="table">
  <tr>

    <th>Kode Dokter</th>
    <th>Nama</th>
    <th>Spesialis</th>
    <th>Alamat</th>
    <th>Nomor Telp</th> 
    <th>Kode / Poliklinik</th>
    <th>Tarif</th>
  </tr>
  <tr>
<?php
  $ambil2=$con->query("SELECT * FROM dokter INNER JOIN poliklinik WHERE dokter.kode_poliklinik = poliklinik.kode_poliklinik"); ?>
<?php while($pecah2=$ambil2->fetch_assoc()){ ?>
  
    <td><?php echo $pecah2['kode_dokter']; ?></td>
    <td><?php echo $pecah2['nama_dokter']; ?></td>
    <td><?php echo $pecah2['spesialis']; ?></td>
    <td><?php echo $pecah2['alamat']; ?></td>
    <td><?php echo $pecah2['telepon']; ?></td>
    <td><?php echo $pecah2['kode_poliklinik'];?> / <?php echo $pecah2['nama_poliklinik'];  ?></td>
    <td><?php echo $pecah2['tarif']; ?></td>
    
  </tr>

    <?php } ?>
</table>
		
    <?php include 'sikile.php' ?>
    <?php include 'daftar.php' ?>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>