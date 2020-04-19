<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Poliklinik</h2>

 <table border="1" class="table">
	<tr>
		<th>Kode Poliklinik</th>
		<th>Nama Poliklinik</th>
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM poliklinik"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['kode_poliklinik']; ?></td>
		<td><?php echo $pecah['nama_poliklinik']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapuspoli.php?id=<?php echo $pecah['kode_poliklinik']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> l <a href="index.php?halaman=editpoli&id=<?php echo $pecah['kode_poliklinik']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<?php } ?>
</table>
<?php include 'modalpoli.php'; ?>
</body>
</html>
