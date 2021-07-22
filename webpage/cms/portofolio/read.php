<?php
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
<div class="mb-3">
	<div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
		<div class="page-title mx-5">
			<h3> Data <span> Portofolio </span> </h3>
		</div>
		<div class="">
			<div class="dropdown">
				<button class="btn btn-danger btn-special" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>Tambah Data</span>
					<i class="fa fa-plus"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					<button class="dropdown-item" type="button" data-toggle="modal" data-target="#inputNewPortofolio">Add Portofolio</button>
					<button class="dropdown-item" type="button" data-toggle="modal" data-target="#inputNewPortofolioCategory">Add Portofolio Category</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card mt-5">
	<div class="card-body">
		<nav>
			<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-portofolio" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Table Portofolio</a>
				<a class="nav-item nav-link" id="nav-portofolio-category" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Table Kategori Portofolio</a>

			</div>
		</nav>
		<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-portofolio">
				<?php if (countPortofolioCategory() == 0) : ?>
					<h4 class="my-5 text-center">Kategori Portofolio Kosong , Isi terlebih dahulu</h4>
				<?php else : ?>
					<div class="table-responsive">
						<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>NO</th>
									<th>JUDUL</th>
									<th>KATEGORI</th>
									<th>KETERANGAN</th>
									<th>GAMBAR</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($portofolio as $row) : ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?php echo $row['judul']; ?></td>
										<td><?php echo $row['nama_port_cat']; ?></td>
										<td><?php echo $row['keterangan']; ?></td>
										<td>
											<a href="portofolio/img/<?= $row["gambar"]; ?>" target="_blank">
												<div class="img-port">
													<img src="portofolio/img/<?= $row["gambar"]; ?>">
												</div>
											</a>
										</td>
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
				<?php endif; ?>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-portofolio-category">
				<?php include "portofolio/portofolio_category/read.php"; ?>
			</div>
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
					<?php
					$getPortCategory = queryPortofolioCategory("SELECT * FROM `portofolio_category`");
					?>
					<div class="form-group">
						<label for="nama">Kategori : </label>
						<select name="nama_port_cat" id="nama_port_cat" class="form-control">
							<?php foreach ($getPortCategory as $gPc) : ?>
								<option value="<?= $gPc['nama_port_cat']; ?>"><?= $gPc['nama_port_cat']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="keterangan">keterangan :</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control">
					</div>
					<div class="form-group">
						<label for="gambar">Gambar :</label>
						<input type="file" name="gambar" id="gambar" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" name="submitPorto" class="btn btn-danger btn-special"><span> Save </span> <i class="fa fa-save"></i></button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="inputNewPortofolioCategory" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Data - Portofolio Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body container">
				<form action="" method="post" class="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Nama Category : </label>
						<input type="text" name="nama_port_cat" id="nama_port_cat" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="submitPortoCategory" class="btn btn-danger btn-special"><span> Save </span> <i class="fa fa-save"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>