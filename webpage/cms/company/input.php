<?php 
$comp_name   =$_POST['comp_name'];
$comp_email  =$_POST['comp_email'];
$comp_phone1 =$_POST['comp_phone1'];
$comp_phone2 =$_POST['comp_phone2'];
$comp_address=$_POST['comp_address'];

$file_gambar=$_FILES['file']['name'];
$tmp_gambar=$_FILES['file']['tmp_name'];

$file_gambar2=$_FILES['file2']['name'];
$tmp_gambar2=$_FILES['file2']['tmp_name'];

$sqlCompany= mysqli_query($conn,"INSERT INTO `company` (`comp_name`, `comp_address`, `comp_email`, `comp_phone`, `comp_phone2`, `comp_logo`, `comp_logo2`) 
            VALUES ('$comp_name', '$comp_email', '$comp_phone1', '$comp_phone2', '$comp_address', '$file_gambar', '$file_gambar2')");

$direktori="company/img/";
	
move_uploaded_file($tmp_gambar,$direktori.$file_gambar);
move_uploaded_file($tmp_gambar2,$direktori.$file_gambar2);

echo '<script type="text/javascript">alert("ENTRY NEW DATA SUCCESS");</script>';
echo "<meta http-equiv='refresh' content='0; url=index.php?company=read'>";
?>