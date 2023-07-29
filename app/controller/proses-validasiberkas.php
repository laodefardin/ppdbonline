<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['no-pendaftaran'];
$status = $_GET['status'];

$query = $koneksi->query("SELECT * FROM tb_siswa WHERE no_pendaftaran = '$id' ");

$data = mysqli_fetch_array($query);
$status_administrasi = $data['status_administrasi'];

if($status === 'Lulus'){
  $update = "UPDATE tb_siswa SET status_administrasi = 'Lulus' WHERE no_pendaftaran = '$id' ";
  $proses = $koneksi->query($update);
  $_SESSION['pesan'] = 'Data Berhasil Di Verifikasi/Lulus';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
  die();

}elseif($status === 'Tidak Lulus'){
  $update = "UPDATE tb_siswa SET status_administrasi = 'Tidak Lulus' WHERE no_pendaftaran = '$id' ";
  $proses = $koneksi->query($update);
  $_SESSION['pesan'] = 'Data Berhasil DiUbah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
  die();

}else{
  $update = "UPDATE tb_siswa SET status_administrasi = 'Belum diVerifikasi' WHERE no_pendaftaran = '$id' ";
  $proses = $koneksi->query($update);
  $_SESSION['pesan'] = 'Data Berhasil Di Batalkan';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
  die();
}