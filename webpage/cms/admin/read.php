<?php
$admin = mysqli_query($conn, "SELECT * FROM `admin`");
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
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($admin as $row) : ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['userid']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td>
                                    <a href="hapus_admin.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>