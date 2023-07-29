<?php
// Mengatur zona waktu sesuai dengan lokasi Anda

include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['no-pendaftaran'];
$hapus = "DELETE FROM tb_siswa WHERE no_pendaftaran  = '$id'";

$query = $koneksi->query("SELECT * FROM tb_siswa WHERE no_pendaftaran = '$id' ");
$data = mysqli_fetch_array($query);
$lokasi = $data['foto'];
$hapus_gbr = "../../assets/image/foto_siswa/".$lokasi;
    unlink($hapus_gbr);

$proses3 = $koneksi->query($hapus);
$_SESSION['pesan'] = 'Data Berhasil Di Hapus';
$_SESSION['status'] = 'success';
echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
die();
