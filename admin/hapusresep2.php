<?php 
include 'koneksi.php'; 
$con->query("DELETE FROM resep WHERE nomer_resep='$_GET[id]'"); 
echo "<script>location='index.php?halaman=listresep2'</script>";
?>