<?php
require 'functions.php';
$id = $_GET["id"];
$portofolio = query("SELECT * FROM portofolio WHERE id = $id")[0];
if (isset($_POST["submitEditPorto"])) {


	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?portofolio=read';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php?portofolio=read';
			</script>
		";
	}
}
?>
<div class="container-fluid mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-5">
			<h3> Ubah Data <span> Portofolio </span> </h3>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<div class="card-body">

			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $portofolio["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $portofolio["gambar"]; ?>">
				<div class="row">
					<div class="form-group col-md-6">
						<label for="nama">Judul : </label>
						<input type="text" name="judul" id="judul" value="<?= $portofolio["judul"]; ?>" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="keterangan">keterangan : </label>
						<input type="text" name="keterangan" id="keterangan" value="<?= $portofolio["keterangan"]; ?>" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="gambar">Gambar :</label> <br>
						<img src="portofolio/img/<?= $portofolio['gambar']; ?>" width="40"> <br>
						<input type="file" name="gambar" id="gambar" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="submitEditPorto" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
				</div>
			</form>
		</div>
	</div>