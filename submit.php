
     <?php
include'koneksi.php';

if(isset($_POST['simpan'])){

  $nm =$_POST['nama'];
  $tgl =$_POST['tanggal'];
  $dkt =$_POST['dokter'];
  $psn =$_POST['pasien'];
  $pl =$_POST['poli'];
  $bi =$_POST['biaya'];
  $ktg =$_POST['ket'];
$sip->query("INSERT INTO pendaftaran(nama_pendaftar,tanggal,kode_dokter,kode_pasien,kode_poliklinik,biaya,keterangan) values ('.$nm.','.$tgl.','.$dkt.','.$psn.','.$pl.', '.$bi.', '.$ktg.')");

  }
?>