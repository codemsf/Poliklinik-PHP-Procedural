<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Resep</h2>

 <table border="1" class="table">
	<tr>
		<th>Nomor Resep</th>
		<th>Tanggal</th>
		<th>Kode Dokter</th>
		<th>Kode Pasien</th>
		<th>Kode Poliklinik</th>
		<th>Total Harga</th>	
		<th>Bayar</th>
		<th>Kembalian</th>
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM resep"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomer_resep']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['kode_dokter']; ?></td>
		<td><?php echo $pecah['kode_pasien']; ?></td>
		<td><?php echo $pecah['kode_poliklinik']; ?></td>
		<td><?php echo $pecah['total_harga']; ?></td>
		<td><?php echo $pecah['bayar']; ?></td>
		<td><?php echo $pecah['kembalian']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusresep2.php?id=<?php echo $pecah['nomer_resep']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a></td>
	</tr>
	<?php } ?>
</table>
<a href="index.php?halaman=resep" class="btn btn-primary btn-l">kembali</a>
</body>
</html>
