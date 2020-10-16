<?php
require('../koneksi.php');

$result_guru = mysqli_query($db, "SELECT * FROM guru INNER JOIN user ON guru.id_user = user.id_user INNER JOIN level ON user.id_level = level.id_level WHERE level.level = 1");
$result_murid = mysqli_query($db, "SELECT * FROM murid INNER JOIN kelas ON murid.id_kelas = kelas.id_kelas INNER JOIN user ON murid.id_user = user.id_user INNER JOIN level ON user.id_level = level.id_level WHERE level.id_level = 2");
?>