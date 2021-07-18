<?php
session_start();
include "koneksi.php";
error_reporting(0);
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
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/sb-admin-2.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">


  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script> -->
  <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/custom.js"></script>

</head>

<body id="page-top">
  <?php
  if (isset($_SESSION['username'])) {
  ?>
    <div id="wrapper">

      <?php include "templates/sidenav.php"; ?>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <?php include "templates/topnav.php"; ?>
          <div class="container-fluid">
            <?php include "konten_list.php"; ?>
          </div>
        </div>
      </div>
    </div>
  <?php
  } else {
    include "form_login.php";
  }

  ?>
  <script src="assets/js/sb-admin-2.js"></script>
</body>

</html>