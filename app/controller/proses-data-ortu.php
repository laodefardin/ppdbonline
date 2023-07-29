<?php
session_start();
if (isset($_POST['tambah'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');

include "../config/koneksi.php";

$level = $_SESSION['level'];

$no_pendaftaran = mysqli_real_escape_string($koneksi, trim($_POST['no_pendaftaran']));
$nama_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nama_ayah']));
$pendidikan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ayah']));
$penghasilan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_ayah']));
$tahun_lahir_ayah = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ayah']));
$pekerjaan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ayah']));
$nohp_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ayah']));

$nama_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nama_ibu']));
$pendidikan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ibu']));
$penghasilan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_ibu']));
$tahun_lahir_ibu = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ibu']));
$pekerjaan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ibu']));
$nohp_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ibu']));
$alamat_ortu = mysqli_real_escape_string($koneksi, trim($_POST['alamat_ortu']));

$nama_wali = mysqli_real_escape_string($koneksi, trim($_POST['nama_wali']));
$pendidikan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_wali']));
$penghasilan_wali = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_wali']));
$tahun_lahir_wali = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_wali']));
$pekerjaan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_wali']));
$nohp_wali = mysqli_real_escape_string($koneksi, trim($_POST['nohp_wali']));
$alamat_wali = mysqli_real_escape_string($koneksi, trim($_POST['alamat_wali']));


$update = "UPDATE tb_siswa SET 
nama_ayah='$nama_ayah', pendidikan_ayah='$pendidikan_ayah', penghasilan_ayah='$penghasilan_ayah', tahun_lahir_ayah='$tahun_lahir_ayah', pekerjaan_ayah='$pekerjaan_ayah', nohp_ayah='$nohp_ayah', nama_ibu='$nama_ibu', pendidikan_ibu='$pendidikan_ibu', penghasilan_ibu='$penghasilan_ibu', tahun_lahir_ibu='$tahun_lahir_ibu', pekerjaan_ibu='$pekerjaan_ibu', nohp_ibu='$nohp_ibu', alamat_ortu='$alamat_ortu',
nama_wali='$nama_wali', pendidikan_wali='$pendidikan_wali', penghasilan_wali='$penghasilan_wali',
tahun_lahir_wali='$tahun_lahir_wali', pekerjaan_wali='$pekerjaan_wali', nohp_wali='$nohp_wali', alamat_wali='$alamat_wali',
tgl_ubah='$currentDate'
WHERE no_pendaftaran = '$no_pendaftaran'";

if ($level === 'Calon Peserta Didik'){
  $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
  $_SESSION['pesan'] = 'Data Orang tua/Wali Berhasil Di Update';
          $_SESSION['status'] = 'success';
          echo "<script> document.location.href='../../views/user/data-ortu';</script>";
          die();
  }else{
  $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
  $_SESSION['pesan'] = 'Data Orang tua/Wali Berhasil Di Update';
          $_SESSION['status'] = 'success';
          echo "<script> document.location.href='../../views/admin/data-ortu?no-pendaftaran=$no_pendaftaran';</script>";
          die();
  }
}
?>