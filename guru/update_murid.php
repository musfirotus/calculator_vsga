<?php
require_once('../koneksi.php');
require_once('../functions/get.php');
require_once('../functions/update.php');

$id = $_GET['id'];

$find_murid = mysqli_query($db, "SELECT * FROM `murid`
INNER JOIN `kelas` ON `murid`.`id_kelas` = `kelas`.`id_kelas`
INNER JOIN `user` ON `murid`.`id_user` = `user`.`id_user`
INNER JOIN `level` ON `user`.`id_level` = `level`.`id_level`
WHERE `murid`.`id_murid` = $id");

$find_class = mysqli_query($db, "SELECT * FROM `kelas`");
$find_not_class = mysqli_query($db, "SELECT * FROM `kelas` WHERE `kelas` != '-'");

if (isset($_POST["update_murid"])) {
  if (update_murid($_POST) > 0) {
    echo "
      <script>
        alert('Berhasil update data murid');
        document.location.href = 'main.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Gagal update data murid');
        document.location.href = 'main.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VSGA 2020 - Guru - Kalkulator</title>
  <?php require_once('../head.php'); ?>
</head>

<body>
  <?php require_once('navbar.php'); ?>
  <section class="resume-section" id="ubah_murid">
    <div class="resume-section-content">
      <h2 class="mb-3">Update Data Murid</h2>
      <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
          <form method="post" action="" enctype="multipart/form-data">
            <?php foreach ($find_murid as $dt) { ?>
              <input type="hidden" name="id_murid" value="<?= $dt['id_murid']; ?>">
              <input type="hidden" name="id_user" value="<?= $dt['id_user']; ?>">
              <input type="hidden" name="id_kelas" value="<?= $dt['id_kelas']; ?>">
              <label for="upnama_murid">Nama Murid</label><br>
              <input value="<?= $dt['nama_murid']; ?>" class="form-control" type="text" name="upnama_murid" id="upnama_murid" required><br>
                <label for="id_kelas">Kelas</label><br>
                <select name="id_kelas" id="id_kelas" class="form-control">
                  <?php if($dt['kelas'] == '-') {
                    foreach($find_class as $kls) { ?>
                      <option value="<?= $kls['id_kelas']; ?>">
                        <?= $kls['kelas']; ?>
                      </option><?php
                    }
                  } elseif($dt['kelas'] != '-'){
                    foreach($find_not_class as $class) { ?>
                      <option value="<?= $class['id_kelas']; ?>">
                        <?= $class['kelas']; ?>
                      </option><?php
                    }
                  } ?>
                </select><br>
              <label for="upmusername">Username</label><br>
              <input value="<?= $dt['username']; ?>" class="form-control" type="text" name="upmusername" id="upmusername" required><br>
              <label for="upmpassword">Password</label><br>
              <input value="<?= $dt['password']; ?>" class="form-control" type="password" name="upmpassword" id="upmpassword" required><br>
              <button type="submit" name="update_murid" class="btn btn-success"><i class="far fa-save"></i></button>
              <a href="main.php" class="btn btn-danger"><i class="far fa-window-close"></i></a>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </section>
  <hr class="m-0" />
</body>

</html>