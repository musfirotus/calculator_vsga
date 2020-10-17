<div class="modal fade" id="update_murid">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data Murid</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">
          <input type="hidden" name="id_murid" id="id_murid">
          <label for="upnama_murid">Nama Murid</label><br>
          <input class="form-control" type="text" name="upnama_murid" id="upnama_murid" required><br>
          <label for="upmusername">Username</label><br>
          <input class="form-control" type="text" name="upmusername" id="upmusername" required><br>
          <label for="upmpassword">Password</label><br>
          <input class="form-control" type="password" name="upmpassword" id="upmpassword" required><br>
          <button type="submit" name="simpan" class="btn btn-success"><i class="far fa-save"></i></button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>