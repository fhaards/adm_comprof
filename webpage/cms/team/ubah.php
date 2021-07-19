<?php
$id = $_GET["id"];
$team = query("SELECT * FROM team WHERE id = $id")[0];
if (isset($_POST["submitUbahTeam"])) {
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?team=read';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php?team=read';
			</script>
		";
	}
}
?>

<div class="mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-1">
			<h3> Ubah Data <span> Team </span> </h3>
		</div>
	</div>
</div>

<div class="card">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">


			<div class="row">
				<input type="hidden" name="id" value="<?= $team["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $team["gambar"]; ?>" class="form-control">
				<div class="form-group col-md-6">
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" value="<?= $team["nama"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="jabatan">Jabatan : </label>
					<input type="jabatan" name="jabatan" id="jabatan" value="<?= $team["jabatan"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="difisi">Difisi : </label>
					<input type="difisi" name="difisi" id="difisi" value="<?= $team["difisi"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="keterangan">Keterangan : </label>
					<input type="keterangan" name="keterangan" id="keterangan" value="<?= $team["keterangan"]; ?>" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label for="gambar">Gambar :</label> <br>
					<div class="d-flex flex-row">
						<img src="team/img/<?= $team['gambar']; ?>" width="100" class="mr-5">
						<input type="file" name="gambar" id="gambar" class="form-control">
					</div>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<div class="form-group">
				<button type="submit" name="submitUbahTeam" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
			</div>
		</div>
	</form>
</div>