<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Pendaftar</h2>

 <table border="1" class="table">
	<tr>
		<th>No.Pendaftaran</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Dokter</th>
		<th>Pasien</th>
		<th>Poliklinik</th>
		<th>Biaya</th>	
		<th>Keterangan</th>	
		<th>Opsi</th>	
	</tr>
	<?php $ambil=$con->query("SELECT * FROM pendaftaran JOIN dokter ON pendaftaran.kode_dokter = dokter.kode_dokter JOIN pasien ON pendaftaran.kode_pasien=pasien.kode_pasien JOIN poliklinik ON pendaftaran.kode_poliklinik=poliklinik.kode_poliklinik"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomor_pendaftaran']; ?></td>
		<td><?php echo $pecah['nama_pendaftar']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['nama_dokter']; ?></td>
		<td><?php echo $pecah['nama_pasien']; ?></td>
		<td><?php echo $pecah['nama_poliklinik']; ?></td>
		<td><?php echo $pecah['biaya']; ?></td>
		<td><?php echo $pecah['keterangan']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapuspendaftar.php?id=<?php echo $pecah['nomor_pendaftaran']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> | <a href="index.php?halaman=editdaftar&id=<?php echo $pecah['nomor_pendaftaran']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<?php } ?>
</table>
<?php include 'modaldaftar.php' ?>
</body>
</html>
