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
		<th>Kode Pasien</th>
		<th>Tanggal</th>
		<th>Jumlah</th>
		<th>Opsi</th>
	<?php $ambil=$con->query("SELECT * FROM pembayaran"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomor_pembayaran']; ?></td>
		<td><?php echo $pecah['kode_pasien']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['jumlah']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusbayar2.php?id=<?php echo $pecah['nomor_pembayaran']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a></td>
	</tr>
	<?php } ?>
</table>
<a href="index.php?halaman=pembayaran" class="btn btn-primary btn-l">Kembali</a>
</body>
</html>
