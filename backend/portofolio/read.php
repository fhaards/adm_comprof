<?php
require 'functions.php';
if (isset($_POST["submitPorto"])) {
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?portofolio=read';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?portofolio=read';
			</script>
		";
	}
}
$portofolio = query("SELECT * FROM portofolio");
?>
<div class="container-fluid mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-5">
			<h3> Data <span> Portofolio </span> </h3>
		</div>
		<div class="">
			<button type="button" data-toggle="modal" data-target="#inputNewPortofolio" class="btn btn-danger btn-special">
				<span>Tambah Data</span>
				<i class="fa fa-plus"></i>
			</button>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<div class="card-body">

			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>NO</th>
						<th>JUDUL</th>
						<th>KETERANGAN</th>
						<th>GAMBAR</th>
						<th>AKSi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($portofolio as $row) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?php echo $row['judul']; ?></td>
							<td><?php echo $row['keterangan']; ?></td>
							<td><img src="portofolio/img/<?= $row["gambar"]; ?>" width="50"></td>
							<td>
								<a href="index.php?portofolio=update&id=<?= $row["id"]; ?>" class="btn btn-sm btn-info rounded-circle">
									<i class="fa fa-pen"></i>
								</a>
								<a href="index.php?portofolio=delete&id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-sm btn-danger rounded-circle">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="inputNewPortofolio" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Data - Portofolio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body container">
				<form action="" method="post" class="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Judul : </label>
						<input type="text" name="judul" id="judul" class="form-control">
					</div>
					<div class="form-group">
						<label for="keterangan">keterangan :</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control">
					</div>
					<div class="form-group">
						<label for="gambar">Gambar :</label>
						<input type="file" name="gambar" id="gambar" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="submitPorto" class="btn btn-danger btn-special"><span> Save </span> <i class="fa fa-save"></i></button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>