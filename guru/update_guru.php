<?php
require_once('../koneksi.php');
require_once('../functions/get.php');
require_once('../functions/update.php');

$id = $_GET['id'];

$find_guru = mysqli_query($db, "SELECT * FROM guru
INNER JOIN user ON guru.id_user = user.id_user
INNER JOIN level ON user.id_level = level.id_level
WHERE guru.id_guru = $id");

if (isset($_POST["update_guru"])) {
  if (update_guru($_POST) > 0) {
    echo "
      <script>
        alert('Berhasil update data guru');
        document.location.href = 'main.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Gagal update data guru');
        document.location.href = 'main.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>VSGA 2020 - Guru - Kalkulator</title>
  <?php require_once('../head.php'); ?>
</head>

<body id="page-top">
  <?php require('navbar.php'); ?>
  <!-- Page Content-->
  <div class="container">
    <!-- Guru-->
    <section class="resume-section" id="ubah_guru">
      <div class="resume-section-content">
        <h2 class="mb-3">Update Data Guru</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <form method="post" action="" enctype="multipart/form-data">
              <?php foreach ($find_guru as $dt) { ?>
                <input type="hidden" name="id_guru" value="<?= $dt['id_guru']; ?>">
                <input type="hidden" name="id_user" value="<?= $dt['id_user']; ?>">
                <label for="upnama_guru">Nama Guru</label><br>
                <input value="<?= $dt['nama_guru'] ?>" class="form-control" type="text" name="upnama_guru" id="upnama_guru" required><br>
                <label for="ugusername">Username</label><br>
                <input value="<?= $dt['username'] ?>" class="form-control" type="text" name="ugusername" id="ugusername" required><br>
                <label for="ugpassword">Password</label><br>
                <input value="<?= $dt['password'] ?>" class="form-control" type="password" name="ugpassword" id="ugpassword" required><br>
                <button type="submit" name="update_guru" class="btn btn-success"><i class="far fa-save"></i></button>
                <a href="main.php" class="btn btn-danger"><i class="far fa-window-close"></i></a>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </section>
    <hr class="m-0" />
  </div>
  <?php require_once('../body.php'); ?>
</body>

</html>