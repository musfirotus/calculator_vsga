<?php
require('../koneksi.php');
?>
<div class="modal fade" id="update_guru">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data Guru</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
      </div>
      <div class="modal-body">
        <form method="get" action="../functions/update.php" enctype="multipart/form-data">
          <?php
            $id = $data['id_guru'];
            $query_edit = mysqli_query($db, "SELECT * FROM guru
                                            INNER JOIN user ON guru.id_user = user.id_user
                                            INNER JOIN level ON user.id_level = level.id_level
                                            WHERE guru.id_guru = '$id'");
            while($row = mysql_fetch_array($query_edit)) {
          ?>
          <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">
          <label for="upnama_guru">Nama Guru</label><br>
          <input class="form-control" type="text" name="upnama_guru" value="<?php echo $row['nama_guru']; ?>" required><br>
          <label for="upgusername">Username</label><br>
          <input class="form-control" type="text" name="upgusername" value="<?php echo $row['username']; ?>" required><br>
          <label for="upgpassword">Password</label><br>
          <input class="form-control" type="password" name="upgpassword" value="<?php echo $row['password']; ?>" required><br>
          <button type="submit" name="update_guru" class="btn btn-success"><i class="far fa-save"></i></button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-window-close"></i></button>
          <?php } ?>
        </form>
      </div>
    </div>
  </div>
</div>