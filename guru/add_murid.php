<!-- Modal Tambah Murid -->
<div class="modal fade" id="tambah_murid">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Murid</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">
          <label for="tnama_murid">Nama Murid</label><br>
          <input class="form-control" type="text" name="tnama_murid" id="tnama_murid" required><br>
          <label for="tmusername">Username</label><br>
          <input class="form-control" type="text" name="tmusername" id="tmusername" required><br>
          <label for="tmpassword">Password</label><br>
          <input class="form-control" type="password" name="tmpassword" id="tmpassword" required><br>
          <button type="submit" name="add_murid" class="btn btn-success"><i class="far fa-save"></i></button> 
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>