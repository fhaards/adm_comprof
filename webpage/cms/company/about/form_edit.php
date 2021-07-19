<?php
if (isset($_POST["submitCompanyAboutEdit"])) {
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?company=about';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?company=about';
			</script>
		";
    }
}
$queryCompAbout = getQuery("SELECT * FROM company_about");
?>
<form method="POST" action="" class="row">
    <input type="hidden" name="id_comp_about" value="<?= $queryCompAbout["id_comp_about"]; ?>">
    <div class="form-group col-md-6">
        <label>About Us</label>
        <textarea name="comp_about" id="comp_about" class="tinymce form-control">
            <?= $queryCompAbout['comp_about']; ?>
        </textarea>
    </div>
    <div class=" col-md-6">
        <div class="form-group">
            <label>Visi</label>
            <textarea name="comp_visi" id="comp_visi" class="tinymce form-control">
            <?= $queryCompAbout['comp_visi']; ?>
            </textarea>
        </div>
        <div class="form-group">
            <label>Misi</label>
            <textarea name="comp_misi" id="comp_misi" class="tinymce form-control">
            <?= $queryCompAbout['comp_misi']; ?>
            </textarea>
        </div>
    </div>

    <div class="col-md-12">
        <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
        <button type="submit" name="submitCompanyAboutEdit" class="btn btn-danger btn-special"><span> Save </span> <i class="fa fa-save"></i></button>
    </div>
</form>