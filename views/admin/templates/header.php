<?php
date_default_timezone_set('Asia/Makassar');
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
include '../../app/config/koneksi.php';
// include "function.php";
if (!isset($_SESSION["username"])){
//   echo "<script> document.location.href='../index'; </script>";
    echo "<script> alert('anda tidak memiliki akses untuk halaman ini!, Silahkan Login terlebih dahulu');window.location= '../../index';</script>";
}

$user = $_SESSION['username'];
$level = $_SESSION['level'];
$nama = $_SESSION['nama'];
$id = $_SESSION["id_user"];
$foto = $_SESSION["foto"];

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

// $query = $koneksi->query("SELECT * FROM tb_siswa WHERE username = '$user'");
// $row = $query->fetch_array();
// //jika akun berlevel peserta mengakses page admin
// if ($level === "Admin"){
//   echo "<script> document.location.href='../user/index'; </script>";
//   // echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../user/index';</script>";
// }elseif($level === "Guru"){
//     echo "<script> document.location.href='../guru/index'; </script>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo ucfirst($title); ?> | PPDB Online </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/dist/css/jquery.fancybox.min.css">
  <link rel="icon" href="../../assets/favicon.ico" type="image/x-icon" />
</head>

<style>
  .sidebar-dark-navy .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-navy .nav-sidebar>.nav-item>.nav-link.active{
    background-color: #0c5071;
    color: #fff;
  }
</style>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->