<?php include "../tema/header.php"; ?>

<?php
include '../../koneksi.php';
include 'ins-profile.php';
?>
<?php

$profile = query("SELECT * FROM `profile`");

if (isset($_POST["submit"])) {

    if (tambah_profile($_POST) > 0) {
        echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'profile-show.php';
      </script>
    ";
    } else {
        echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'profile-show.php';
      </script>
    ";
    }
}
?>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">D A T A P R O F I L E</h1>



    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="box-header with-border">
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info">
                        <li class="fa fa-plus"></li> Tambah
                    </a></h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>TANGGAL</th>
                            <th>KETERANGAN</th>
                            <th>AKSi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($profile as $row) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['text']; ?></td>
                                <td>
                                    <a href="ubah_profile.php" class="btn btn-info" data-toggle="modal" data-target="my-modal2">
                                        <li class="fa fa-pencil-alt"></li> Edit
                                    </a>
                                    <a href="hapus_profile.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>


<div class="modal fade" id="my-modal2 " tabindex="-1" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabe2">Edit</h4>
            </div>
            <div class="modal-body center">
                <form role="form" action="jj.php" method="post">


                    <?php
                    $id = $_GET["id"];
                    $nom = query("SELECT * FROM comprof WHERE id = $id");
                    if (isset($_POST["submit"])) {
                        if (ubah_nomor($_POST) > 0) {
                            echo "<script>
                                    alert('data berhasil diubah!');
                                    document.location.href = '#';
                                </script>
                                ";
                        } else {
                            echo "<script>
                                    alert('data gagal diubah!');
                                    document.location.href = '#';
                                    </script>
                                ";  }
                    }
                    ?>
                    <input type="hidden" name="id" value="<?= $nom["id"]; ?>">
                    <div class="form-group">
                        <label>NO</label>
                        <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor" value="<?= $nom["id"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="<?= $nom["nama"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $nom["date"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea class="form-control" id="text" name="text" rows="3"><?= $nom["text"]; ?></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                <button type="submit" name="submit2" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
</form>



<form action="" method="post">
    <div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Tambah data</h4>
                </div>

                <div class="modal-body center">
                    <!--Content-->

                    <div class="form-group">
                        <label>NO</label>
                        <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor" required>
                    </div>

                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" id="dari" name="nama" class="form-control" placeholder="nama">
                    </div>

                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea input type="text" id="text" name="text" class="form-control" placeholder="text"></textarea>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

                </div>

            </div>
        </div>
    </div>
</form>




<?php include "tema/footer.php"; ?>