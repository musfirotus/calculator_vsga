<?php
require('../koneksi.php');

function hapus($id)
{
  global $db;

  mysqli_query($db, "DELETE FROM user WHERE id_user = $id");
  return mysqli_affected_rows($db);
}
?>