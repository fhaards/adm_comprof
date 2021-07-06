<?php
$profile = mysqli_query($conn, "SELECT * FROM `profile`");

// if (isset($_POST["submit"])) {
//     if (tambah_profile($_POST) > 0) {
//         echo    "<script>
//                     alert('data berhasil ditambahkan!');
//                     document.location.href = 'profile-show.php';
//                 </script>
//     ";
//     } else {
//         echo "<script>
//                 alert('data gagal ditambahkan!');
//                 document.location.href = 'profile-show.php';
//             </script>";
//     }
// }

?>
<div class="container-fluid mb-3">
    <div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
        <div class="page-title mx-5">
            <h3> Data <span> Profile </span> </h3>
        </div>
        <div class="">
            <button type="button" data-toggle="modal" data-target="#inputProfileModal" class="btn btn-danger btn-special">
                <span>Tambah Data</span>
                <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="card mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="display table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <a href="index.php?profile=update&id=<?= $row['id']; ?>" class="btn btn-info" data-toggle="modal" data-target="my-modal2">
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

    <div class="modal fade" id="inputProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="" method="post">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Tambah data</h4>
                    </div>

                    <div class="modal-body center">

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
        </form>
    </div>




</div>