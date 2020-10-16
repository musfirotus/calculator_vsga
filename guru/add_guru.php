<!-- Modal Tambah Guru -->
<div class="modal fade" id="tambah_guru">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Guru</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">
          <label for="tnama_guru">Nama Guru</label><br>
          <input class="form-control" type="text" name="tnama_guru" id="tnama_guru" required><br>
          <label for="tgusername">Username</label><br>
          <input class="form-control" type="text" name="tgusername" id="tgusername" required><br>
          <label for="tgpassword">Password</label><br>
          <input class="form-control" type="password" name="tgpassword" id="tgpassword" required><br>
          <button type="submit" name="add_guru" class="btn btn-success"><i class="far fa-save"></i></button> 
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once('../functions/add.php');

if (isset($_POST["add_guru"])) {
  if (new_guru($_POST) > 0) {
    echo "
      <script>
        alert('Berhasil tambah data guru');
        document.location.href = 'main.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Gagal tambah data guru');
        document.location.href = 'main.php';
      </script>
    ";
  }
}
?>