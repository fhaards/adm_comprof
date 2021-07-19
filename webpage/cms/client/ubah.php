<?php
$id = $_GET["id"];
$client = query("SELECT * FROM client WHERE id = $id")[0];
if (isset($_POST["submitEditClient"])) {
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?client=read';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php?client=read';
			</script>
		";
	}
}
?>

<div class="mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-1">
			<h3> Ubah Data <span> Client </span> </h3>
		</div>
	</div>
</div>

<div class="card">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type="hidden" name="id" value="<?= $client["id"]; ?>">
			<input type="hidden" name="gambarLama" value="<?= $client["gambar"]; ?>">
			<div class="row">
				<div class="form-group col-md-6">
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" value="<?= $client["nama"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="gambar">Gambar :</label> <br>
					<img src="client/img/<?= $client['gambar']; ?>" width="80"> <br>
					<input type="file" name="gambar" id="gambar" class="form-control">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="form-group">
				<button type="submit" name="submitEditClient" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
			</div>
		</div>
	</form>
</div>