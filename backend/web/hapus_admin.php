<?php 
include '../koneksi.php';

$id = $_GET["id"];

if( hapus_admin($id) > 0 ) {
	echo "
		<script>
			alert('Admin berhasil dihapus!');
			document.location.href = 'show.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Admin gagal dihapus!');
			document.location.href = 'show.php';
		</script>
	";
}

?>