<?php
require_once('../functions/delete.php');

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "
    <script>
      alert('Berhasil hapus data');
      document.location.href = 'main.php';
    </script>
  ";
} else {
  echo "
    <script>
      alert('Gagal hapus data');
      document.location.href = 'main.php';
    </script>
  ";
}
?>