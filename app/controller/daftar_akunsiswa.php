<?php
if (isset($_POST['tambah'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');
  
  include "../config/koneksi.php";
  
  $username = mysqli_real_escape_string($koneksi, trim($_POST['username']));
  $nama_siswa = mysqli_real_escape_string($koneksi, trim($_POST['nama_siswa']));
  $tanggal_lahir = mysqli_real_escape_string($koneksi, trim($_POST['tanggal_lahir']));
  $nonik = mysqli_real_escape_string($koneksi, trim($_POST['nonik']));

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
  
  $query = "SELECT * FROM tb_siswa WHERE username = '$username' AND tanggal_lahir = '$tanggal_lahir' ";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0){
    // Tampilkan pesan alert
    echo '<script>alert("Username sudah ada, silahkan gunakan yang lain.");</script>';
    echo "<script> document.location.href='../../daftar-siswa';</script>";
  }else{

    $query = 'INSERT INTO tb_siswa (
      no_pendaftaran, username, nama_siswa, jenis_kelamin, tanggal_lahir, agama_siswa, alamat_jalan, nonik, tempat_lahir, nama_negara, nama_provinsi, nama_kabupaten, alamat_kelurahan, alamat_kecamatan, kode_pos, moda_transportasi, tinggi_badan, anak_keberapa, kebutuhan_khusus, tempat_tinggal, berat_badan, jumlah_saudara_kandung, nama_ayah, pendidikan_ayah, penghasilan_ayah, tahun_lahir_ayah, pekerjaan_ayah, nohp_ayah, nama_ibu, pendidikan_ibu, penghasilan_ibu,tahun_lahir_ibu, pekerjaan_ibu, nohp_ibu, alamat_ortu, nama_wali, pendidikan_wali, penghasilan_wali, tahun_lahir_wali, pekerjaan_wali, nohp_wali, alamat_wali, foto, status_administrasi, level, tgl_buat, tgl_ubah)
      VALUES (
        "'.$no_pendaftaran.'", "'.$username.'", "'.$nama_siswa.'", " ", "'.$tanggal_lahir.'", " ", " ", "'.$nonik.'", " ", " ", " ", " ", " ", " ", " ", 
        
        " ", " ", " ", " ", " ", " ", " ", 
        " ", " ", " ", " ", " ", " ", 
        " ", " ", " ", " ", " ", " ", " ", 
  
        " ", " ", " ", " ", " ", " ", " ",
        NULL, "Belum diVerifikasi", "Calon Peserta Didik",
        "'.$currentDate.'", 
        "'.$currentDate.'")';
    
        $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        // Tampilkan pesan alert
        echo '<script>alert("Selamat anda berhasil registrasi. Silahkan Login dan Melakukan Cetak Bukti Registrasi");</script>';
        echo "<script> document.location.href='../../login';</script>";
      }
  }

?>