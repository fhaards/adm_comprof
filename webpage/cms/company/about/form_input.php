<form method="POST" action="">
    <div class="form-group">
        <label>About Us</label>
        <textarea name="comp_about" id="comp_about" class="tinymce form-control" ></textarea>
    </div>
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <label>Visi</label>
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <textarea name="comp_visi" id="comp_visi" class="tinymce form-control" ></textarea>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <label>Misi</label>
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <textarea name="comp_misi" id="comp_misi" class="tinymce form-control" ></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
        <button type="submit" name="submitCompanyAbout" class="btn btn-danger btn-special"><span> Save </span> <i class="fa fa-save"></i></button>
    </div>
</form>