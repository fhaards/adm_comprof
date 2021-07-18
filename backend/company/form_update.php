<?php
$up_t_c = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `company`"));
?>
<form method="POST" action="index.php?company=update" enctype="multipart/form-data" class="m-lg-2 row">
    <input type="hidden" name="idcompany" value="<?= $up_t_c['comp_id'];?>">
    <input type="hidden" name="gambar_lama1" value="<?= $up_t_c['comp_logo'];?>">
    <input type="hidden" name="gambar_lama2" value="<?= $up_t_c['comp_logo2'];?>">
    <div class="col-md-6">
        <div class="form-group">
            <label>Company Name</label>
            <input name="comp_name" type="text" class="form-control" value="<?= $up_t_c['comp_name']; ?>" required>
        </div>
        <div class="form-group">
            <label>Company Email</label>
            <input name="comp_email" type="text" class="form-control" value="<?= $up_t_c['comp_email']; ?>" required>
        </div>
        <div class="form-group">
            <label>Company Phone</label>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <span class="">Whatsapp Number</span>
                    <input name="comp_phone1" type="text" class="form-control" value="<?= $up_t_c['comp_phone']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <span><br></span>
                    <input name="comp_phone2" type="text" class="form-control" value="<?= $up_t_c['comp_phone2']; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Company Address</label>
            <textarea name="comp_address" class="form-control" rows="3" required><?= $up_t_c['comp_address']; ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-12">
        <div class="d-flex flex-lg-row flex-column">
            <div class="form-group col-md-5 border rounded p-3">
                <label>Company Logo 1</label>
                <input type="file" name="file" class="form-control-file border p-1 rounded">
                <br>
                <div class="col-md-12">
                    <img class="img-fluid" src="company/img/<?= $up_t_c['comp_logo']; ?>" width="200px" height="200px">
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="form-group col-md-5 border rounded p-3">
                <label>Company Logo 2</label>
                <input type="file" name="file2" class="form-control-file border p-1 rounded">
                <br>
                <div class="col-md-12">
                    <img class="img-fluid" src="company/img/<?= $up_t_c['comp_logo2']; ?>" width="200px" height="200px">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
        <button type="submit" class="btn btn-danger btn-special"> <span> Edit </span> <i class="fa fa-pen"></i></button>
    </div>
   
</form>