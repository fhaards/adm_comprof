<?php 
$id = $_GET["id"];
if(hapusPortofolioCategory($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php?portofolio=read';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'index.php?portofolio=read';
		</script>
	";
}

?>