Heni Artha Uli br Turnip
121140080
RC

<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "akademik");

//koneksi data keseluruhan (deklarasi data)
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

//fungsi untuk menambahkan data, data diambil dari database global kemudian penambahan data ke query
function tambah($data) {
	global $conn;

	$nim = htmlspecialchars($data["nim"]);
	$kodemk = htmlspecialchars($data["kodemk"]);
	$nilai = htmlspecialchars($data["nilai"]);
    $bobot = htmlspecialchars($data["bobot"]);

	$query = "INSERT INTO mahasiswa
				VALUES
			  ('$nim', '$kodemk', '$nilai', '$bobot')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//fungsi hapus data berdasarkan nim
function hapus($nim) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = $nim");
	return mysqli_affected_rows($conn);
}

//mengubah data berdasarkan nim, data yang diambil dari database global, diupdate untu pembaruan data diinput
function ubah($data) {
	global $conn;

	$nim = $data["nim"];
	$kodemk = htmlspecialchars($data["kodemk"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$bobot = htmlspecialchars($data["bobot"]);

	$query = "UPDATE mahasiswa SET
				kodemk = '$kodemk',
				nilai = '$nilai',
				bobot = '$bobot'
			  WHERE nim = $nim
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

//fungsi cari berdasarkan kata kunci, mencari data yang ada didatabase global dengan menginputkan kata kunci nim/kodemk/nilai
function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
			  nim LIKE '%$keyword%' OR
			  kodemk LIKE '%$keyword%' OR
			  nilai LIKE '%$keyword%'
			";
	return query($query);
}
?>