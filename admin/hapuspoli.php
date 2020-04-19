<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM poliklinik WHERE kode_poliklinik='$_GET[id]'"); 
echo "<script>location='index.php?halaman=poliklinik'</script>";
?>