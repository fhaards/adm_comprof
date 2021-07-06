
<?php

include 'koneksi.php';
include 'fadmin.php';


if( isset($_POST["register"]) )  {

  if (registrasi($_POST) > 0 ) {
    echo "<script>alert('user baru berhasil ditambahkan!'); </script>";
  } else {
    echo mysqli_error($conn);
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <link href="tmp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="tmp/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form action="" method="post" class="user">
                <div class="form-group" >
                  <input type="text" id="userid" name="userid" class="form-control form-control-user" placeholder="User Id" required>
                </div>
                <div class="form-group">
                  <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="Nama Pengguna" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" id="password2" name="password2" class="form-control form-control-user" placeholder="Ulangi Password" required>
                  </div>
                </div>
                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">
                  Buat Akun</button>                
              </form>
              <hr>              
              <div class="text-center">
                <a class="small" href="index.php">Apakah Kamu Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="tmp/vendor/jquery/jquery.min.js"></script>
  <script src="tmp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="tmp/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="tmp/js/sb-admin-2.min.js"></script>

</body>
</html>
