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
      echo "
      <script>
        alert('Username already exist');
        document.location.href = 'main.php';
      </script>
    ";
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

function new_murid($data){
  global $db;
  global $result_murid;

  $tnama_murid = $data['tnama_murid'];
  $tmusername = $data['tmusername'];
  $tmpassword = $data['tmpassword'];

  foreach ($result_murid as $dt) {
    if ($tmusername == $dt['username']) {
      echo "
        <script>
          alert('Username already exist');
          document.location.href = 'main.php#murid';
        </script>
      ";
    } elseif($tmusername != $dt['username']) {
      $add_tbusermurid = "INSERT INTO user(username,password,id_level) VALUES ('$tmusername','$tmpassword',2)";
      mysqli_query($db, $add_tbusermurid);

      $find = "SELECT * FROM user WHERE username = '$tmusername'";
      $result_find = mysqli_query($db, $find);

      foreach ($result_find as $dt) {
        $iduser = $dt['id_user'];
        $add_tbmurid = "INSERT INTO murid(id_user,nama_murid) VALUES ('$iduser','$tnama_murid')";
        mysqli_query($db, $add_tbmurid);

        return mysqli_affected_rows($db);
      }
    }
  }
}
