<?php include "tema/header.php"; ?>
<?php 
include '../koneksi.php';
include '../fadmin.php';

$admin = query("SELECT * FROM `admin`");
?>    


        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">D a t a    A d m i n</h1>
          <br><br>
          <div class="card shadow mb-4">
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
                  <?php foreach( $admin as $row ) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['userid'];?></td>
                      <td><?php echo $row['username'];?></td>
                      <td><?php echo $row['password'];?></td>
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
      </div>

<?php include "tema/footer.php"; ?>