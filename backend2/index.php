<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
	header("location: web/index.php"); // Kita Redirect ke halaman welcome.php
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

  <title>ADIDAYA DUTA MITRAKOM</title>
  <link href="tmp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <link href="tmp/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">


    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
    
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">                    
                  <div style="color: red;margin-bottom: 15px;">
                      <?php
                      if(isset($_COOKIE["message"])){
                        echo $_COOKIE["message"];
                      }
                      ?>
                  </div>
                    <h1 class="h4 text-gray-900 mb-4">S e l a m a t D a t a n g</h1>
                  </div>
                  <form action="login.php" method="post" class="user">
                    <div class="form-group">
                      <input type="text" id="userid" name="userid" class="form-control form-control-user" placeholder="User Id...">
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>                    
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                      Login</button>       
                  </form>
                </div>
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
