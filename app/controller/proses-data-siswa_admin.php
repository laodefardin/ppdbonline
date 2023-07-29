<?php
session_start();
if (isset($_POST['tambah'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');
  
  include "../config/koneksi.php";

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
  
  $nama_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nama_ayah']));
  $pendidikan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ayah']));
  $penghasilan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_ayah']));
  $tahun_lahir_ayah = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ayah']));
  $pekerjaan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ayah']));
  $nohp_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ayah']));
  
  $nama_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nama_ibu']));
  $pendidikan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ibu']));
  $tahun_lahir_ibu = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ibu']));
  $pekerjaan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ibu']));
  $nohp_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ibu']));
  
  $nama_wali = mysqli_real_escape_string($koneksi, trim($_POST['nama_wali']));
  $pendidikan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_wali']));
  $penghasilan_wali = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_wali']));
  $tahun_lahir_wali = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_wali']));
  $pekerjaan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_wali']));
  $nohp_wali = mysqli_real_escape_string($koneksi, trim($_POST['nohp_wali']));
  
  
  $img = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $gambar_baru = date('dYHiS').$img;
  $path = "../../assets/image/foto_siswa/".$gambar_baru;
  move_uploaded_file($tmp, $path);
  
// Mengambil nomor urut terakhir dari tabel tb_siswa
$sql = "SELECT MAX(no_pendaftaran) AS last_sequence FROM tb_siswa";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $lastSequenceNumber = (int) substr($row["last_sequence"], 0, 3);
}

// Menambahkan 1 ke nomor urut terakhir
$newSequenceNumber = $lastSequenceNumber + 1;
// Membentuk nomor urut dengan format 3 digit
$sequenceNumber = str_pad($newSequenceNumber, 3, '0', STR_PAD_LEFT);
// Menghasilkan 9-digit angka acak
$randomNumber = '';
for ($i = 0; $i < 9; $i++) {
    $randomNumber .= rand(0, 9);
}
// Menggabungkan nomor urut dan angka acak menjadi nomor pendaftaran lengkap
$no_pendaftaran = $sequenceNumber . $randomNumber;
  
  echo $query = 'INSERT INTO tb_siswa (
    no_pendaftaran, username, nama_siswa, jenis_kelamin, tanggal_lahir, agama_siswa, alamat_jalan, nonik, tempat_lahir, nama_negara, nama_provinsi, nama_kabupaten, alamat_kelurahan, alamat_kecamatan, kode_pos, moda_transportasi, tinggi_badan, anak_keberapa, kebutuhan_khusus, tempat_tinggal, berat_badan, jumlah_saudara_kandung, nama_ayah, pendidikan_ayah, penghasilan_ayah, tahun_lahir_ayah, pekerjaan_ayah, nohp_ayah, nama_ibu, pendidikan_ibu, penghasilan_ibu,tahun_lahir_ibu, pekerjaan_ibu, nohp_ibu, alamat_ortu, nama_wali, pendidikan_wali, penghasilan_wali, tahun_lahir_wali, pekerjaan_wali, nohp_wali, alamat_wali, foto, status_administrasi, level, tgl_buat, tgl_ubah)
    VALUES (
      "'.$no_pendaftaran.'", 
      "'.$username.'", 
      "'.$nama_siswa.'", 
      "'.$jenis_kelamin.'", 
      "'.$tanggal_lahir.'",
      "'.$agama_siswa.'", 
      "'.$alamat_jalan.'", 
      "'.$nonik.'", 
      "'.$tempat_lahir.'",
      "'.$nama_negara.'", 
      "'.$nama_provinsi.'", 
      "'.$nama_kabupaten.'", 
      "'.$alamat_kelurahan.'", 
      "'.$alamat_kecamatan.'", 
      "'.$kode_pos.'", 
      "'.$moda_transportasi.'", 
      "'.$tinggi_badan.'", 
      "'.$anak_keberapa.'", 
      "'.$kebutuhan_khusus.'", 
      "'.$tempat_tinggal.'", 
      "'.$berat_badan.'", 
      "'.$jumlah_saudara_kandung.'", 
      "'.$nama_ayah.'", 
      "'.$pendidikan_ayah.'", 
      "'.$penghasilan_ayah.'", 
      "'.$tahun_lahir_ayah.'", 
      "'.$pekerjaan_ayah.'", 
      "'.$nohp_ayah.'", 
      "'.$nama_ibu.'", 
      "'.$pendidikan_ibu.'", 
      "'.$penghasilan_ibu.'", 
      "'.$tahun_lahir_ibu.'", 
      "'.$pekerjaan_ibu.'", 
      "'.$nohp_ibu.'", 
      "'.$alamat_ortu.'", 
      "'.$nama_wali.'", 
      "'.$pendidikan_wali.'", 
      "'.$penghasilan_wali.'",
      "'.$tahun_lahir_wali.'", 
      "'.$pekerjaan_wali.'", 
      "'.$nohp_wali.'", 
      "'.$alamat_wali.'", 
      "'.$gambar_baru.'",
      "Belum diVerifikasi",
      "Calon Peserta Didik",
      "'.$currentDate.'", 
      "'.$currentDate.'")';
  
      $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      $_SESSION['pesan'] = 'Data Siswa Berhasil Ditambahkan';
      $_SESSION['status'] = 'success';
      echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
      die();

      // Tampilkan pesan alert
      // echo '<script>alert("Selamat anda berhasil registrasi. Silahkan Login dan Melakukan Cetak Bukti Registrasi");</script>';
      // echo "<script> document.location.href='../../views/admin/data-peserta-didik';</script>";
    }
?>