<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM pasien WHERE kode_pasien='$_GET[id]'"); 
echo "<script>location='index.php?halaman=pasien'</script>";
?>