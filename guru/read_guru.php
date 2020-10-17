<?php
require_once('../koneksi.php');
require_once('../functions/get.php');
require_once('../functions/add.php');
?>
<!-- Guru-->
<section class="resume-section" id="guru">
  <div class="resume-section-content">
    <h2 class="mb-3">Data Guru</h2>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="flex-grow-1">
        <a href="#tambah_guru" class="btn btn-info" data-toggle="modal"><i class="far fa-plus-square"></i> Tambah</a>
        <br><br>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Nama Guru</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($result_guru as $data) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><a href='update_guru.php?id=<?= $data['id_guru']; ?>' class='btn btn-warning'><i class='fas fa-edit'></i></a> | 
                <a href='hapus.php?id=<?= $data["id_user"]; ?>' class='btn btn-danger' onclick='return confirm("Yakin mau dihapus?")';><i class='fas fa-trash-alt'></i></a></td>
                <td><?= $data['nama_guru'] ?></td>
                <td><?= $data['username'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>