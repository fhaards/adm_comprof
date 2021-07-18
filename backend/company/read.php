<?php
$cek_company = mysqli_query($conn, "SELECT * FROM `company`");
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
        <?php if (mysqli_num_rows($cek_company) == 0) : ?>
            Data is Empty <br><br>
            <button type="button" data-toggle="modal" data-target="#inputCompanyProfileModal" class="btn btn-danger btn-special">
                <span>Tambah Data</span>
                <i class="fa fa-plus"></i>
            </button>

            <div class="modal fade" id="inputCompanyProfileModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Data - Company Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container">
                            <?php include "form_input.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <?php include "form_update.php"; ?>
        <?php endif; ?>
    </div>
</div>