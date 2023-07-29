<?php
session_start();

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
 

include '../../../app/config/koneksi.php';

$user = $_SESSION['username'];
$level = $_SESSION['level'];
$nama = $_SESSION['nama'];
$id_siswa = $_SESSION["id_siswa"];
$no_pendaftaran = $_SESSION["no_pendaftaran"];
$foto = $_SESSION["foto"];

$query = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' ");
foreach ($query as $data) : 
?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="base.min.css"/>
<link rel="stylesheet" href="fancy.min.css"/>
<link rel="stylesheet" href="main.css"/>
<script src="compatibility.min.js"></script>
<script src="theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title><?= $no_pendaftaran.$data['nama_siswa'] ?> </title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1">
  <div class="pc pc1 w0 h0">
    <img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/>
    <div class="c x1 y1 w2 h2">
      <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Diketahui oleh</div>
      <div class="t m0 x3 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">Orang Tua / Wali Murid CPD,</div>
      <div class="t m0 x0 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">...................................</div></div>

      <div class="t m0 x4 h4 y5 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: sans-serif;font-weight: bold;margin-left: -130px;margin-bottom: -5px;">				PEMERINTAH KABUPATEN JENEPONTO </div>
			<div class="t m0 x6 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: sans-serif;font-weight: bold;margin-left: -130px;margin-bottom: 3px;">KORWIL DINAS PENDIDIKAN DAN KEBUDAYAAN KEC. BINAMU</div>
			<div class="t m0 x5 h5 y7 fs2 fc0 sc0 ls0 ws0" style="font-family: system-ui;margin-bottom: 4px;
"><strong>UPT SEKOLAH DASAR NEGERI 30 BINAMU</strong></div>
      <!-- <div class="t m0 x6 h4 y7 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: system-ui;margin-bottom: 5px;
"><strong>UPT SEKOLAH DASAR NEGERI 30 BINAMU</strong></div> -->
<!-- <div class="t m0 x6 h4 y7 ff2 fs1 fc0 sc0 ls0 ws0">KECAMATAN VII KOTO ILIR KABUPATEN TEBO</div> -->
<div class="t m0 x7 h6 y8 ff1 fs3 fc0 sc0 ls0 ws0">               Alamat: Ka'nea Desa Sapanang Kec. Binamu Kab. Jeneponto Prov. Sulsel KP. 92311</div>



<div class="t m0 x8 h7 y9 ff2 fs4 fc0 sc0 ls0 ws0" style="font-family: system-ui;margin-bottom: 5px;font-size: 70pt;
">     FORMULIR PENERIMAAN PESERTA DIDIK BARU </div>
<div class="t m0 x9 h7 ya ff2 fs4 fc0 sc0 ls0 ws0 text-center" style="font-family: system-ui;margin-bottom: 5px;font-size: 70pt;
">     UPT SD NEGERI 30 BINAMU TAHUN PELAJARAN <?= (date('Y')); ?>/<?= (date('Y')+1); ?></div>




