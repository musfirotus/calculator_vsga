<?php
  $server = "remotemysql.com";
  $username = "Yaa6wEkpTn";
  $password = "SfRfIo7ppl";
  $db_name = "Yaa6wEkpTn";

  $db = mysqli_connect($server, $username, $password, $db_name);
  if (!$db) {
    die("Gagal konek loh! <br>" . mysqli_connect_error());
  }

  // function query($queries){
  //   global $db;
  //   $result = mysqli_query($db, $queries);
  //   $rows = [];
  //   while($row = mysqli_fetch_assoc($result)){
  //     $rows[] = $row;
  //   }
  //   return $rows;
  // }
?>