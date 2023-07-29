<?php
session_start(); 
if (isset($_POST['tambah'])){
// Mengatur zona waktu sesuai dengan lokasi Anda
date_default_timezone_set('Asia/Makassar');
// Mendapatkan tanggal sekarang
$currentDate = date('Y-m-d H:i:s');

include "../config/koneksi.php";

$img = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$gambar_baru = date('dYHiS').$img;
$path = "../../assets/image/galery/".$gambar_baru;
move_uploaded_file($tmp, $path);

$query = 'INSERT INTO tb_galerysekolah ( foto,date )
  VALUES ("'.$gambar_baru.'","'.$currentDate.'")';

    $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    $_SESSION['pesan'] = 'Data Berhasil Di Tambahkan';
    $_SESSION['status'] = 'success';
    echo "<script> document.location.href='../../views/admin/galery-sekolah';</script>";
    die();  
  }
?>