<div class="t m0 xa h8 yb ff2 fs0 fc0 sc0 ls0 ws0">A.<span class="_ _0"> </span>KETERANGAN CALON PESERTA DIDIK</div>
<div class="t m0 xb h3 yc ff1 fs0 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Nama Lengkap<span class="_ _2"> </span>: <?php echo $data['nama_siswa'];?></div>
<div class="t m0 xb h3 yd ff1 fs0 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Jenis Kelamin<span class="_ _3"> </span>: <?php echo $data['jenis_kelamin'];?></div>
<div class="t m0 xb h3 ye ff1 fs0 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>NIK (Nomor Induk Kependidikan)<span class="_ _5"> </span>: <?php echo $data['nonik'];?><span class="_ _6"> </span>.</div>
<div class="t m0 xb h3 yf ff1 fs0 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>Tempat, Tgl. Bln. Thn. Lahir<span class="_ _7"> </span>: <?php echo $data['tempat_lahir'];?> <?php echo tgl_indo($data['tanggal_lahir']);?></div>
<div class="t m0 xb h3 y10 ff1 fs0 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Agama & Kepercayaan<span class="_ _a"> </span> : <?php echo $data['agama_siswa'];?></div>
<div class="t m0 xb h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Alamat Tempat Tinggal <span class="_ _a"> </span>: <span class="_ _4"> </span><?php echo $data['alamat_jalan'];?>.   Desa/Kelurahan : <?= $data['alamat_kelurahan'];?></div>
<div class="t m0 xc h3 y12 ff1 fs0 fc0 sc0 ls0 ws0">  <span class="_ _4"> </span>Kec. <?= $data['alamat_kecamatan'];?>     Kab. <?= $data['nama_kabupaten'];?>     Prov. <?= $data['nama_provinsi'];?>     Kode Pos. <?= $data['kode_pos'];?></div>
<div class="t m0 xb h3 y13 ff1 fs0 fc0 sc0 ls0 ws0">7.<span class="_ _1"> </span>Kewarganegaraan <span class="_ _a"> </span>        : <?= $data['nama_negara'];?></div>
<div class="t m0 xb h3 y14 ff1 fs0 fc0 sc0 ls0 ws0">8.<span class="_ _1"> </span>Tempat Tinggal<span class="_ _b"> </span>: <?= $data['tempat_tinggal'];?>.</div>
<div class="t m0 xb h3 y15 ff1 fs0 fc0 sc0 ls0 ws0">9.<span class="_ _1"> </span>Mode Transportasi Ke Sekolah<span class="_ _c"> </span>: <?= $data['moda_transportasi'];?></div>




<div class="t m0 xa h8 y16 ff2 fs0 fc0 sc0 ls0 ws0">B.<span class="_ _0"> </span>KETERANGAN ORANG TUA KANDUNG</div>
<div class="t m0 xb h8 y17 ff1 fs0 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Nama Lengkap </div>
<div class="t m0 xd h3 y18 ff1 fs0 fc0 sc0 ls0 ws0">a.<span class="_ _11"> </span>Ayah <span class="_ _12"> </span>:  <?= $data['nama_ayah'];?></div>
<div class="t m0 xd h3 y19 ff1 fs0 fc0 sc0 ls0 ws0" style="margin-bottom: 7px;">b.<span class="_ _11"> </span>Ibu <span class="_ _13"> </span>:  <?= $data['nama_ibu'];?></div>

<div class="t m0 xb h3 y1a ff1 fs0 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Tahun Lahir </div><div class="t m0 xd h3 y1b ff1 fs0 fc0 sc0 ls0 ws0">a.<span class="_ _11"> </span>Ayah <span class="_ _12"> </span>:  <?= $data['tahun_lahir_ayah'];?></div>
<div class="t m0 xd h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">b.<span class="_ _11"> </span>Ibu <span class="_ _13"> </span>:  <?= $data['tahun_lahir_ibu'];?></div>

<div class="t m0 xb h3 y1d ff1 fs0 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Pendidikan Terakhir</div><div class="t m0 xd h3 y1e ff1 fs0 fc0 sc0 ls0 ws0">a.<span class="_ _11"> </span>Ayah <span class="_ _12"> </span>:  <?= $data['pendidikan_ayah'];?></div>
<div class="t m0 xd h3 y1f ff1 fs0 fc0 sc0 ls0 ws0">b.<span class="_ _11"> </span>Ibu <span class="_ _13"> </span>:  <?= $data['pendidikan_ibu'];?></div>

<div class="t m0 xb h3 y20 ff1 fs0 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>Pekerjaan</div><div class="t m0 xd h3 y21 ff1 fs0 fc0 sc0 ls0 ws0">a.<span class="_ _11"> </span>Ayah <span class="_ _12"> </span>:  <?php echo ($data['pekerjaan_ayah'] === 'Meninggal Dunia') ? "-" : $data['pekerjaan_ayah']; ?>
</div>
<div class="t m0 xd h3 y22 ff1 fs0 fc0 sc0 ls0 ws0">b.<span class="_ _11"> </span>Ibu <span class="_ _13"> </span>: <span class="_ _4"> </span><?php echo ($data['pekerjaan_ibu'] === 'Meninggal Dunia') ? "-" : $data['pekerjaan_ibu']; ?></div>

