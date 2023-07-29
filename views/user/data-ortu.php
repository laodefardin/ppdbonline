<?php
$title = "Informasi Data Orangtua/Wali";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' ");
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            Silahkan Isi dan Cek Data Anda dengan baik dan benar sebelum mencetak Bukti Pendaftaran
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
              <form action="../../app/controller/proses-data-ortu.php" method="POST" enctype="multipart/form-data">
                <?php
          foreach ($query as $data) : ?>
                <div class="container-fluid col-sm-10">
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
                          <input type="text" class="form-control" name="no_pendaftaran"
                            value="<?= $data['no_pendaftaran']?>" hidden>
                          <label for="nama_ayah">Nama ayah Kandung <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_ayah" value="<?= $data['nama_ayah']?>"
                            required>
                          <small class="form-text text-muted">Nama ayah Kandung peserta didik sesuai dokumen resmi yang
                            berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                            H.)</small>
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ayah">Pendidikan<span class="text-danger">*</span></label>
                          <select name="pendidikan_ayah" class="form-control" required>
                            <option value="Tidak Sekolah"
                              <?php if ($data['pendidikan_ayah'] == 'Tidak Sekolah') { echo 'selected'; } ?>>Tidak
                              Sekolah</option>
                            <option value="Putus SD"
                              <?php if ($data['pendidikan_ayah'] == 'Putus SD') { echo 'selected'; } ?>>Putus SD
                            </option>
                            <option value="SD Sederajat"
                              <?php if ($data['pendidikan_ayah'] == 'SD Sederajat') { echo 'selected'; } ?>>SD Sederajat
                            </option>
                            <option value="SMP Sederajat"
                              <?php if ($data['pendidikan_ayah'] == 'SMP Sederajat') { echo 'selected'; } ?>>SMP
                              Sederajat</option>
                            <option value="SMA Sederajat"
                              <?php if ($data['pendidikan_ayah'] == 'SMA Sederajat') { echo 'selected'; } ?>>SMA
                              Sederajat</option>
                            <option value="D1" <?php if ($data['pendidikan_ayah'] == 'D1') { echo 'selected'; } ?>>D1
                            </option>
                            <option value="D2" <?php if ($data['pendidikan_ayah'] == 'D2') { echo 'selected'; } ?>>D2
                            </option>
                            <option value="D3" <?php if ($data['pendidikan_ayah'] == 'D3') { echo 'selected'; } ?>>D3
                            </option>
                            <option value="D4/S1"
                              <?php if ($data['pendidikan_ayah'] == 'D4/S1') { echo 'selected'; } ?>>D4/S1</option>
                            <option value="S2" <?php if ($data['pendidikan_ayah'] == 'S2') { echo 'selected'; } ?>>S2
                            </option>
                            <option value="S3" <?php if ($data['pendidikan_ayah'] == 'S3') { echo 'selected'; } ?>>S3
                            </option>
                          </select>
                          <small class="form-text text-muted">Pendidikan terakhir ayah kandung peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="penghasilan_ayah">Penghasilan Bulanan<span class="text-danger">*</span></label>
                          <select name="penghasilan_ayah" class="form-control" required>
                            <option value="0" <?php if ($data['penghasilan_ayah'] == '0') { echo 'selected'; } ?>>-
                            </option>
                            <option value="Kurang dari 500.000"
                              <?php if ($data['penghasilan_ayah'] == 'Kurang dari 500.000') { echo 'selected'; } ?>>
                              Kurang dari 500.000</option>
                            <option value="500.000 - 999.999"
                              <?php if ($data['penghasilan_ayah'] == '500.000 - 999.999') { echo 'selected'; } ?>>
                              500.000 - 999.999</option>
                            <option value="1 juta - 1.999.999"
                              <?php if ($data['penghasilan_ayah'] == '1 juta - 1.999.999') { echo 'selected'; } ?>>1
                              juta - 1.999.999</option>
                            <option value="2 juta - 4.999.999"
                              <?php if ($data['penghasilan_ayah'] == '2 juta - 4.999.999') { echo 'selected'; } ?>>2
                              juta - 4.999.999</option>
                            <option value="5 juta - 20 juta"
                              <?php if ($data['penghasilan_ayah'] == '5 juta - 20 juta') { echo 'selected'; } ?>>5 juta
                              - 20 juta</option>
                            <option value="Lebih dari 20 juta"
                              <?php if ($data['penghasilan_ayah'] == 'Lebih dari 20 juta') { echo 'selected'; } ?>>Lebih
                              dari 20 juta</option>
                          </select>
                          <small class="form-text text-muted">Rentang penghasilan ayah kadung peserta didik. Kosongkan
                            kolom
                            ini apabila ayah kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tahun_lahir_ayah">Tahun Lahir Ayah </label>
                          <input type="text" class="form-control datepicker" name="tahun_lahir_ayah" minlength="4"
                            maxlength="4" value="<?= $data['tahun_lahir_ayah']?>" required>
                          <small class="form-text text-muted">Tahun lahir ayah Kandung peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ayah">Pekerjaan</label>
                          <select name="pekerjaan_ayah" class="form-control" required>
                            <option value="Tidak Bekerja"
                              <?php if ($data['pekerjaan_ayah'] == 'Tidak Bekerja') { echo 'selected'; } ?>>Tidak
                              Bekerja</option>
                            <option value="Nelayan"
                              <?php if ($data['pekerjaan_ayah'] == 'Nelayan') { echo 'selected'; } ?>>Nelayan</option>
                            <option value="Petani"
                              <?php if ($data['pekerjaan_ayah'] == 'Petani') { echo 'selected'; } ?>>Petani</option>
                            <option value="Peternak"
                              <?php if ($data['pekerjaan_ayah'] == 'Peternak') { echo 'selected'; } ?>>Peternak</option>
                            <option value="PNS/TNI/POLRI"
                              <?php if ($data['pekerjaan_ayah'] == 'PNS/TNI/POLRI') { echo 'selected'; } ?>>
                              PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta"
                              <?php if ($data['pekerjaan_ayah'] == 'Karyawan Swasta') { echo 'selected'; } ?>>Karyawan
                              Swasta</option>
                            <option value="Pedagang Kecil"
                              <?php if ($data['pekerjaan_ayah'] == 'Pedagang Kecil') { echo 'selected'; } ?>>Pedagang
                              Kecil</option>
                            <option value="Pedagang Besar"
                              <?php if ($data['pekerjaan_ayah'] == 'Pedagang Besar') { echo 'selected'; } ?>>Pedagang
                              Besar</option>
                            <option value="Wiraswasta"
                              <?php if ($data['pekerjaan_ayah'] == 'Wiraswasta') { echo 'selected'; } ?>>Wiraswasta
                            </option>
                            <option value="Wirausaha"
                              <?php if ($data['pekerjaan_ayah'] == 'Wirausaha') { echo 'selected'; } ?>>Wirausaha
                            </option>
                            <option value="Buruh" <?php if ($data['pekerjaan_ayah'] == 'Buruh') { echo 'selected'; } ?>>
                              Buruh</option>
                            <option value="Pensiunan"
                              <?php if ($data['pekerjaan_ayah'] == 'Pensiunan') { echo 'selected'; } ?>>Pensiunan
                            </option>
                            <option value="Lain-lain"
                              <?php if ($data['pekerjaan_ayah'] == 'Lain-lain') { echo 'selected'; } ?>>Lain-lain
                            </option>
                            <option value="Meninggal Dunia"
                              <?php if ($data['pekerjaan_ayah'] == 'Meninggal Dunia') { echo 'selected'; } ?>>Meninggal
                              Dunia</option>
                          </select>
                          <small class="form-text text-muted">Pekerjaan utama ayah kandung peserta didik. Pilih
                            Meninggal
                            Dunia apabila ayah Kandung peserta didik telah meninggal.</small>
                        </div>
                        <div class="form-group">
                          <label for="nohp_ayah">No Handphone Ayah <span class="text-danger">*</span></label>
                          <input type="text" class="form-control datepicker" name="nohp_ayah"
                            value="<?= $data['nohp_ayah']?>" required>
                          <small class="form-text text-muted">No Handphone ayah Kandung peserta didik.</small>
                        </div>

                      </div>

                      <div class="col-lg-12 text-center">
                        <h6><strong>DATA IBU KANDUNG</h6></strong>
                        <hr class="bg-primary">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama_ibu">Nama ibu Kandung <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_ibu" value="<?= $data['nama_ibu']?>"
                            required>
                          <small class="form-text text-muted">Nama ibu Kandung peserta didik sesuai dokumen resmi yang
                            berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                            H.)</small>
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ibu">Pendidikan</label>
                          <select name="pendidikan_ibu" class="form-control" required>
                            <option value="Tidak Sekolah"
                              <?php if ($data['pendidikan_ibu'] == 'Tidak Sekolah') { echo 'selected'; } ?>>Tidak
                              Sekolah</option>
                            <option value="Putus SD"
                              <?php if ($data['pendidikan_ibu'] == 'Putus SD') { echo 'selected'; } ?>>Putus SD</option>
                            <option value="SD Sederajat"
                              <?php if ($data['pendidikan_ibu'] == 'SD Sederajat') { echo 'selected'; } ?>>SD Sederajat
                            </option>
                            <option value="SMP Sederajat"
                              <?php if ($data['pendidikan_ibu'] == 'SMP Sederajat') { echo 'selected'; } ?>>SMP
                              Sederajat</option>
                            <option value="SMA Sederajat"
                              <?php if ($data['pendidikan_ibu'] == 'SMA Sederajat') { echo 'selected'; } ?>>SMA
                              Sederajat</option>
                            <option value="D1" <?php if ($data['pendidikan_ibu'] == 'D1') { echo 'selected'; } ?>>D1
                            </option>
                            <option value="D2" <?php if ($data['pendidikan_ibu'] == 'D2') { echo 'selected'; } ?>>D2
                            </option>
                            <option value="D3" <?php if ($data['pendidikan_ibu'] == 'D3') { echo 'selected'; } ?>>D3
                            </option>
                            <option value="D4/S1" <?php if ($data['pendidikan_ibu'] == 'D4/S1') { echo 'selected'; } ?>>
                              D4/S1</option>
                            <option value="S2" <?php if ($data['pendidikan_ibu'] == 'S2') { echo 'selected'; } ?>>S2
                            </option>
                            <option value="S3" <?php if ($data['pendidikan_ibu'] == 'S3') { echo 'selected'; } ?>>S3
                            </option>
                          </select>
                          <small class="form-text text-muted">Pendidikan terakhir ibu kandung peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                          <select name="penghasilan_ibu" class="form-control">
                            <option value="0" <?php if ($data['penghasilan_ibu'] == '0') { echo 'selected'; } ?>>-
                            </option>
                            <option value="Kurang dari 500.000"
                              <?php if ($data['penghasilan_ibu'] == 'Kurang dari 500.000') { echo 'selected'; } ?>>
                              Kurang dari 500.000</option>
                            <option value="500.000 - 999.999"
                              <?php if ($data['penghasilan_ibu'] == '500.000 - 999.999') { echo 'selected'; } ?>>500.000
                              - 999.999</option>
                            <option value="1 juta - 1.999.999"
                              <?php if ($data['penghasilan_ibu'] == '1 juta - 1.999.999') { echo 'selected'; } ?>>1 juta
                              - 1.999.999</option>
                            <option value="2 juta - 4.999.999"
                              <?php if ($data['penghasilan_ibu'] == '2 juta - 4.999.999') { echo 'selected'; } ?>>2 juta
                              - 4.999.999</option>
                            <option value="5 juta - 20 juta"
                              <?php if ($data['penghasilan_ibu'] == '5 juta - 20 juta') { echo 'selected'; } ?>>5 juta -
                              20 juta</option>
                            <option value="Lebih dari 20 juta"
                              <?php if ($data['penghasilan_ibu'] == 'Lebih dari 20 juta') { echo 'selected'; } ?>>Lebih
                              dari 20 juta</option>
                          </select>
                          <small class="form-text text-muted">Rentang penghasilan ibu kandung peserta didik. Kosongkan
                            kolom
                            ini apabila ibu kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tahun_lahir_ibu">Tahun Lahir Ibu </label>
                          <input type="text" class="form-control datepicker" name="tahun_lahir_ibu" minlength="4"
                            maxlength="4" value="<?= $data['tahun_lahir_ibu']?>">
                          <small class="form-text text-muted">Tahun lahir ibu Kandung peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ibu">Pekerjaan</label>
                          <select name="pekerjaan_ibu" class="form-control">
                            <option value="Tidak Bekerja"
                              <?php if ($data['pekerjaan_ibu'] == 'Tidak Bekerja') { echo 'selected'; } ?>>Tidak Bekerja
                            </option>
                            <option value="Nelayan"
                              <?php if ($data['pekerjaan_ibu'] == 'Nelayan') { echo 'selected'; } ?>>Nelayan</option>
                            <option value="Petani"
                              <?php if ($data['pekerjaan_ibu'] == 'Petani') { echo 'selected'; } ?>>Petani</option>
                            <option value="Peternak"
                              <?php if ($data['pekerjaan_ibu'] == 'Peternak') { echo 'selected'; } ?>>Peternak</option>
                            <option value="PNS/TNI/POLRI"
                              <?php if ($data['pekerjaan_ibu'] == 'PNS/TNI/POLRI') { echo 'selected'; } ?>>PNS/TNI/POLRI
                            </option>
                            <option value="Karyawan Swasta"
                              <?php if ($data['pekerjaan_ibu'] == 'Karyawan Swasta') { echo 'selected'; } ?>>Karyawan
                              Swasta</option>
                            <option value="Pedagang Kecil"
                              <?php if ($data['pekerjaan_ibu'] == 'Pedagang Kecil') { echo 'selected'; } ?>>Pedagang
                              Kecil</option>
                            <option value="Pedagang Besar"
                              <?php if ($data['pekerjaan_ibu'] == 'Pedagang Besar') { echo 'selected'; } ?>>Pedagang
                              Besar</option>
                            <option value="Wiraswasta"
                              <?php if ($data['pekerjaan_ibu'] == 'Wiraswasta') { echo 'selected'; } ?>>Wiraswasta
                            </option>
                            <option value="Wirausaha"
                              <?php if ($data['pekerjaan_ibu'] == 'Wirausaha') { echo 'selected'; } ?>>Wirausaha
                            </option>
                            <option value="Buruh" <?php if ($data['pekerjaan_ibu'] == 'Buruh') { echo 'selected'; } ?>>
                              Buruh</option>
                            <option value="Pensiunan"
                              <?php if ($data['pekerjaan_ibu'] == 'Pensiunan') { echo 'selected'; } ?>>Pensiunan
                            </option>
                            <option value="Lain-lain"
                              <?php if ($data['pekerjaan_ibu'] == 'Lain-lain') { echo 'selected'; } ?>>Lain-lain
                            </option>
                            <option value="Meninggal Dunia"
                              <?php if ($data['pekerjaan_ibu'] == 'Meninggal Dunia') { echo 'selected'; } ?>>Meninggal
                              Dunia</option>
                          </select>
                          <small class="form-text text-muted">Pekerjaan utama ibu kandung peserta didik. Pilih Meninggal
                            Dunia apabila ibu Kandung peserta didik telah meninggal.</small>
                        </div>
                        <div class="form-group">
                          <label for="nohp_ibu">No Handphone Ibu <span class="text-danger">*</span></label>
                          <input type="text" class="form-control datepicker" name="nohp_ibu"
                            value="<?= $data['nohp_ibu']?>">
                          <small class="form-text text-muted">No Handphone ibu Kandung peserta didik.</small>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="alamat_ortu">Alamat Tinggal OrangTua <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_ortu" required=""
                            style="height:80px"><?= $data['alamat_ortu']?></textarea>
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
                          <input type="text" class="form-control" name="nama_wali" value="<?= $data['nama_wali']?>">
                          <small class="form-text text-muted">Nama wali Kandung peserta didik sesuai dokumen resmi yang
                            berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                            H.) berikan tanda ( - ) jika anda anda sudah mengisi data ayah dan ibu</small>
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_wali">Pendidikan</label>
                          <select name="pendidikan_wali" class="form-control">
                            <option value="Tidak Sekolah"
                              <?php if ($data['pendidikan_wali'] == 'Tidak Sekolah') { echo 'selected'; } ?>>Tidak
                              Sekolah</option>
                            <option value="Putus SD"
                              <?php if ($data['pendidikan_wali'] == 'Putus SD') { echo 'selected'; } ?>>Putus SD
                            </option>
                            <option value="SD Sederajat"
                              <?php if ($data['pendidikan_wali'] == 'SD Sederajat') { echo 'selected'; } ?>>SD Sederajat
                            </option>
                            <option value="SMP Sederajat"
                              <?php if ($data['pendidikan_wali'] == 'SMP Sederajat') { echo 'selected'; } ?>>SMP
                              Sederajat</option>
                            <option value="SMA Sederajat"
                              <?php if ($data['pendidikan_wali'] == 'SMA Sederajat') { echo 'selected'; } ?>>SMA
                              Sederajat</option>
                            <option value="D1" <?php if ($data['pendidikan_wali'] == 'D1') { echo 'selected'; } ?>>D1
                            </option>
                            <option value="D2" <?php if ($data['pendidikan_wali'] == 'D2') { echo 'selected'; } ?>>D2
                            </option>
                            <option value="D3" <?php if ($data['pendidikan_wali'] == 'D3') { echo 'selected'; } ?>>D3
                            </option>
                            <option value="D4/S1"
                              <?php if ($data['pendidikan_wali'] == 'D4/S1') { echo 'selected'; } ?>>D4/S1</option>
                            <option value="S2" <?php if ($data['pendidikan_wali'] == 'S2') { echo 'selected'; } ?>>S2
                            </option>
                            <option value="S3" <?php if ($data['pendidikan_wali'] == 'S3') { echo 'selected'; } ?>>S3
                            </option>
                          </select>
                          <small class="form-text text-muted">Pendidikan terakhir wali peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="penghasilan_wali">Penghasilan Bulanan</label>
                          <select name="penghasilan_wali" class="form-control">
                            <option value="0" <?php if ($data['penghasilan_wali'] == '0') { echo 'selected'; } ?>>-
                            </option>
                            <option value="Kurang dari 500.000"
                              <?php if ($data['penghasilan_wali'] == 'Kurang dari 500.000') { echo 'selected'; } ?>>
                              Kurang dari 500.000</option>
                            <option value="500.000 - 999.999"
                              <?php if ($data['penghasilan_wali'] == '500.000 - 999.999') { echo 'selected'; } ?>>
                              500.000 - 999.999</option>
                            <option value="1 juta - 1.999.999"
                              <?php if ($data['penghasilan_wali'] == '1 juta - 1.999.999') { echo 'selected'; } ?>>1
                              juta - 1.999.999</option>
                            <option value="2 juta - 4.999.999"
                              <?php if ($data['penghasilan_wali'] == '2 juta - 4.999.999') { echo 'selected'; } ?>>2
                              juta - 4.999.999</option>
                            <option value="5 juta - 20 juta"
                              <?php if ($data['penghasilan_wali'] == '5 juta - 20 juta') { echo 'selected'; } ?>>5 juta
                              - 20 juta</option>
                            <option value="Lebih dari 20 juta"
                              <?php if ($data['penghasilan_wali'] == 'Lebih dari 20 juta') { echo 'selected'; } ?>>Lebih
                              dari 20 juta</option>
                          </select>
                          <small class="form-text text-muted">Rentang penghasilan wali peserta didik. Kosongkan kolom
                            ini apabila wali peserta didik telah meninggal dunia atau tidak bekerja.</small>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tahun_lahir_wali">Tahun Lahir Wali </label>
                          <input type="text" class="form-control datepicker" name="tahun_lahir_wali" minlength="4"
                            maxlength="4" value="<?= $data['tahun_lahir_wali']?>">
                          <small class="form-text text-muted">Tahun lahir wali Kandung peserta didik.</small>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_wali">Pekerjaan</label>
                          <select name="pekerjaan_wali" class="form-control">
                            <option value="Tidak Bekerja"
                              <?php if ($data['pekerjaan_wali'] == 'Tidak Bekerja') { echo 'selected'; } ?>>Tidak
                              Bekerja</option>
                            <option value="Nelayan"
                              <?php if ($data['pekerjaan_wali'] == 'Nelayan') { echo 'selected'; } ?>>Nelayan</option>
                            <option value="Petani"
                              <?php if ($data['pekerjaan_wali'] == 'Petani') { echo 'selected'; } ?>>Petani</option>
                            <option value="Peternak"
                              <?php if ($data['pekerjaan_wali'] == 'Peternak') { echo 'selected'; } ?>>Peternak</option>
                            <option value="PNS/TNI/POLRI"
                              <?php if ($data['pekerjaan_wali'] == 'PNS/TNI/POLRI') { echo 'selected'; } ?>>
                              PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta"
                              <?php if ($data['pekerjaan_wali'] == 'Karyawan Swasta') { echo 'selected'; } ?>>Karyawan
                              Swasta</option>
                            <option value="Pedagang Kecil"
                              <?php if ($data['pekerjaan_wali'] == 'Pedagang Kecil') { echo 'selected'; } ?>>Pedagang
                              Kecil</option>
                            <option value="Pedagang Besar"
                              <?php if ($data['pekerjaan_wali'] == 'Pedagang Besar') { echo 'selected'; } ?>>Pedagang
                              Besar</option>
                            <option value="Wiraswasta"
                              <?php if ($data['pekerjaan_wali'] == 'Wiraswasta') { echo 'selected'; } ?>>Wiraswasta
                            </option>
                            <option value="Wirausaha"
                              <?php if ($data['pekerjaan_wali'] == 'Wirausaha') { echo 'selected'; } ?>>Wirausaha
                            </option>
                            <option value="Buruh" <?php if ($data['pekerjaan_wali'] == 'Buruh') { echo 'selected'; } ?>>
                              Buruh</option>
                            <option value="Pensiunan"
                              <?php if ($data['pekerjaan_wali'] == 'Pensiunan') { echo 'selected'; } ?>>Pensiunan
                            </option>
                            <option value="Lain-lain"
                              <?php if ($data['pekerjaan_wali'] == 'Lain-lain') { echo 'selected'; } ?>>Lain-lain
                            </option>
                            <option value="Meninggal Dunia"
                              <?php if ($data['pekerjaan_wali'] == 'Meninggal Dunia') { echo 'selected'; } ?>>Meninggal
                              Dunia</option>
                          </select>
                          <small class="form-text text-muted">Pekerjaan utama wali peserta didik. Pilih Meninggal
                            Dunia apabila wali peserta didik telah meninggal.</small>
                        </div>
                        <div class="form-group">
                          <label for="nohp_wali">No Handphone Wali</label>
                          <input type="text" class="form-control datepicker" name="nohp_wali"
                            value="<?= $data['nohp_wali']?>">
                          <small class="form-text text-muted">No Handphone wali Kandung peserta didik.</small>
                        </div>
                      </div>
                      <div class="col-md-12">
                      <div class="form-group">
                          <label for="alamat_wali">Alamat Tinggal Wali <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_wali"
                            style="height:80px"><?= $data['alamat_wali']?></textarea>
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
                        class="nav-icon fas fa-save"></i> Simpan Data</button>
                  </div>
                </div>
                <?php
          endforeach; 
          mysqli_free_result($query);?>
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