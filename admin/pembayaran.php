<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Pembayaran</h2>

 <table border="1" class="table">
	<tr>
		<th>Nomor Pembayaran</th>
		<th>Kode / nama Pasien</th>
		<th>Tanggal</th>
		<th>Jumlah</th>	
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM pembayaran JOIN pasien ON pembayaran.kode_pasien=pasien.kode_pasien"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomor_pembayaran']; ?></td>
		<td><?php echo $pecah['kode_pasien']; ?> / <?php echo $pecah['nama_pasien']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['jumlah']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusbayar.php?id=<?php echo $pecah['nomor_pembayaran']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> l <a href="index.php?halaman=editbayar&id=<?php echo $pecah['nomor_pembayaran']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<?php } ?>
</table>
<?php include 'modalbayar.php' ?>
</body>
</html>
