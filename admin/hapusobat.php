<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM obat WHERE kode_obat='$_GET[id]'"); 
echo "<script>location='index.php?halaman=obat'</script>";
?>