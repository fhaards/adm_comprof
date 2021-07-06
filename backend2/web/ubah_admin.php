<?php include "tema/header.php"; ?>
<?php
include '../koneksi.php';


$id = $_GET["id"];


$admin = query("SELECT * FROM `admin` WHERE id = $id")[0];



if( isset($_POST["submit"]) ) {
  

  if( ubah_admin($_POST) > 0 ) {
    echo "
      <script>
        alert('Admin berhasil diubah!');
        document.location.href = 'admin.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Admin gagal diubah!');
        document.location.href = 'admin.php';
      </script>
    ";
  }
}
?>       
        <div class="container-fluid">


          <h1 class="h3 mb-4 text-gray-800">Ubah Data Admin</h1>

                <div>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $admin["id"]; ?>">
                        <div class="form-group">
                            <label for="userid">User Id</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="userid" name="userid"
                                value="<?= $admin["userid"]; ?>">
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="username" name="username"
                                value="<?= $admin["username"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="col-sm-5">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Sumber Berkas dari..!" value="<?= $admin["password"]; ?>">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                    </form>

                </div>
        </div>
 

      </div>

<?php include "tema/footer.php"; ?>