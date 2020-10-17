<?php
require_once('../koneksi.php');

function update_guru($data) {
  global $db;

  // htmlspecialchars untuk mencegah user mengirim data format html.
  $idguru = $data["id_guru"];
  $iduser = $data["id_user"];
  $upnama_guru = htmlspecialchars($data["upnama_guru"]);
  $ugusername = htmlspecialchars($data["ugusername"]);
  $ugpassword = htmlspecialchars($data["ugpassword"]);

  $update_tbuserguru = "UPDATE `user` SET `username` = '$ugusername', `password` = '$ugpassword' WHERE `user`.`id_user` = $iduser";
  mysqli_query($db, $update_tbuserguru);

  $update_tbguru = "UPDATE `guru` SET `nama_guru` = '$upnama_guru' WHERE `guru`.`id_guru` = $idguru";
  mysqli_query($db, $update_tbguru);
  return mysqli_affected_rows($db);
}
?>