<?php 
include '../koneksi.php';

$id = $_GET["id"];

if( hapus_profile($id) > 0 ) {
	echo "
		<script>
			alert('Admin berhasil dihapus!');
			document.location.href = 'profile-show.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Admin gagal dihapus!');
			document.location.href = 'profile-show.php';
		</script>
	";
}

?>