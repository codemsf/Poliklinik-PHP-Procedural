<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>LIST DOKTER</h2>
<table border="1" class="table">
	<tr>

		<th>Kode Dokter</th>
		<th>Nama</th>
		<th>Spesialis</th>
		<th>Alamat</th>
		<th>Nomor Telp</th>	
		<th>Kode Poliklinik</th>
		<th>Tarif</th>
		<th>Opsi</th>
	</tr>
	<tr>
<?php
	$ambil2=$con->query("SELECT * FROM dokter"); ?>
<?php while($pecah2=$ambil2->fetch_assoc()){ ?>
	
		<td><?php echo $pecah2['kode_dokter']; ?></td>
		<td><?php echo $pecah2['nama_dokter']; ?></td>
		<td><?php echo $pecah2['spesialis']; ?></td>
		<td><?php echo $pecah2['alamat']; ?></td>
		<td><?php echo $pecah2['telepon']; ?></td>
		<td><?php echo $pecah2['kode_poliklinik'];?></td>
		<td><?php echo $pecah2['tarif']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusdokter2.php?id=<?php echo $pecah2['kode_dokter']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a></td>
	</tr>

		<?php } ?>
</table>

<a href="index.php?halaman=dokter" class="btn btn-primary btn-l">kembali</a>

</body>
</html>
