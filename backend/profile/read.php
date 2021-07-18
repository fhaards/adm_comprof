<?php 
include '../koneksi.php';
require 'functions.php';
$profile = query("SELECT * FROM profile");



?>
<!DOCTYPE html>
<html>
<body>

<h1>Data Profile</h1>

<a href="profile/tambah.php">Tambah</a>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
        <th>NO</th>
		<th>KETERANGAN</th>
        <th>AKSi</th>
</tr>

	<?php $i = 1; ?>
	<?php foreach( $profile as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?php echo $row['keterangan']; ?></td>
		<td>
			<a href="profile/ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="profile/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>