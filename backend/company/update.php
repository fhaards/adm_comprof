<?php
$idcompany   = $_POST['idcompany'];
$comp_name   = $_POST['comp_name'];
$comp_email  = $_POST['comp_email'];
$comp_phone1 = $_POST['comp_phone1'];
$comp_phone2 = $_POST['comp_phone2'];
$comp_address = $_POST['comp_address'];
$gambar_lama1 = $_POST['gambar_lama1'];
$gambar_lama2 = $_POST['gambar_lama2'];

$sqlCompany = mysqli_query($conn, "UPDATE `company` SET `comp_name` = '$comp_name', 
                                                        `comp_address` = '$comp_address', 
                                                        `comp_email` = '$comp_email', 
                                                        `comp_phone` = '$comp_phone1', 
                                                        `comp_phone2` = '$comp_phone2' 
WHERE `company`.`comp_id` = '$idcompany'");
$direktori = "company/img/";

if ($sqlCompany) {
    if ($_FILES['file']['size'] == 0) {
        $file_gambar_n1 = $gambar_lama1;
    } else {
        $file_gambar_n1 = $_FILES['file']['name'];
        $tmp_gambar = $_FILES['file']['tmp_name'];
        $sqlCompany = mysqli_query($conn, "UPDATE `company` SET `comp_logo` = '$file_gambar_n1'  WHERE `company`.`comp_id` = '$idcompany'");
        move_uploaded_file($tmp_gambar, $direktori . $file_gambar_n1);
        unlink($direktori.$gambar_lama1);
    }

    if ($_FILES['file2']['size'] == 0) {
        $file_gambar_n2 = $gambar_lama2;
    } else {
        $file_gambar_n2 = $_FILES['file2']['name'];
        $tmp_gambar2 = $_FILES['file2']['tmp_name'];
        $sqlCompany = mysqli_query($conn, "UPDATE `company` SET `comp_logo2` = '$file_gambar_n2'  WHERE `company`.`comp_id` = '$idcompany'");
        move_uploaded_file($tmp_gambar2, $direktori . $file_gambar_n2);
        unlink($direktori.$gambar_lama2);
    }


    echo '<script type="text/javascript">alert("UPDATE SUCCESS");</script>';
    echo "<meta http-equiv='refresh' content='0; url=index.php?company=read'>";
}

?>