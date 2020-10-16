<?php
  $server = "remotemysql.com";
  $username = "Yaa6wEkpTn";
  $password = "SfRfIo7ppl";
  $db_name = "Yaa6wEkpTn";

  $db = mysqli_connect($server, $username, $password, $db_name);
  if (!$db) {
    die("Gagal konek loh! <br>" . mysqli_connect_error());
  }
?>