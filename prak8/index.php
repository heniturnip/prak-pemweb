Heni Artha Uli br Turnip
121140080
RC

<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Data Akademik</h1>

<a href="create.php">Tambah data akademik mahasiswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="Kata Kunci " autocomplete="off">
	<button type="submit" name="cari">Cari</button>
	
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">
    // kolom tabel
	<tr>
		<th>No.</th>
		<th>NIM</th>
		<th>Kode Mata Kuliah</th>
		<th>Nilai</th>
		<th>Bobot</th>
        <th>Aksi</th>
	</tr>
    //perulangan untuk isi tabel
	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["kodemk"]; ?></td>
		<td><?= $row["nilai"]; ?></td>
        <td><?= $row["bobot"]; ?></td>
        <td>
			<a href="ubah.php?nim=<?= $row["nim"]; ?>">Ubah</a> |
			<a href="hapus.php?nim=<?= $row["nim"]; ?>" onclick="return confirm('Apa Anda Yakin Data Ini Dihapus?');">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
</body>
</html>
