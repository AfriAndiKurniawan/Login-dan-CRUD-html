<?php
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama_produk   = $_POST['nama_produk'];
  $deskripsi     = $_POST['deskripsi'];
  $harga_beli    = $_POST['harga_beli'];
  $harga_jual    = $_POST['harga_jual'];

   $query = "INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //akan redirect ke halaman index.php
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

 

