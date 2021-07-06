<?php
$id = $_GET["id"];
$nom = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `profile` WHERE id = $id"));
if (isset($_POST["submit"])) {

    // if (ubah_profile($_POST) > 0) {
    //     echo "
    // 		<script>
    // 			alert('data berhasil diubah!');
    // 			document.location.href = 'profile-show.php';
    // 		</script>
    // 	";
    // } else {
    //     echo "
    // 		<script>
    // 			alert('data gagal diubah!');
    // 			document.location.href = 'profile-show.php';
    // 		</script>
    // 	";
    // }
}
?>
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">UBAH DATA</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $nom["id"]; ?>">
        <div class="form-group">
            <label for="nomor">NO</label>
            <div class="col-sm-5">
                <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor" value="<?= $nom['id']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="nama">NAMA</label>
            <div class="col-sm-5">
                <input type="text" id="dari" name="nama" class="form-control" placeholder="Nama" value="<?= $nom['nama']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <div class="col-sm-5">
                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $nom["tgl"]; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="text">KETERANGAN</label>
            <div class="col-sm-5">
                <textarea class="form-control" id="text" name="text" rows="3"><?= $nom["text"]; ?></textarea>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>