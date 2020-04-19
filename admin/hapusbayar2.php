<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM pembayaran WHERE nomor_pembayaran='$_GET[id]'"); 
echo "<script>location='index.php?halaman=pembayaran2'</script>";
?>