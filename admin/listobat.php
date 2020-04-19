<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Obat</h2>

 <table border="1" class="table">
	<tr>
		<th>Kode Obat</th>
		<th>Nama Obat</th>
		<th>Jenis Obat</th>
		<th>Kategori</th>
		<th>Harga Obat</th>
		<th>Stok/Jumlah</th>	
		<th>Opsi</th>
	</tr>
	<?php $ambil=$con->query("SELECT * FROM obat"); ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $pecah['kode_obat']; ?></td>
		<td><?php echo $pecah['nama_obat']; ?></td>
		<td><?php echo $pecah['jenis_obat']; ?></td>
		<td><?php echo $pecah['kategori']; ?></td>
		<td><?php echo $pecah['harga_obat']; ?></td>
		<td><?php echo $pecah['jumlah_obat']; ?></td>
		<td><a class="btn btn-danger btn-xs" href="hapusobat.php?id=<?php echo $pecah['kode_obat']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a> l <a href="index.php?halaman=editobat&id=<?php echo $pecah['kode_obat']; ?>" class="btn btn-primary btn-xs">edit</a></td>
	</tr>
	<? $nomor++ ?>
	<?php } ?>
</table>
<?php include 'modalobat.php' ?>
</body>
</html>
