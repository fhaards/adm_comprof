<?php
require 'functions.php';
$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id = $id")[0];
if (isset($_POST["submitEditProduk"])) {
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?produk=read';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php?produk=read';
			</script>
		";
	}
}
?>
<div class="container-fluid mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-5">
			<h3> Ubah Data <span> Produk </span> </h3>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $produk["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $produk["gambar"]; ?>">
				<div class="row">
					<div class="form-group col-md-6">
						<label for="nama">Nama : </label>
						<input type="text" name="nama" id="nama" value="<?= $produk["nama"]; ?>" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="keterangan">keterangan : </label>
						<input type="textarea" name="keterangan" id="keterangan" value="<?= $produk["keterangan"]; ?>" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="gambar">Gambar :</label> <br>
						<img src="produk/img/<?= $produk['gambar']; ?>" width="40"> <br>
						<input type="file" name="gambar" id="gambar" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="submitEditProduk" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>