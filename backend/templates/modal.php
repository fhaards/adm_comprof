<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="my-modal2 " tabindex="-1" role="dialog">
    <form role="form" action="jj.php" method="post">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabe2">Edit</h4>
                </div>
                <div class="modal-body center">

                    <?php
                    $id = $_GET["id"];
                    $nom = query("SELECT * FROM comprof WHERE id = $id");
                    if (isset($_POST["submit"])) {
                        // if (ubah_nomor($_POST) > 0) {
                        //     echo "<script>
                        //             alert('data berhasil diubah!');
                        //             document.location.href = '#';
                        //         </script>
                        //         ";
                        // } else {
                        //     echo "<script>
                        //             alert('data gagal diubah!');
                        //             document.location.href = '#';
                        //             </script>
                        //         ";
                        // }
                    }
                    ?>
                    <input type="hidden" name="id" value="<?= $nom["id"]; ?>">
                    <div class="form-group">
                        <label>NO</label>
                        <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor" value="<?= $nom["id"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="<?= $nom["nama"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $nom["date"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea class="form-control" id="text" name="text" rows="3"><?= $nom["text"]; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                    <button type="submit" name="submit2" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="inputProfileModal" tabindex="-1" role="dialog" aria-labelledby="nomor">
    <form action="" method="post">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Tambah data</h4>
                </div>

                <div class="modal-body center">
                    <!--Content-->

                    <div class="form-group">
                        <label>NO</label>
                        <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor" required>
                    </div>

                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" id="dari" name="nama" class="form-control" placeholder="nama">
                    </div>

                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea input type="text" id="text" name="text" class="form-control" placeholder="text"></textarea>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

                </div>

            </div>
        </div>
    </form>
</div>