<div class="t m0 xd h3 y23 ff1 fs0 fc0 sc0 ls0 ws0">Alamat Tempat Tinggal<span class="_ _14"> </span>:  <?= $data['alamat_ortu'];?></div>

<div class="t m0 xb h3 y24 ff1 fs0 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Penghasilan rata-rata perbulan (Rp)</div>
<div class="t m0 xd h3 y25 ff1 fs0 fc0 sc0 ls0 ws0">a.   Ayah<span class="_ _15"> </span>:  <?= $data['penghasilan_ayah'];?> </div>
<div class="t m0 xd h3 y26 ff1 fs0 fc0 sc0 ls0 ws0">b.   Ibu<span class="_ _16"> </span>:  <?= $data['penghasilan_ibu'];?> </div>

<?php
if ($data['pekerjaan_ayah'] === 'Meninggal Dunia' AND $data['pekerjaan_ibu'] === 'Meninggal Dunia'){?>
<div class="t m0 xb h3 y27 ff1 fs0 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Keterangan<span class="_ _17"> </span>  </div>
<div class="t m0 xd h3 y28 ff1 fs0 fc0 sc0 ls0 ws0">a.   Ayah <span class="_ _18"> </span>:  Meninggal</div>
<div class="t m0 xd h3 y29 ff1 fs0 fc0 sc0 ls0 ws0">b.   Ibu <span class="_ _19"> </span>:  Meninggal</div>

<div class="t m0 xb h3 y2a ff1 fs0 fc0 sc0 ls0 ws0">7.<span class="_ _1"> </span>Wali</div>
<div class="t m0 xd h3 y2b ff1 fs0 fc0 sc0 ls0 ws0">a.   Nama Lengkap <span class="_ _14"> </span>      :  <?= $data['nama_wali'];?></div>
<div class="t m0 xd h3 y2c ff1 fs0 fc0 sc0 ls0 ws0">b.   Alamat Wali <span class="_ _14"> </span>           :  <?= $data['alamat_wali'];?></div>
<div class="t m0 xd h3 y2d ff1 fs0 fc0 sc0 ls0 ws0">c.   No Handphone Wali <span class="_ _a"> </span>:  <?= $data['nohp_wali'];?></div>
<?php 
}elseif ($data['pekerjaan_ayah'] === 'Meninggal Dunia') {?>
  <div class="t m0 xb h3 y27 ff1 fs0 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Keterangan<span class="_ _17"> </span>  </div>
<div class="t m0 xd h3 y28 ff1 fs0 fc0 sc0 ls0 ws0">a.   Ayah <span class="_ _18"> </span>:  Meninggal</div>
<div class="t m0 xd h3 y29 ff1 fs0 fc0 sc0 ls0 ws0">b.   Ibu <span class="_ _19"> </span>:  Masih Hidup</div>

<div class="t m0 xb h3 y2a ff1 fs0 fc0 sc0 ls0 ws0">7.<span class="_ _1"> </span>Wali</div>
<div class="t m0 xd h3 y2b ff1 fs0 fc0 sc0 ls0 ws0">a.   Nama Lengkap <span class="_ _14"> </span>      :  <?= $data['nama_wali'];?></div>
<div class="t m0 xd h3 y2c ff1 fs0 fc0 sc0 ls0 ws0">b.   Alamat Wali <span class="_ _14"> </span>           :  <?= $data['alamat_wali'];?></div>
<div class="t m0 xd h3 y2d ff1 fs0 fc0 sc0 ls0 ws0">c.   No Handphone Wali <span class="_ _a"> </span>:  <?= $data['nohp_wali'];?></div>
<?php } elseif ($data['pekerjaan_ibu'] === 'Meninggal Dunia') { ?>
    <div class="t m0 xb h3 y27 ff1 fs0 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Keterangan<span class="_ _17"> </span>  </div>
    <div class="t m0 xd h3 y28 ff1 fs0 fc0 sc0 ls0 ws0">a.   Ayah <span class="_ _18"> </span>:  Masih Hidup</div>
    <div class="t m0 xd h3 y29 ff1 fs0 fc0 sc0 ls0 ws0">b.   Ibu <span class="_ _19"> </span>:  Meninggal</div>

		<div class="t m0 xb h3 y2a ff1 fs0 fc0 sc0 ls0 ws0">7.<span class="_ _1"> </span>Wali</div>
<div class="t m0 xd h3 y2b ff1 fs0 fc0 sc0 ls0 ws0">a.   Nama Lengkap <span class="_ _14"> </span>      :  <?= $data['nama_wali'];?></div>
<div class="t m0 xd h3 y2c ff1 fs0 fc0 sc0 ls0 ws0">b.   Alamat Wali <span class="_ _14"> </span>           :  <?= $data['alamat_wali'];?></div>
<div class="t m0 xd h3 y2d ff1 fs0 fc0 sc0 ls0 ws0">c.   No Handphone Wali <span class="_ _a"> </span>:  <?= $data['nohp_wali'];?></div>
<?php }elseif ($data['pekerjaan_ayah'] !== 'Meninggal Dunia' && $data['pekerjaan_ibu'] !== 'Meninggal Dunia'){ ?> 

<div class="t m0 xb h3 y27 ff1 fs0 fc0 sc0 ls0 ws0">6.<span class="_ _1"> </span>Wali</div>
<div class="t m0 xd h3 y28 ff1 fs0 fc0 sc0 ls0 ws0">a.   Nama Lengkap <span class="_ _14"> </span>      :  <?= $data['nama_wali'];?></div>
<div class="t m0 xd h3 y29 ff1 fs0 fc0 sc0 ls0 ws0">b.   Alamat Wali <span class="_ _14"> </span>           :  <?= $data['alamat_wali'];?></div>
<div class="t m0 xd h3 y2a ff1 fs0 fc0 sc0 ls0 ws0">c.   No Handphone Wali <span class="_ _a"> </span>:  <?= $data['nohp_wali'];?></div>
	
<?php } ?>



