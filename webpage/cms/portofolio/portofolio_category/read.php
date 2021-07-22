<?php
if (isset($_POST["submitPortoCategory"])) {
    if (tambahPortofolioCategory($_POST) > 0) {
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

if (isset($_POST["submitEditPortoCategory"])) {
    if (ubahPortofolioCategory($_POST) > 0) {
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

$p_category = queryPortofolioCategory("SELECT * FROM `portofolio_category`");
?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA KATEGORI</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($p_category as $rowPortCategory) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>


                                <form method="POST" action="" class="d-flex flex-row">
                                    <div class="form-group mr-5">
                                        <input type="hidden" name="id_port_cat" value="<?= $rowPortCategory['id_port_cat']; ?>">
                                        <input type="text" name="nama_port_cat" id="nama_port_cat" value="<?= $rowPortCategory['nama_port_cat']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submitEditPortoCategory" class="btn btn-sm btn-info"> <span class="mr-2"> Edit </span> <i class="fa fa-pen"></i></button>
                                    </div>
                                </form>


                            </td>
                            <td>
                                <a href="index.php?portofolio=delete_category&id=<?= $rowPortCategory["id_port_cat"]; ?>" onclick="return confirm('yakin?');" class="btn btn-sm btn-danger rounded-circle">
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