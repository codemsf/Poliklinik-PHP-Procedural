,<h2>JOIN DOKTER DAN POLI</h2>
	<?php include 'koneksi.php';
	$ambil=$con->query("SELECT * FROM dokter INNER JOIN poliklinik ON dokter.kode_poliklinik = poliklinik.kode_poliklinik"); ?>
<?php while($pecah=$ambil->fetch_assoc()){ ?>

	<pre><?php print_r($pecah) ?></pre>
<?php } ?>

<h2>JOIN pendaftatran,dokter,pasien, DAN POLI</h2>
<?php
	$ambil2=$con->query("SELECT * FROM pendaftaran JOIN dokter ON pendaftaran.kode_dokter = dokter.kode_dokter JOIN pasien ON pendaftaran.kode_pasien=pasien.kode_pasien JOIN poliklinik ON pendaftaran.kode_poliklinik=poliklinik.kode_poliklinik"); ?>
<?php while($pecah2=$ambil2->fetch_assoc()){ ?>

	<pre><?php print_r($pecah2) ?></pre>
<?php } ?>
		