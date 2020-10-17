<?php
require_once('../koneksi.php');
require_once('../functions/get.php');
require_once('../functions/add.php');
?>
<!-- Data Murid-->
<section class="resume-section" id="murid">
  <div class="resume-section-content">
    <h2 class="mb-3">Data Murid</h2>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="flex-grow-1">
        <a href="#tambah_murid" class="btn btn-info" data-toggle="modal"><i class="far fa-plus-square"></i> Tambah</a>
        <br><br>
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Nama Murid</th>
              <th>Kelas</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($result_murid as $data) {
              echo "<tr>
                <td>" . $no++ . "</td>
                <td><a href='#update_murid' class='btn btn-warning' data-toggle='modal' onclick='murid_detail(" . $data["id_murid"] . ")'><i class='fas fa-edit'></i></a> | 
                <a href='hapus.php?id=" . $data["id_user"] . "' class='btn btn-danger' onclick='return confirm(\"Yakin mau dihapus?\")'><i class='fas fa-trash-alt'></i></a></td>
                <td>" . $data['nama_murid'] . "</td>
                <td>" . $data['kelas'] . "</td>
                <td>" . $data['username'] . "</td>
              </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>