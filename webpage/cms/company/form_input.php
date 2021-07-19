<form method="POST" action="index.php?company=input" enctype="multipart/form-data">
    <div class="form-group">
        <label>Company Name</label>
        <input name="comp_name" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Company Email</label>
        <input name="comp_email" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Company Phone</label>
        <div class="form-row">
            <div class="form-group col-md-6">
                <span class="">Whatsapp Number</span>
                <input name="comp_phone1" type="text" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <span><br></span>
                <input name="comp_phone2" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Company Address</label>
        <textarea name="comp_address" class="form-control" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Company Logo 1</label>
        <input type="file" name="file" class="form-control-file border p-1 rounded">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Company Logo 2</label>
        <input type="file" name="file2" class="form-control-file border p-1 rounded">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
        <button type="submit" name="submit" class="btn btn-danger">Simpan</button>
    </div>
</form>