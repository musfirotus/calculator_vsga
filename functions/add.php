<?php
require('../koneksi.php');
require('get.php');
if (isset($_POST["add_guru"])) {
  $tnama_guru = $_POST["tnama_guru"];
  $tgusername = $_POST["tgusername"];
  $tgpassword = $_POST["tgpassword"];

  foreach($result_guru as $dt) {
    if ($tgusername == $dt['username']) {
      echo "<script type='text/javascript'>alert('Username already exist.')</script>";
    } elseif($tgusername != $dt['username']) {
      $add_tbuserguru = "INSERT INTO user(username,password,id_level) VALUES ('$tgusername','$tgpassword',1)";
      mysqli_query($db, $add_tbuserguru);

      $find = "SELECT * FROM user WHERE user.username = '$tgusername'";
      $result_find = mysqli_query($db, $find);

      foreach($result_find as $dt) {
        $iduser = $dt['id_user'];
        $add_tbguru = "INSERT INTO guru(id_user,nama_guru) VALUES ('$iduser','$tnama_guru')";
        mysqli_query($db, $add_tbguru);
      }

      header("Refresh:0;");
    }
  }
}
?>