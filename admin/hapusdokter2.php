<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM dokter WHERE kode_dokter='$_GET[id]'"); 
echo "<script>location='index.php?halaman=dokter2'</script>";
?>