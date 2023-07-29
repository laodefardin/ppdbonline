<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 
  
  $status = $_POST['status'];
  if ($status === 'pengumuman'){
    $pengumuman = $_POST['pengumuman'];
    $insert = "INSERT INTO tb_pengumuman (pengumuman) VALUES ('$pengumuman')";
  
    $sql = mysqli_query($koneksi, $insert);
  
    $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
    $_SESSION['status'] = 'success';
    echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
    die();  
  }elseif($status === 'editpengumuman'){
    $pengumuman = $_POST['pengumuman'];
    $id = $_POST['id'];

    $update = "UPDATE tb_pengumuman SET pengumuman='$pengumuman' WHERE id = '$id' ";  

    $sql = mysqli_query($koneksi, $update);
    $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
    $_SESSION['status'] = 'success';
    echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
    die();    
  }elseif($status === 'infoppdb'){
    $deskripsi_ppdb = $_POST['deskripsi_ppdb'];
    $tgl_ppdb = $_POST['tgl_ppdb'];

    $insert = "INSERT INTO tb_infoppdb (deskripsi_ppdb, tgl_ppdb) VALUES ('$deskripsi_ppdb','$tgl_ppdb')";
  
    $sql = mysqli_query($koneksi, $insert);
  
    $_SESSION['pesan'] = 'Data Berhasil Di Tambah';
    $_SESSION['status'] = 'success';
    echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
    die(); 
  }elseif($status === 'editinfoppdb'){
    $deskripsi_ppdb = $_POST['deskripsi_ppdb'];
    $tgl_ppdb = $_POST['tgl_ppdb'];

    $id = $_POST['id'];

    $update = "UPDATE tb_infoppdb SET deskripsi_ppdb='$deskripsi_ppdb', tgl_ppdb='$tgl_ppdb' WHERE id = '$id' ";  

    $sql = mysqli_query($koneksi, $update);
    $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
    $_SESSION['status'] = 'success';
    echo "<script> document.location.href='../../views/admin/konfigurasi-informasi-user';</script>";
    die();  
  }
 
?>