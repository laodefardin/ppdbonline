<?php
$title = "Tambah Data Siswa";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
?>

<?php
  //menampilkan pesan jika ada pesan
  if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
  $pesan = $_SESSION['pesan']; ?>

<div id="flash-data" data-flashdata="<?= $_SESSION['notif'];?>" data-type="<?= $_SESSION['status']; ?>"
  data-message="<?= $_SESSION['pesan']; ?>">
</div>
<?php }//mengatur session pesan menjadi kosong
  $_SESSION['pesan'] = '';
  unset($_SESSION['pesan']);
  unset($_SESSION['status']);
  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home </a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Silahkan Isi dan Cek Data dengan baik dan benar sebelum menyimpan
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!-- <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Online Store Visitors</h3>
                <a href="javascript:void(0);">View Report</a>
              </div>
            </div> -->
            <div class="card-body">
              <form action="../../app/controller/proses-data-siswa_admin.php" method="POST" enctype="multipart/form-data">
                <div class="container-fluid col-sm-10">
                  <!-- your steps content here -->
                  <div id="data-siswa" class="content" role="tabpanel" aria-labelledby="data-siswa-trigger">
                    <div class="text-center mb-lg-4">
                      <strong>
                        <h5>Masukan informasi Data Peserta Didik</h6>
                      </strong>
                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Username <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="username" value="" required>
                          <small class="form-text text-muted">Masukkan username atau Nama panggilan peserta didik
                          </small>
                        </div>
                        <div class="form-group">
                          <label for="nama_siswa">Nama Lengkap <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="" name="nama_siswa" required>
                          <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku
                            (Akta
                            atau
                            ijazah sebelumnya).</small>
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                          <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki - laki">Laki - laki
                            </option>
                            <option value="Perempuan">Perempuan
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" name="tanggal_lahir" value="" required>
                          <small class="form-text text-muted">Tanggal lahir peserta didik sesuai dokumen resmi yang
                            berlaku.
                            Hanya
                            bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id"
                              target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                        </div>
                        <div class="form-group">
                          <label for="agama_siswa">Agama &amp; Kepercayaan <span class="text-danger">*</span></label>
                          <select name="agama_siswa" class="form-control" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protetan">Kristen Protetan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Kepercayaan Kepada Tuhan YME">Kepercayaan Kepada Tuhan YME</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <small class="form-text text-muted">Agama atau kepercayaan yang dianut oleh peserta didik.
                            Apabila
                            peserta didik adalah penghayat kepercayaan (misalnya pada daerah tertentu yang masih
                            memiliki
                            penganut
                            kepercayaan), dapat memilih opsi Kepercayaan Kepada Tuhan YME.</small>
                        </div>
                        <div class="form-group">
                          <label for="alamat_jalan">Alamat Tinggal <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_jalan" required=""
                            style="height:80px"></textarea>
                          <!-- <input type="text" class="form-control" name="alamat_jalan" value=""> -->
                          <small class="form-text text-muted">Jalur tempat tinggal peserta didik, terdiri atas gang,
                            kompleks,
                            blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain
                            pada
                            bgian
                            ini. Sebagai contoh: peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang
                            berada
                            pada
                            Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka,
                            Desa
                            Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nonik">NIK <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nonik" value="" required minlength="16"
                            maxlength="16">
                          <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu
                            keluarga,
                            Kartu
                            Identitas Anak, atau KTP (jika sudah memiliki). NIK memiliki format 16 digit angka.
                            Contoh:
                            6112090906021104.</small>
                          <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga,
                            karena
                            keduannya memiliki format yang sama.</small>
                        </div>
                        <div class="form-group">
                          <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="tempat_lahir" value="" required>
                          <small class="form-text text-muted">Tempat lahir peserta didik sesuai dokumen resmi yang
                            berlaku.</small>
                        </div>
                        <div class="form-group">
                          <label for="nama_negara">Kewarganegaraan<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_negara" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="nama_provinsi">Provinsi Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_provinsi" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="nama_kabupaten">Kabupaten / Kota Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_kabupaten" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kelurahan">Nama Kelurahan / Desa <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kelurahan" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kecamatan">Kecamatan Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kecamatan" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="kode_pos">Kode Pos <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="kode_pos" value="" required="">
                        </div>
                        <div class="form-group">
                          <label for="customFile">Pas Foto 3x4 <span class="text-danger">*</span></label>
                          <div class="custom-file">
                          <input class="custom-file-input" id="customFile" type="file" name="foto" required>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        
                          <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. , format:
                            JPG,JPEG,PNG</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="data-siswa2" class="content" role="tabpanel" aria-labelledby="data-siswa2-trigger">
                    <div class="text-center mb-lg-4">
                      <strong>
                        <h5>Masukan informasi Data Rincian Peserta Didik</h6>
                      </strong>
                      <hr>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="moda_transportasi">Moda Transportasi <span class="text-danger">*</span></label>
                          <select name="moda_transportasi" class="form-control" required>
                            <option value="Jalan Kaki">Jalan Kaki</option>
                            <option value="Kendaraan Priadi">Kendaraan Priadi</option>
                            <option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
                            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                            <option value="Kereta Api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca
                            </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <small class="form-text text-muted">Jenis transportasi utama atau yang paling sering digunakan
                            peserta
                            didik untuk berangkat kesekolah.</small>
                        </div>
                        <div class="form-group">
                          <label for="tinggi_badan">Tinggi Badan <span class="text-danger">*</span></label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="tinggi_badan" value="" required>
                            <div class="input-group-prepend">
                              <div class="input-group-text">CM</div>
                            </div>
                          </div>
                          <small class="form-text text-muted">Tinggi badan pada satuan sentimeter.</small>
                        </div>
                        <div class="form-group">
                          <label for="anak_keberapa">Anak Keberapa <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="anak_keberapa" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                          <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh peserta didik</small>
                          <select name="kebutuhan_khusus" class="form-control" required>
                            <option value="Tidak">Tidak</option>
                            <option value="Netra (A)">Netra (A)</option>
                            <option value="Rungu (B)">Rungu (B)</option>
                            <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                            <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                            <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                            <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                            <option value="Laras (E)">Laras (E)</option>
                            <option value="Wicara (F)">Wicara (F)</option>
                            <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                            <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                            <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                            <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                            <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                            <option value="Narkoba (N)">Narkoba (N)</option>
                            <option value="Indigo (O)">Indigo (O)</option>
                            <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                            <option value="Autis (Q)">Autis (Q)</option>
                          </select>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
                          <select name="tempat_tinggal" class="form-control" required>
                            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                            <option value="Wali">Wali</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang
                            telah
                            diisikan pada kolom-kolom sebelumnya di atas).</small>
                        </div>

                        <div class="form-group">
                          <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="berat_badan" value="" required>
                            <div class="input-group-prepend">
                              <div class="input-group-text">Kg</div>
                            </div>
                          </div>
                          <small class="form-text text-muted">Berat badan pada satuan kilogram.</small>
                        </div>
                        <div class="form-group">
                          <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung <span
                              class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="jumlah_saudara_kandung" value="" required>
                          <small class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik.
                            Kosongkan
                            apabila peserta adalah anak tunggal</small>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div id="data-ortu" class="content" role="tabpanel" aria-labelledby="data-ortu-trigger">
                  <div class="text-center mb-lg-4">
                    <strong>
                      <h5>Masukan informasi Data Orang tua / Wali</h6>
                    </strong>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA AYAH KANDUNG</h6></strong>
                      <hr class="bg-primary">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_ayah">Nama ayah Kandung <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_ayah" value="" required>
                        <small class="form-text text-muted">Nama ayah Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.)</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_ayah">Pendidikan<span class="text-danger">*</span></label>
                        <select name="pendidikan_ayah" class="form-control" required>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir ayah kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Bulanan<span class="text-danger">*</span></label>
                        <select name="penghasilan_ayah" class="form-control" required>
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan ayah kadung peserta didik. Kosongkan
                          kolom
                          ini apabila ayah kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_ayah">Tahun Lahir Ayah </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_ayah" value="" required>
                        <small class="form-text text-muted">Tahun lahir ayah Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan</label>
                        <select name="pekerjaan_ayah" class="form-control" required>
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama ayah kandung peserta didik. Pilih Meninggal
                          Dunia apabila ayah Kandung peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_ayah">No Handphone Ayah <span class="text-danger">*</span></label>
                        <input type="text" class="form-control datepicker" name="nohp_ayah" value="" required>
                        <small class="form-text text-muted">No Handphone ayah Kandung peserta didik.</small>
                      </div>

                    </div>

                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA IBU KANDUNG</h6></strong>
                      <hr class="">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_ibu">Nama ibu Kandung <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_ibu" value="" required>
                        <small class="form-text text-muted">Nama ibu Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.)</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_ibu">Pendidikan</label>
                        <select name="pendidikan_ibu" class="form-control" required>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir ibu kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                        <select name="penghasilan_ibu" class="form-control">
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan ibu kandung peserta didik. Kosongkan
                          kolom
                          ini apabila ibu kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_ibu">Tahun Lahir Ibu </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_ibu" value="">
                        <small class="form-text text-muted">Tahun lahir ibu Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan</label>
                        <select name="pekerjaan_ibu" class="form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama ibu kandung peserta didik. Pilih Meninggal
                          Dunia apabila ibu Kandung peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_ibu">No Handphone Ibu <span class="text-danger">*</span></label>
                        <input type="text" class="form-control datepicker" name="nohp_ibu" value="">
                        <small class="form-text text-muted">No Handphone ibu Kandung peserta didik.</small>
                      </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="alamat_ortu">Alamat Tinggal OrangTua <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_ortu" required="" style="height:80px">Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</textarea>
                          <!-- <input type="text" class="form-control" name="alamat_jalan" value=""> -->
                          <small class="form-text text-muted">Jalur tempat tinggal OrangTua, terdiri atas gang,
                            kompleks,
                            blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain
                            pada
                            bgian
                            ini. Sebagai contoh: orangtua tinggal di sebuah kompleks perumahan Griya Adam yang
                            berada
                            pada
                            Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka,
                            Desa
                            Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                        </div>
                      </div>
                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA WALI</h6></strong>
                      <small class="form-text text-muted">Kosongkan jika data Ayah dan Ibu Sudah Diisi</small>
                      <hr class="bg-primary">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_wali">Nama wali</label>
                        <input type="text" class="form-control" name="nama_wali" value="">
                        <small class="form-text text-muted">Nama wali Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.) berikan tanda ( - ) jika anda anda sudah mengisi data ayah dan ibu</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_wali">Pendidikan</label>
                        <select name="pendidikan_wali" class="form-control">
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir wali peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_wali">Penghasilan Bulanan</label>
                        <select name="penghasilan_wali" class="form-control">
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan wali peserta didik. Kosongkan kolom
                          ini apabila wali peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_wali">Tahun Lahir Wali </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_wali" value="">
                        <small class="form-text text-muted">Tahun lahir wali Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_wali">Pekerjaan</label>
                        <select name="pekerjaan_wali" class="form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama wali peserta didik. Pilih Meninggal
                          Dunia apabila wali peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_wali">No Handphone Wali</label>
                        <input type="text" class="form-control datepicker" name="nohp_wali" value="">
                        <small class="form-text text-muted">No Handphone wali Kandung peserta didik.</small>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="alamat_wali">Alamat Tinggal Wali <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_wali" style="height:80px"></textarea>
                          <!-- <input type="text" class="form-control" name="alamat_jalan" value=""> -->
                          <small class="form-text text-muted">Jalur tempat tinggal Wali, terdiri atas gang,
                            kompleks,
                            blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain
                            pada
                            bgian
                            ini. Sebagai contoh: wali tinggal di sebuah kompleks perumahan Griya Adam yang
                            berada
                            pada
                            Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka,
                            Desa
                            Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                        </div>
                        </div>
                  </div>

                  <button type="submit" name="tambah" class="btn btn-primary float-lg-right"><i
                        class="nav-icon fas fa-save"></i>
                      Simpan Data</button>
                </div>
                </div>
              </form>

            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>