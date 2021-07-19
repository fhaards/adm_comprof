<?php
require 'functions.php';


$id = $_GET["id"];


$profile = query("SELECT * FROM team WHERE id = $id")[0];



if( isset($_POST["submit"]) ) {
	

	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'read.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'read.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Ubah data Profile</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $profile["id"]; ?>">
  
			<li>
				<label for="keterangan">Keterangan : </label>
				<input type="keterangan" name="keterangan" id="keterangan" value="<?= $profile["keterangan"]; ?>">
			</li>    
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>