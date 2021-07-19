<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'profile/read.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'profile/read.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Tambah Profile</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>

			<li>
				<label for="keterangan">Keterangan :</label>
				<input type="text" name="keterangan" id="keterangan">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>