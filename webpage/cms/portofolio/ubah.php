<?php
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
<div class="mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-1">
			<h3> Ubah Data <span> Portofolio </span> </h3>
		</div>
	</div>
</div>

<div class="card">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<input type="hidden" name="id" value="<?= $portofolio["id"]; ?>">
			<input type="hidden" name="gambarLama" value="<?= $portofolio["gambar"]; ?>">
			<div class="row">
				<div class="form-group col-md-6">
					<label for="nama">Judul : </label>
					<input type="text" name="judul" id="judul" value="<?= $portofolio["judul"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<?php
					$getPortCategory = queryPortofolioCategory("SELECT * FROM `portofolio_category`");
					?>
					<label for="nama">Kategori : </label>
					<select name="nama_port_cat" id="nama_port_cat" class="form-control">
						<option value="<?= $portofolio['nama_port_cat']; ?>"><?= $portofolio['nama_port_cat']; ?></option>
						<option></option>
						<?php foreach ($getPortCategory as $gPc) : ?>
							<option value="<?= $gPc['nama_port_cat']; ?>"><?= $gPc['nama_port_cat']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="keterangan">keterangan : </label>
					<input type="text" name="keterangan" id="keterangan" value="<?= $portofolio["keterangan"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="gambar">Gambar :</label> <br>
					<div class="d-flex flex-row">
						<img src="portofolio/img/<?= $portofolio['gambar']; ?>" width="80"> <br>
						<input type="file" name="gambar" id="gambar" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="form-group">
				<button type="submit" name="submitEditPorto" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
			</div>
		</div>
	</form>
</div>