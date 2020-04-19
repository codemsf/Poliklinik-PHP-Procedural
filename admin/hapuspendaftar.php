<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM pendaftaran WHERE nomor_pendaftaran='$_GET[id]'"); 
echo "<script>location='index.php?halaman=pendaftar'</script>";
?>