<div class="t m0 xa h8 y2e ff2 fs0 fc0 sc0 ls0 ws0">C.<span class="_ _0"> </span>DATA PERIODIK CALON PESERTA DIDIK</div>
<div class="t m0 xb h3 y2f ff1 fs0 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Tinggi / Berat Badan<span class="_ _1a"> </span>: <span class="_ _4"> </span><?= $data['tinggi_badan']?> cm / <?= $data['berat_badan']?> kg.</div>
<div class="t m0 xb h3 y30 ff1 fs0 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Berkebutuhan Khusus      <span class="_ _1b"> </span>:  <?= $data['kebutuhan_khusus']?></div>
<div class="t m0 xb h3 y31 ff1 fs0 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Anak ke <span class="_ _1d"> </span>:<span class="_ _d"> </span><?= $data['anak_keberapa']?> dari <?= $data['jumlah_saudara_kandung']?> saudara.</div><div class="t m0 xb h3 y32 ff1 fs0 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>Jumlah Saudara Kandung<span class="_ _1e"> </span>:  <?= $data['jumlah_saudara_kandung']?> orang.</div>

<div class="t m0 xa h8 y34 ff2 fs0 fc0 sc0 ls0 ws0">D.<span class="_ _0"> </span>LAMPIRAN YANG DISERAHKAN BERSAMA FORMULIR PENDAFTARAN</div>
<div class="t m0 xb h3 y35 ff1 fs0 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Pas photo 3 x 4 cm<span class="_ _1f"> </span>: <span class="_ _4"> </span>4 lembar (berwarna / hitam putih).</div>
<div class="t m0 xb h3 y36 ff1 fs0 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Akta Kelahiran / Surat Ket. Lahir<span class="_ _20"> </span>:<span class="_ _d"> </span>1 lembar (photo copy).</div>
<div class="t m0 xb h3 y37 ff1 fs0 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Kartu Keluarga (KK) <span class="_ _21"> </span>: <span class="_ _4"> </span>1 lembar (photo copy).</div>
<div class="t m0 xb h3 y38 ff1 fs0 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>KPS / KKS (jika menerima)  <span class="_ _22"> </span>: <span class="_ _4"> </span>1 lembar (photo copy).</div>
<div class="t m0 xb h3 y39 ff1 fs0 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Ijazah PAUD / TK<span class="_ _23"> </span>:<span class="_ _d"> </span>1 lembar (photo copy &amp; legalisir kepala PAUD / TK asal).</div>

