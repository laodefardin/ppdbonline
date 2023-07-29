<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 
  $setdaftar = $_POST['setdaftar'];
  $setpengumuman = $_POST['setpengumuman'];
 
  $update = "UPDATE tb_konfigurasi SET setdaftar ='$setdaftar', setpengumuman='$setpengumuman'";

  $sql = mysqli_query($koneksi, $update);

  $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/konfigurasi-pendaftaran';</script>";
  die();  
?>