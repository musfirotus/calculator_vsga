<?php
require('../koneksi.php');
require_once('get.php');

function new_guru($data){
  global $db;
  global $result_guru;

  $tnama_guru = $data["tnama_guru"];
  $tgusername = $data["tgusername"];
  $tgpassword = $data["tgpassword"];

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
        
        return mysqli_affected_rows($db);
      }
    }
  }
}
?>