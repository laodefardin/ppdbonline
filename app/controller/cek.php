<?php
include "../config/koneksi.php";

$sql = "SELECT MAX(no_pendaftaran) AS last_sequence FROM tb_siswa";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $lastSequenceNumber = (int) substr($row["last_sequence"], 0, 3);
}

$newSequenceNumber = $lastSequenceNumber + 1;

// Mendapatkan nomor urut terakhir dari database atau penyimpanan lainnya
// $lastSequenceNumber = 6; // Ganti dengan nomor urut terakhir yang diperoleh

// Menambahkan 1 ke nomor urut terakhir
// $newSequenceNumber = $lastSequenceNumber + 1;

// Membentuk nomor urut dengan format 3 digit
$sequenceNumber = str_pad($newSequenceNumber, 3, '0', STR_PAD_LEFT);

// Menghasilkan 9-digit angka acak
$randomNumber = '';
for ($i = 0; $i < 9; $i++) {
    $randomNumber .= rand(0, 9);
}

// Menggabungkan nomor urut dan angka acak menjadi nomor pendaftaran lengkap
$registrationNumber = $sequenceNumber . $randomNumber;

echo "Nomor Pendaftaran: " . $registrationNumber;
?>