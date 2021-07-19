<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submitCompanyAbout"])) {
    if (tambahAbout($_POST) > 0) {
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
?>
<div class="mb-3">
    <div class="d-flex flex-column flex-lg-row flex-md-col justify-content-sm-end align-items-start">
        <div class="page-title mx-5">
            <h3> Company <span> Profile </span> </h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4>About Us</h4>
        <hr>
        <?php if (queryCompanyAbout() == 0) : ?>
            Data is Empty <br><br>
            <button type="button" data-toggle="modal" data-target="#inputCompanyAbout" class="btn btn-danger btn-special">
                <span>Tambah Data</span>
                <i class="fa fa-plus"></i>
            </button>

            <div class="modal fade" id="inputCompanyAbout" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Data - Company Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container">
                           <?php include "company/about/form_input.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <?php include "company/about/form_edit.php"; ?>
        <?php endif; ?>
    </div>
</div>