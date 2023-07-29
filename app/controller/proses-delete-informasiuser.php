<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['id'];
$status = $_GET['status'];

if ($status === 'pengumuman'){
  $hapus = "DELETE FROM tb_pengumuman WHERE id  = '$id'";

  $proses3 = $koneksi->query($hapus);
  $_SESSION['pesan'] = 'Data Berhasil Di Hapus';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
  die();
}else{
$hapus = "DELETE FROM tb_infoppdb WHERE id  = '$id'";
$proses3 = $koneksi->query($hapus);
$_SESSION['pesan'] = 'Data Berhasil Di Hapus';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
die();
}
?>