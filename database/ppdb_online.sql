-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 04:55 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galerysekolah`
--

CREATE TABLE `tb_galerysekolah` (
  `id` int NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galerysekolah`
--

INSERT INTO `tb_galerysekolah` (`id`, `foto`, `date`) VALUES
(8, '0220232134ndIMG (1).jpg', '2023-07-02 21:34:34'),
(9, '0220232134ndIMG (2).jpg', '2023-07-02 21:34:41'),
(10, '0220232134ndIMG (3).jpg', '2023-07-02 21:34:47'),
(11, '0220232134ndIMG (4).jpg', '2023-07-02 21:34:53'),
(12, '0220232135ndIMG (5).jpg', '2023-07-02 21:35:00'),
(13, '0220232135ndIMG (6).jpg', '2023-07-02 21:35:06'),
(14, '0220232135ndIMG (7).jpg', '2023-07-02 21:35:12'),
(15, '0220232135ndIMG (8).jpg', '2023-07-02 21:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_infoppdb`
--

CREATE TABLE `tb_infoppdb` (
  `id` int NOT NULL,
  `deskripsi_ppdb` varchar(200) NOT NULL,
  `tgl_ppdb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_infoppdb`
--

INSERT INTO `tb_infoppdb` (`id`, `deskripsi_ppdb`, `tgl_ppdb`) VALUES
(1, 'Pendaftaran Online', '06 Juli 2023 s.d Mei 2023'),
(2, 'Pengumpulan Berkas (Akte kelahiran, Kartu Keluarga sama KTP kedua orang tua)', '06 Juli 2023 s.d Mei 2023'),
(3, 'Pengumuman', '06 Juli 2023 s.d Mei 2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfigurasi`
--

CREATE TABLE `tb_konfigurasi` (
  `id` int NOT NULL,
  `nama_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `alamat_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telepon_sekolah` char(12) DEFAULT NULL,
  `email_sekolah` varchar(100) NOT NULL,
  `map_sekolah` varchar(1000) NOT NULL,
  `setdaftar` enum('Buka','Tutup') DEFAULT NULL,
  `setpengumuman` enum('Buka','Tutup') DEFAULT NULL,
  `nama_website` varchar(50) DEFAULT NULL,
  `tentang_sekolah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tentang_sekolah2` text NOT NULL,
  `visi_sekolah` text NOT NULL,
  `misi_sekolah` text NOT NULL,
  `nama_kepsek` varchar(100) DEFAULT NULL,
  `foto_kepsek` varchar(50) DEFAULT NULL,
  `nip_kepsek` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `info_ppdb1` text NOT NULL,
  `info_ppdb2` text NOT NULL,
  `info_ppdb3` text NOT NULL,
  `info_prosedur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konfigurasi`
--

INSERT INTO `tb_konfigurasi` (`id`, `nama_sekolah`, `alamat_sekolah`, `telepon_sekolah`, `email_sekolah`, `map_sekolah`, `setdaftar`, `setpengumuman`, `nama_website`, `tentang_sekolah`, `tentang_sekolah2`, `visi_sekolah`, `misi_sekolah`, `nama_kepsek`, `foto_kepsek`, `nip_kepsek`, `info_ppdb1`, `info_ppdb2`, `info_ppdb3`, `info_prosedur`) VALUES
(1, 'UPT SD Negeri 30 Binamu', 'Kanea Sapanang, Kec. Binamu, Kab. Jeneponto Prov. Sulawesi Selatan.', '085398567991', 'sdn30binamu@gmail.com', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63528.62301423271!2d119.70434675!3d-5.6348538999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUPT%20%20SD%20Negeri%2030%20Binamu%2C%20KEC.%20BINAMU!5e0!3m2!1sid!2sid!4v1686797267853!5m2!1sid!2sid', 'Buka', 'Buka', 'PPDB ONLINE', '                                                                                                 <p> UPT SD Negeri 30 Binamu merupakan sekolah yang terletak di Jalan Kanea\r\n            Sapanang\r\n            Kelurahan Sapanang, Kecamatan Binamu, Kabupaten Jeneponto, Provinsi Sulawesi Selatan. Sekolah ini memiliki\r\n            fasilitas yang mendukung kegiatan belajar-mengajar. Fasilitas tersebut mencakup ruang kelas yang nyaman dan\r\n            dilengkapi dengan peralatan pembelajaran, perpustakaan dengan koleksi buku yang beragam, lapangan olahraga\r\n            yang\r\n            luas, ruang seni, area permainan yang aman, serta ruang guru dan ruang rapat.</p>\r\n\r\n          <p>UPT SD Negeri 30 Binamu juga memiliki beragam kegiatan sekolah yang melengkapi pengalaman belajar siswa,\r\n            baik\r\n            dalam kegiatan akademis maupun non-akademis. Kegiatan ini dirancang untuk mengembangkan potensi siswa di\r\n            bidang\r\n            akademik, seni, dan olahraga. Selain itu, sistem pengajaran dan peran guru dalam sekolah ini juga berperan\r\n            penting dalam mencapai prestasi sekolah dan siswa yang baik. Sistem pengajaran yang diterapkan di sekolah\r\n            ini\r\n            didesain dengan pendekatan yang menyenangkan dan inovatif, sedangkan guru-guru di UPT SD Negeri 30 Binamu\r\n            memiliki dedikasi tinggi dalam memberikan pembelajaran yang berkualitas kepada siswa.</p>\r\n\r\n          <p>Dengan adanya fasilitas yang memadai, beragam kegiatan sekolah, sistem pengajaran yang baik, serta peran\r\n            aktif\r\n            guru dalam mendukung prestasi siswa, UPT SD Negeri 30 Binamu terus berusaha menjadi sekolah yang lebih baik\r\n            dan\r\n            memberikan pendidikan berkualitas bagi siswa. Dalam lingkungan belajar yang aman dan inklusif, sekolah ini\r\n            berkomitmen untuk membentuk siswa yang berkarakter, berprestasi, dan berakhlak mulia, serta melibatkan orang\r\n            tua\r\n            dan masyarakat dalam mendukung proses pendidikan di sekolah. </p>                                                                                                ', '                                                                                                    <p> UPT SD Negeri 30 Binamu adalah sebuah institusi pendidikan SD negeri yang beralamat di Kanea Sapanang, Kab. Jeneponto. Saat ini UPT SD Negeri 30 Binamu menggunakan kurikulum SD 2013, dengan status akreditasi B.</p>      <p>UPT  SD Negeri 30 Binamu mendapatkan akreditasi B dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Mandrasah. Lihat sertifikat akreditasi untuk UPT  SD Negeri 30 Binamu <a href=\"http://118.98.221.176/sispena_lama/sertifikat_sekolah/signed/SERTIFIKAT_40313629_signed.pdf\" rel=\"nofollow\" target=\"_blank\">di sini</a>.</p>                                                                                                ', '                                                                                                                 Mewujudkan Siswa-siswi yang berprestasi, beriman dan bertaqwa kepada Tuhan                 yang Maha Esa Serta Cinta terhadap Lingkungan', '                                                                                                  1. Mewujudkan Dan Menciptakan Siswa Yang Taat Beribadah <br>               2. Mewujudkan Sikap Perilaku yang baik, Santun, Sopan dan Berkarakter <br>               3. Mewujudkan dan menciptakan Budaya Membaca <br>               4. Menciptakan Suasana Pembelajaran yang Aktif, Inovatif, Kreatif, Dan Efektif <br>               5. Mewujudkan Siswa yang berprestasi dan Alumni yang dibekali keterampilan <br>               6. Mewujudkan Sekolah (Green School) <br>               7. Meningkatkan Kedisiplinan Seluruh Komponen Sekolah <br>               8. Mewujudkan Kekeluargaan Antar Sekolah<br>                                                                                                ', 'Sudarmin, S.Pd', '0220230404ndkepsek.jpg', '1978 0327 2009 021003', '                                                                                                <p> UPT SD NEGERI 30 BINAMU menyediakan PPDB secara online diharapkan proses PPDB       dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses       pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB       Online UPT SD NEGERI 30 BINAMU.</p>     <p> Pengisian form PPDB Online mohon di perhatikan data yang dibutuhkan yang nanti       akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon       siswa akan mendapatkan bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk       proses selanjutnya. </p>                                                                                                ', 'UPT SD NEGERI 30 BINAMU menyediakan PPDB secara online diharapkan proses PPDB dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online UPT SD NEGERI 30 BINAMU.', 'Pengisian form PPDB Online mohon di perhatikan data yang dibutuhkan yang nanti akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapatkan bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.', '<ol class=\"rectangle-list\">             \r\n<li><a href=\"\"> Calon siswa/orang tua membuka website PPDB Online</a></li>\r\n<li><a href=\"daftar-siswa\">Calon siswa/orang tua membuat akun PPDB Online di web <strong>Klik Disini </strong></a> </li>\r\n<li><a href=\"login\">Setelah calon siswa berhasil membuat akun PPDB Online, halaman Akan di arahkan ke halaman Login, Silahkan login menggunakan username dan password tanggal lahir calon siswa yang telah di isikan pada form pendaftaran sebelumnya.</a></li>           \r\n<li><a href=\"\">Setelah Login pada halaman calon siswa wajib melakukan pengisian data pendaftaran sebagai syarat kelengkapan</a></li>             \r\n<li><a href=\"\">Jika data yang diisi sudah lengkap siswa/orang tua dapat melakukan print out bukti pendaftaran dan mempersiapkan kelengkapan berkas (Akte kelahiran, Kartu Keluarga sama KTP kedua orang tua)</a></li>             \r\n<li><a href=\"\">Calon siswa/ortu datang ke sekolah untuk verifikasi, membawa bukti pendaftaran dan kelengkapan berkas (Akte kelahiran, Kartu Keluarga sama KTP kedua orang tua)</a></li>             \r\n<li><a href=\"\">Panitia ppdb melakukan verifikasi dan validasi berkas pendaftaran</a></li>             \r\n<li><a href=\"\">Setelah selesai calon siswa menerima tanda bukti verifikasi</a></li>             \r\n<li><a href=\"pengumuman\">Pengumuman hasil PPDB Online bisa dilihat di Web PPDB dengan memasukkan nomor pendaftaran <strong>Klik Disini </strong></a></li>           \r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `nama`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'UPT SD NEGERI 30 BINAMU', '66b65567cedbc743bda3417fb813b9ba', 'Admin', '0120231324st0220231423ndLOGO-TUT-WURI-HANDAYANI.webp'),
(2, 'siswa', 'Rismayanti', '66b65567cedbc743bda3417fb813b9ba', 'Siswa', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int NOT NULL,
  `pengumuman` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `pengumuman`) VALUES
(1, 'Isi dan Lengkapi semua menu yang tertera di samping dengan data yang sesuai dan sebenarnya'),
(2, 'Jika ada salah satu dari menu yang tidak Anda lengkapi, maka Anda tidak akan lulus Seleksi'),
(3, 'Semua data masih dapat Anda ubah/perbaiki sampai dengan tanggal 12 Juli 2023 Jam 23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int NOT NULL,
  `no_pendaftaran` varchar(40) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_siswa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_jalan` text NOT NULL,
  `nonik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `nama_negara` varchar(20) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL,
  `nama_kabupaten` varchar(20) NOT NULL,
  `alamat_kelurahan` varchar(50) NOT NULL,
  `alamat_kecamatan` varchar(20) NOT NULL,
  `kode_pos` varchar(8) NOT NULL,
  `moda_transportasi` varchar(20) NOT NULL,
  `tinggi_badan` varchar(40) DEFAULT NULL,
  `anak_keberapa` varchar(40) NOT NULL,
  `kebutuhan_khusus` varchar(50) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `berat_badan` varchar(40) NOT NULL,
  `jumlah_saudara_kandung` varchar(40) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `tahun_lahir_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nohp_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pendidikan_ibu` varchar(30) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `tahun_lahir_ibu` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `nohp_ibu` varchar(20) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pendidikan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(50) NOT NULL,
  `tahun_lahir_wali` varchar(10) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `nohp_wali` varchar(20) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `foto_ktp` varchar(500) NOT NULL,
  `foto_kk` varchar(500) NOT NULL,
  `foto_akta` varchar(500) NOT NULL,
  `status_administrasi` varchar(300) DEFAULT NULL,
  `level` varchar(40) NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_ubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `no_pendaftaran`, `username`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `agama_siswa`, `alamat_jalan`, `nonik`, `tempat_lahir`, `nama_negara`, `nama_provinsi`, `nama_kabupaten`, `alamat_kelurahan`, `alamat_kecamatan`, `kode_pos`, `moda_transportasi`, `tinggi_badan`, `anak_keberapa`, `kebutuhan_khusus`, `tempat_tinggal`, `berat_badan`, `jumlah_saudara_kandung`, `nama_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `tahun_lahir_ayah`, `pekerjaan_ayah`, `nohp_ayah`, `nama_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `tahun_lahir_ibu`, `pekerjaan_ibu`, `nohp_ibu`, `alamat_ortu`, `nama_wali`, `pendidikan_wali`, `penghasilan_wali`, `tahun_lahir_wali`, `pekerjaan_wali`, `nohp_wali`, `alamat_wali`, `foto`, `foto_ktp`, `foto_kk`, `foto_akta`, `status_administrasi`, `level`, `tgl_buat`, `tgl_ubah`) VALUES
(18, '001654162304', 'admin', 'Laode Muh ZulFardinsyah1', 'Perempuan', '1996-07-14', 'Budha', 'Jl. Btn Axuri Blok D No 12', '1232322323123312', 'Mamuju', 'Indonesia', 'Sulbar', 'Mamuju', 'Papalang', 'Papalang', '1923', 'Jalan Kaki', '123', '123', 'Tidak', 'Bersama Orang Tua', '123', '123', 'Bambang', 'S3', '0', '1978', 'PNS/TNI/POLRI', '085240330000', 'Karin', 'SMP Sederajat', '500.000 - 999.999', '1972', 'Karyawan Swasta', '082393448980', 'Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.', '', 'Tidak Sekolah', '0', '', 'Tidak Bekerja', '', '', '0120230233st2aksd.jpg', '1920230450thcommon-dashboard-1x.png', '1920230452thmain-qimg-0ca61dc33c8355fc36f03c0631ebc1d5.jpeg', '1920230452thINSTAGRAM.jpg', 'Lulus', 'Calon Peserta Didik', '2023-06-21 11:41:28', '2023-09-19 12:43:06'),
(33, '002357356595', 'putri', 'Putri Cahyani', 'Perempuan', '2000-03-12', 'Islam', 'Jl. Bandung Kemayoran City Jakarta Utara, No 12', '1232322323232312', 'Bandung', 'Indonesia', 'Bandung', 'Malang', 'Jakarta', 'Medan', '50000', 'Kendaraan Priadi', '230', '19', 'Tidak', 'Panti Asuhan', '123', '20', 'Bambang Prabowo', 'SMP Sederajat', 'Lebih dari 20 juta', '1992', 'Pedagang Besar', '081129239232', 'Mega Jokowi Ratnasari', 'D2', '', '1988', 'Karyawan Swasta', '089221323742', '', '-', 'Tidak Sekolah', '0', '', 'Tidak Bekerja', '', '', '0120230231steid_al_adha_instagram_story_04 (1).jpg', '', '', '', 'Belum diVerifikasi', 'Calon Peserta Didik', '2023-07-01 10:29:27', '2023-07-01 10:29:27'),
(34, '003089563981', 'hamirah', 'Hamirah Bagus', 'Perempuan', '2009-12-23', 'Islam', 'Papalang', '1232322323232312', 'Mamuju', 'Indonesia', 'Bandung', 'Mamuju', 'Papalang', 'Papalang', '91511', 'Jemputan Sekolah', '123', '123', 'Tidak', 'Panti Asuhan', '123', '123', 'Marcel', 'SMP Sederajat', '500.000 - 999.999', '1992', 'Karyawan Swasta', '082393448980', 'Mega Jokowi Ratnasari', 'SMA Sederajat', '', '1988', 'Karyawan Swasta', '082393448980', '', '-', 'Tidak Sekolah', '0', '', 'Tidak Bekerja', '', '', '0120230843stIMG_4504.JPG', '', '', '', 'Belum diVerifikasi', 'Calon Peserta Didik', '2023-07-01 16:40:11', '2023-07-01 16:40:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galerysekolah`
--
ALTER TABLE `tb_galerysekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_infoppdb`
--
ALTER TABLE `tb_infoppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galerysekolah`
--
ALTER TABLE `tb_galerysekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_infoppdb`
--
ALTER TABLE `tb_infoppdb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_konfigurasi`
--
ALTER TABLE `tb_konfigurasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
