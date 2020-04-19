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
		<th>Dokter</th>
		<th>Pasien</th>
		<th>Poliklinik</th>
		<th>Total Harga</th>	
		<th>Bayar</th>
		<th>Kembalian</th>
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM resep JOIN dokter ON resep.kode_dokter = dokter.kode_dokter JOIN pasien ON resep.kode_pasien=pasien.kode_pasien JOIN poliklinik ON resep.kode_poliklinik=poliklinik.kode_poliklinik"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomer_resep']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['nama_dokter']; ?></td>
		<td><?php echo $pecah['nama_pasien']; ?></td>
		<td><?php echo $pecah['nama_poliklinik']; ?></td>
		<td><?php echo $pecah['total_harga']; ?></td>
		<td><?php echo $pecah['bayar']; ?></td>
		<td><?php echo $pecah['kembalian']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusresep.php?id=<?php echo $pecah['nomer_resep']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> l <a href="index.php?halaman=editresep&id=<?php echo $pecah['nomer_resep']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<?php } ?>
</table>
<?php include 'modalresep.php'; ?>
</body>
</html>
