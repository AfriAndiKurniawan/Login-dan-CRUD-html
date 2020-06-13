<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $db = "crud_gc"; 
  $koneksi = mysqli_connect($host,$user,$pass,$db); 

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  } else {
  echo "berhasil";
  }
  
?>
