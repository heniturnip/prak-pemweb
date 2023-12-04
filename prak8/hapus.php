<?php 
require 'function.php';

$nim = $_GET["nim"];

if( hapus($nim) > 0 ) {
	echo "
		<script>
			alert('Berhasil Dihapus!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Gagal Ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
}

?>