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
$username = mysqli_real_escape_string($koneksi, trim($_POST['username']));
$nama_siswa = mysqli_real_escape_string($koneksi, trim($_POST['nama_siswa']));
$jenis_kelamin = mysqli_real_escape_string($koneksi, trim($_POST['jenis_kelamin']));
$tanggal_lahir = mysqli_real_escape_string($koneksi, trim($_POST['tanggal_lahir']));
$agama_siswa = mysqli_real_escape_string($koneksi, trim($_POST['agama_siswa']));
$alamat_jalan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_jalan']));

$nonik = mysqli_real_escape_string($koneksi, trim($_POST['nonik']));
$tempat_lahir = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));
$nama_negara = mysqli_real_escape_string($koneksi, trim($_POST['nama_negara']));
$nama_provinsi = mysqli_real_escape_string($koneksi, trim($_POST['nama_provinsi']));
$nama_kabupaten = mysqli_real_escape_string($koneksi, trim($_POST['nama_kabupaten']));
$alamat_kelurahan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kelurahan']));
$alamat_kecamatan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kecamatan']));
$kode_pos = mysqli_real_escape_string($koneksi, trim($_POST['kode_pos']));

$moda_transportasi = mysqli_real_escape_string($koneksi, trim($_POST['moda_transportasi']));
$tinggi_badan = mysqli_real_escape_string($koneksi, trim($_POST['tinggi_badan']));
$anak_keberapa = mysqli_real_escape_string($koneksi, trim($_POST['anak_keberapa']));
$kebutuhan_khusus = mysqli_real_escape_string($koneksi, trim($_POST['kebutuhan_khusus']));
$tempat_tinggal = mysqli_real_escape_string($koneksi, trim($_POST['tempat_tinggal']));
$berat_badan = mysqli_real_escape_string($koneksi, trim($_POST['berat_badan']));
$jumlah_saudara_kandung = mysqli_real_escape_string($koneksi, trim($_POST['jumlah_saudara_kandung']));

$update = "UPDATE tb_siswa SET 
username='$username', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', agama_siswa='$agama_siswa', alamat_jalan='$alamat_jalan', nonik='$nonik', tempat_lahir='$tempat_lahir', nama_negara='$nama_negara', nama_provinsi='$nama_provinsi', nama_kabupaten='$nama_kabupaten', alamat_kelurahan='$alamat_kelurahan', alamat_kecamatan='$alamat_kecamatan', kode_pos='$kode_pos', moda_transportasi='$moda_transportasi', tinggi_badan='$tinggi_badan', anak_keberapa='$anak_keberapa', kebutuhan_khusus='$kebutuhan_khusus', tempat_tinggal='$tempat_tinggal', berat_badan='$berat_badan', jumlah_saudara_kandung='$jumlah_saudara_kandung',
tgl_ubah='$currentDate'
WHERE no_pendaftaran = '$no_pendaftaran'";

if ($level === 'Calon Peserta Didik'){
  $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
  $_SESSION['pesan'] = 'Data Siswa Berhasil Di Update';
          $_SESSION['status'] = 'success';
          echo "<script> document.location.href='../../views/user/data-siswa';</script>";
          die();
  }else{
  $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
  $_SESSION['pesan'] = 'Data Siswa Berhasil Di Update';
          $_SESSION['status'] = 'success';
          echo "<script> document.location.href='../../views/admin/data-siswa?no-pendaftaran=$no_pendaftaran';</script>";
          die();
  }
}
?>