<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Pasien</h2>

 <table border="1" class="table">
	<tr>
		<th>Kode Pasien</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Gender</th>
		<th>Umur</th>
		<th>Telepon</th>	
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM pasien"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['kode_pasien']; ?></td>
		<td><?php echo $pecah['nama_pasien']; ?></td>
		<td><?php echo $pecah['alamat']; ?></td>
		<td><?php echo $pecah['gender']; ?></td>
		<td><?php echo $pecah['umur']; ?></td>
		<td><?php echo $pecah['telepon']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapuspasien.php?id=<?php echo $pecah['kode_pasien']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> l <a href="index.php?halaman=editpasien&id=<?php echo $pecah['kode_pasien']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<? $nomor++ ?>
	<?php } ?>
</table>
<?php include 'modalpasien.php'; ?>
</body>
</html>