<!-- <div class="t m0 xa h9 y3a ff1 fs1 fc0 sc0 ls0 ws0">Keterangan : </div>
<div class="t m0 xa h3 y3b ff1 fs0 fc0 sc0 ls0 ws0"> *  =  Coret yang tidak perlu.</div>
<div class="t m0 xa h3 y3c ff1 fs0 fc0 sc0 ls0 ws0">Isilah data dengan benar dan jelas.</div> -->
<div class="t m0 x0 h3 y3d ff1 fs0 fc0 sc0 ls0 ws0">   </div>

<div class="c xe y3e w3 ha"><div class="t m0 xf h3 y3f ff1 fs0 fc0 sc0 ls0 ws0">Binamu, <?= tgl_indo(date('Y-m-d')); ?></div>

<div class="t m0 x10 h3 y40 ff1 fs0 fc0 sc0 ls0 ws0">   Calon Peserta Didik,</div>
<div class="t m0 x11 h3 y41 ff1 fs0 fc0 sc0 ls0 ws0">   ...................................</div></div>

<div class="c x12 y42" style="margin-bottom: -15px;">
<?php
$foto = $data['foto'];
if ($foto==='' OR $foto === null){?>
<img class="img-thumbnail" src="../../../assets/image/anonim.png" alt="User profile picture"
style="height: 132px;border: 1px solid #000;padding: 3px;">
<?php } else { ?>
<img class="img-thumbnail" src="../../../assets/image/foto_siswa/<?= $data['foto']; ?>"
alt="User profile picture" style="height: 132px;border: 1px solid #000;padding: 3px;">
<?php }?>
</div>

<!-- <div class="c x12 y42 w4 hb"><div class="t m0 x13 hc y43 ff1 fs5 fc0 sc0 ls0 ws0">Pas Photo </div>
<div class="t m0 x14 hc y44 ff1 fs5 fc0 sc0 ls0 ws0">Calon Peserta </div>
<div class="t m0 x15 hc y45 ff1 fs5 fc0 sc0 ls0 ws0">Didik</div>
<div class="t m0 x3 hc y46 ff1 fs5 fc0 sc0 ls0 ws0"> 3 x 4 cm </div></div> -->

<div class="c xa y47 w5 hd"><div class="t m0 x13 h8 y48 ff2 fs0 fc0 sc0 ls0 ws0"> NOMOR PENDAFTARAN</div></div>
<div class="c x16 y49 w6 he"><div class="t m0 x17 hf y4a ff4 fs6 fc1 sc0 ls0 ws0" style="font-family: math;">Diisi otomatis oleh system,</div>
<div class="t m0 x18 hf y4b ff4 fs6 fc1 sc0 ls0 ws0" style="margin: 5px;font-size: 70px;font-weight: bold;"><?= $data['no_pendaftaran']?></div></div>

<div class="c x19 y4c w7 h10"><div class="t m0 x1a h8 y4d ff2 fs0 fc0 sc0 ls0 ws0">Kolom cek lampiran kelengkapan data calon peserta didik di bawah ini diceklist oleh Panitia PPDB :</div>

<div class="t m0 x1b h3 y4e ff1 fs0 fc0 sc0 ls0 ws0">Cek Lampiran : <span class="_ _6"> </span>1. Pas photo 3 x 4 cm                              <span class="_ _6"> </span>3. Kartu Keluarga (KK) <span class="_ _14"> </span>5. Ijazah PAUD / TK (jika ada)</div><div class="t m0 xd h3 y4f ff1 fs0 fc0 sc0 ls0 ws0">2. Akta Kelahiran / Surat Ket. Lahir <span class="_ _24"> </span>4. KPS / KKS (jika menerima)     .<span class="_ _25"> </span>6. ............................................</div></div></div>

<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>

<div class="loading-indicator">

</div>
<?php
          endforeach; 
          mysqli_free_result($query);?>
</body>
<script>
	window.print();
</script>
</html>
