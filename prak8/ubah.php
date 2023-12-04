Heni Artha Uli br Turnip
121140080
RC

<?php
//Mendeklarasikan bahwa file ini membutuhkan (require) file 'function.php', yang berisi fungsi-fungsi yang diperlukan untuk interaksi, yaitu fungsi ubah
require 'function.php';

$nim = $_GET["nim"];//Mengambil nilai NIM dari parameter URL menggunakan
//Menggunakan fungsi query (yang mungkin didefinisikan di dalam file 'function.php') untuk melakukan query SELECT dan mendapatkan data mahasiswa berdasarkan NIM
$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];
//Memeriksa apakah form telah disubmit dengan menggunakan isset($_POST["submit"])
if( isset($_POST["submit"]) ) {

	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Berhasil Diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Gagal Diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Akademik Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nim" value="<?= $mhs["nim"]; ?>">
		<ul>
			<li>
				<label for="kodemk">Kode Mata Kuliah : </label>
				<input type="text" name="kodemk" id="kodemk" value="<?= $mhs["kodemk"]; ?>">
			</li>
			<li>
				<label for="nilai">Nilai :</label>
				<input type="text" name="nilai" id="nilai" value="<?= $mhs["nilai"]; ?>">
			</li>
			<li>
				<<label for="bobot">Bobot :</label>
				<input type="text" name="bobot" id="bobot" value="<?= $mhs["bobot"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>
	</form>

</body>
</html>