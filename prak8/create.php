Heni Artha Uli br Turnip
121140080
RC

<?php
//Mendeklarasikan bahwa file ini membutuhkan (require) file 'function.php', yang berisi fungsi-fungsi yang diperlukan untuk interaksi, yaitu fungsi tamabah
require 'function.php';
//Memeriksa apakah form telah disubmit dengan menggunakan isset($_POST["submit"])
if( isset($_POST["submit"]) ) {
	
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data Berhasil Diinput!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal Ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Akademik mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="kodemk">Kode Mata Kuliah : </label>
				<input type="text" name="kodemk" id="kodemk">
			</li>
			<li>
				<label for="nilai">Nilai :</label>
				<input type="text" name="nilai" id="nilai">
			</li>
			<li>
				<label for="bobot">Bobot :</label>
				<input type="text" name="bobot" id="bobot">
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>

	</form>




</body>
</html>