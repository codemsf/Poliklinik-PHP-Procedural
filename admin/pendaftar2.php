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
		<th>kode Dokter</th>
		<th>kode Pasien</th>
		<th>kode Poliklinik</th>
		<th>Biaya</th>	
		<th>Keterangan</th>
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM pendaftaran"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['nomor_pendaftaran']; ?></td>
		<td><?php echo $pecah['nama_pendaftar']; ?></td>
		<td><?php echo $pecah['tanggal']; ?></td>
		<td><?php echo $pecah['kode_dokter']; ?></td>
		<td><?php echo $pecah['kode_pasien']; ?></td>
		<td><?php echo $pecah['kode_poliklinik']; ?></td>
		<td><?php echo $pecah['biaya']; ?></td>
		<td><?php echo $pecah['keterangan']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapuspendaftar2.php?id=<?php echo $pecah['nomor_pendaftaran']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> </td>
	</tr>
	<?php } ?>
</table>
<a href="index.php?halaman=pendaftar" class="btn btn-primary btn-l">kembali</a>
</body>
</html>
