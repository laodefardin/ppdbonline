<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 

  $title = $_POST['title'];

  if($title === 'Konfigurasi Informasi Pendaftaran'){
  $info_ppdb2 = $_POST['info_ppdb2'];
  $info_ppdb3 = $_POST['info_ppdb3'];
  $info_prosedur = $_POST['info_prosedur'];

  $update = "UPDATE tb_konfigurasi SET info_ppdb2='$info_ppdb2', info_ppdb3='$info_ppdb3', info_prosedur='$info_prosedur'";
  $sql = mysqli_query($koneksi, $update);
  $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
  $_SESSION['status'] = 'success';
  echo "<script> document.location.href='../../views/admin/konfigurasi-info-pendaftaran';</script>";
  die(); 

  }elseif($title === 'Konfigurasi Aplikasi'){
    $nama_website = $_POST['nama_website'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat_sekolah = $_POST['alamat_sekolah'];
    $telepon_sekolah = $_POST['telepon_sekolah'];
    $email_sekolah = $_POST['email_sekolah'];
    $map_sekolah = mysqli_real_escape_string($koneksi, htmlspecialchars(trim($_POST['map_sekolah'])));
    $nama_kepsek = $_POST['nama_kepsek'];
    $nip_kepsek = $_POST['nip_kepsek'];
    
    $img = $_FILES['foto']['name'];
    $gambar_baru = date('dYHiS').$img;
  
    $tentang_sekolah = $_POST['tentang_sekolah'];
    $tentang_sekolah2 = $_POST['tentang_sekolah2'];
    $visi_sekolah = $_POST['visi_sekolah'];
    $misi_sekolah = $_POST['misi_sekolah'];
    $info_ppdb1 = $_POST['info_ppdb1'];
  
    if(empty($img)){
      $update = "UPDATE tb_konfigurasi SET nama_website = '".$nama_website."', nama_sekolah='".$nama_sekolah."', alamat_sekolah='".$alamat_sekolah."', telepon_sekolah='".$telepon_sekolah."', email_sekolah='".$email_sekolah."', map_sekolah='".$map_sekolah."', nama_kepsek='".$nama_kepsek."', nip_kepsek='".$nip_kepsek."', tentang_sekolah='".$tentang_sekolah."', tentang_sekolah2='".$tentang_sekolah2."', visi_sekolah='".$visi_sekolah."', misi_sekolah='".$misi_sekolah."', info_ppdb1='".$info_ppdb1."' ";
  
      $sql = mysqli_query($koneksi, $update);
  
      $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
      $_SESSION['status'] = 'success';
      echo "<script> document.location.href='../../views/admin/konfigurasi-aplikasi';</script>";
      die(); 
  
    }else{
      $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
      $data = mysqli_fetch_array($query);
      $lokasi = $data['foto_kepsek'];
      $hapus_gbr = "../../assets/image/img/".$lokasi;
      unlink($hapus_gbr);
  
      move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/image/img/'.$gambar_baru);
  
      $update = "UPDATE tb_konfigurasi SET nama_website = '".$nama_website."', nama_sekolah='".$nama_sekolah."', alamat_sekolah='".$alamat_sekolah."', telepon_sekolah='".$telepon_sekolah."', email_sekolah='".$email_sekolah."', map_sekolah='".$map_sekolah."', nama_kepsek='".$nama_kepsek."', nip_kepsek='".$nip_kepsek."', foto_kepsek='$gambar_baru', tentang_sekolah='".$tentang_sekolah."', tentang_sekolah2='".$tentang_sekolah2."', visi_sekolah='".$visi_sekolah."', misi_sekolah='".$misi_sekolah."', info_ppdb1='".$info_ppdb1."' ";
  
      $sql = mysqli_query($koneksi, $update);
  
      $_SESSION['pesan'] = 'Data Berhasil Di Ubah';
      $_SESSION['status'] = 'success';
      echo "<script> document.location.href='../../views/admin/konfigurasi-aplikasi';</script>";
      die(); 
    }
  }
?>