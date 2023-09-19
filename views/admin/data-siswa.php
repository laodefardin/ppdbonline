<?php
$title = "Informasi Data Siswa";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$id = $_GET['no-pendaftaran'];
$query = $koneksi->query("SELECT * FROM tb_siswa WHERE no_pendaftaran = '$id' ");
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
            Silahkan Isi dan Cek Data peserta didik dengan baik dan benar sebelum mencetak Bukti Pendaftaran
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
              <form action="../../app/controller/proses-data-siswa.php" method="POST" enctype="multipart/form-data">
                <?php
          foreach ($query as $data) : ?>
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
                          <label for="no_pendaftaran">Nomor Pendaftaran</label>
                          <input type="text" class="form-control" name="no_pendaftaran"
                            value="<?= $data['no_pendaftaran']?>" disabled>
                          <input type="text" class="form-control" name="no_pendaftaran"
                            value="<?= $data['no_pendaftaran']?>" hidden>
                        </div>
                        <div class="form-group">
                          <label for="username">Username <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="username" value="<?= $data['username']?>"
                            required>
                          <small class="form-text text-muted">Masukkan username atau Nama panggilan peserta didik
                          </small>
                        </div>
                        <div class="form-group">
                          <label for="nama_siswa">Nama Lengkap <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" value="<?= $data['nama_siswa']?>" name="nama_siswa"
                            required>
                          <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku
                            (Akta
                            atau
                            ijazah sebelumnya).</small>
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                          <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki - laki"
                              <?php if ($data['jenis_kelamin'] == 'Laki-Laki') { echo 'selected'; } ?>>Laki - laki
                            </option>
                            <option value="Perempuan"
                              <?php if ($data['jenis_kelamin'] == 'Perempuan') { echo 'selected'; } ?>>Perempuan
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" name="tanggal_lahir"
                            value="<?= $data['tanggal_lahir']?>" required>
                          <small class="form-text text-muted">Tanggal lahir peserta didik sesuai dokumen resmi yang
                            berlaku.
                            Hanya
                            bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id"
                              target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                        </div>
                        <div class="form-group">
                          <label for="agama_siswa">Agama &amp; Kepercayaan <span class="text-danger">*</span></label>
                          <select name="agama_siswa" class="form-control" required>
                            <option value="Islam" <?php if ($data['agama_siswa'] == 'Islam') { echo 'selected'; } ?>>
                              Islam</option>
                            <option value="Kristen Protetan"
                              <?php if ($data['agama_siswa'] == 'Kristen Protetan') { echo 'selected'; } ?>>Kristen
                              Protetan</option>
                            <option value="Katholik"
                              <?php if ($data['agama_siswa'] == 'Katholik') { echo 'selected'; } ?>>Katholik</option>
                            <option value="Hindu" <?php if ($data['agama_siswa'] == 'Hindu') { echo 'selected'; } ?>>
                              Hindu</option>
                            <option value="Budha" <?php if ($data['agama_siswa'] == 'Budha') { echo 'selected'; } ?>>
                              Budha</option>
                            <option value="Khonghucu"
                              <?php if ($data['agama_siswa'] == 'Khonghucu') { echo 'selected'; } ?>>Khonghucu
                            </option>
                            <option value="Kepercayaan Kepada Tuhan YME"
                              <?php if ($data['agama_siswa'] == 'Kepercayaan Kepada Tuhan YME') { echo 'selected'; } ?>>
                              Kepercayaan Kepada Tuhan YME</option>
                            <option value="Lainnya"
                              <?php if ($data['agama_siswa'] == 'Lainnya') { echo 'selected'; } ?>>Lainnya</option>
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
                            style="height:80px"><?= $data['alamat_jalan']?></textarea>
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
                          <input type="text" class="form-control" name="nonik" value="<?= $data['nonik']?>" required
                            minlength="16" maxlength="16">
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
                          <input type="text" class="form-control" name="tempat_lahir"
                            value="<?= $data['tempat_lahir']?>" required>
                          <small class="form-text text-muted">Tempat lahir peserta didik sesuai dokumen resmi yang
                            berlaku.</small>
                        </div>
                        <div class="form-group">
                          <label for="nama_negara">Kewarganegaraan<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_negara" value="<?= $data['nama_negara']?>"
                            required>
                        </div>
                        <div class="form-group">
                          <label for="nama_provinsi">Provinsi Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_provinsi"
                            value="<?= $data['nama_provinsi']?>" required>
                        </div>
                        <div class="form-group">
                          <label for="nama_kabupaten">Kabupaten / Kota Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_kabupaten"
                            value="<?= $data['nama_kabupaten']?>" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kelurahan">Nama Kelurahan / Desa <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kelurahan"
                            value="<?= $data['alamat_kelurahan']?>" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kecamatan">Kecamatan Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kecamatan"
                            value="<?= $data['alamat_kecamatan']?>" required>
                        </div>
                        <div class="form-group">
                          <label for="kode_pos">Kode Pos <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="kode_pos" value="<?= $data['kode_pos']?>"
                            required="">
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
                            <option value="Jalan Kaki"
                              <?php if ($data['moda_transportasi'] == 'Jalan Kaki') { echo 'selected'; } ?>>Jalan Kaki
                            </option>
                            <option value="Kendaraan Pribadi"
                              <?php if ($data['moda_transportasi'] == 'Kendaraan Pribadi') { echo 'selected'; } ?>>
                              Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum/Angkot/Pete-pete"
                              <?php if ($data['moda_transportasi'] == 'Kendaraan Umum/Angkot/Pete-pete') { echo 'selected'; } ?>>
                              Kendaraan Umum/Angkot/Pete-pete</option>
                            <option value="Jemputan Sekolah"
                              <?php if ($data['moda_transportasi'] == 'Jemputan Sekolah') { echo 'selected'; } ?>>
                              Jemputan Sekolah</option>
                            <option value="Kereta Api"
                              <?php if ($data['moda_transportasi'] == 'Kereta Api') { echo 'selected'; } ?>>Kereta Api
                            </option>
                            <option value="Ojek"
                              <?php if ($data['moda_transportasi'] == 'Ojek') { echo 'selected'; } ?>>Ojek</option>
                            <option value="Andong/Bendi/Sado/Dokar/Delman/Beca"
                              <?php if ($data['moda_transportasi'] == 'Andong/Bendi/Sado/Dokar/Delman/Beca') { echo 'selected'; } ?>>
                              Andong/Bendi/Sado/Dokar/Delman/Beca
                            </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"
                              <?php if ($data['moda_transportasi'] == 'Perahu Penyebrangan/Rakit/Getek') { echo 'selected'; } ?>>
                              Perahu Penyebrangan/Rakit/Getek</option>
                            <option value="Lainnya"
                              <?php if ($data['moda_transportasi'] == 'Lainnya') { echo 'selected'; } ?>>Lainnya
                            </option>
                          </select>
                          <small class="form-text text-muted">Jenis transportasi utama atau yang paling sering digunakan
                            peserta
                            didik untuk berangkat kesekolah.</small>
                        </div>
                        <div class="form-group">
                          <label for="tinggi_badan">Tinggi Badan <span class="text-danger">*</span></label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="tinggi_badan"
                              value="<?= $data['tinggi_badan']?>" required>
                            <div class="input-group-prepend">
                              <div class="input-group-text">CM</div>
                            </div>
                          </div>
                          <small class="form-text text-muted">Tinggi badan pada satuan sentimeter.</small>
                        </div>
                        <div class="form-group">
                          <label for="anak_keberapa">Anak Keberapa <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="anak_keberapa"
                            value="<?= $data['anak_keberapa']?>" required>
                        </div>
                        <div class="form-group">
                          <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                          <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh peserta didik</small>
                          <select name="kebutuhan_khusus" class="form-control" required>
                            <option value="Tidak"
                              <?php if ($data['kebutuhan_khusus'] == 'Tidak') { echo 'selected'; } ?>>Tidak</option>
                            <option value="Netra (A)"
                              <?php if ($data['kebutuhan_khusus'] == 'Netra (A)') { echo 'selected'; } ?>>Netra (A)
                            </option>
                            <option value="Rungu (B)"
                              <?php if ($data['kebutuhan_khusus'] == 'Rungu (B)') { echo 'selected'; } ?>>Rungu (B)
                            </option>
                            <option value="Grahita Ringan (C)"
                              <?php if ($data['kebutuhan_khusus'] == 'Grahita Ringan (C)') { echo 'selected'; } ?>>
                              Grahita Ringan (C)</option>
                            <option value="Grahita Sedang (C1)"
                              <?php if ($data['kebutuhan_khusus'] == 'Grahita Sedang (C1)') { echo 'selected'; } ?>>
                              Grahita Sedang (C1)</option>
                            <option value="Daksa Ringan (D)"
                              <?php if ($data['kebutuhan_khusus'] == 'Daksa Ringan (D)') { echo 'selected'; } ?>>Daksa
                              Ringan (D)</option>
                            <option value="Daksa Sedang (D1)"
                              <?php if ($data['kebutuhan_khusus'] == 'Daksa Sedang (D1)') { echo 'selected'; } ?>>Daksa
                              Sedang (D1)</option>
                            <option value="Laras (E)"
                              <?php if ($data['kebutuhan_khusus'] == 'Laras (E)') { echo 'selected'; } ?>>Laras (E)
                            </option>
                            <option value="Wicara (F)"
                              <?php if ($data['kebutuhan_khusus'] == 'Wicara (F)') { echo 'selected'; } ?>>Wicara (F)
                            </option>
                            <option value="Tuna Ganda (G)"
                              <?php if ($data['kebutuhan_khusus'] == 'Tuna Ganda (G)') { echo 'selected'; } ?>>Tuna
                              Ganda (G)</option>
                            <option value="Hiper Aktif (H)"
                              <?php if ($data['kebutuhan_khusus'] == 'Hiper Aktif (H)') { echo 'selected'; } ?>>Hiper
                              Aktif (H)</option>
                            <option value="Cerdas Istimewa (I)"
                              <?php if ($data['kebutuhan_khusus'] == 'Cerdas Istimewa (I)') { echo 'selected'; } ?>>
                              Cerdas Istimewa (I)</option>
                            <option value="Bakat Istimewa (J)"
                              <?php if ($data['kebutuhan_khusus'] == 'Bakat Istimewa (J)') { echo 'selected'; } ?>>Bakat
                              Istimewa (J)</option>
                            <option value="Kesulitan Belajar (K)"
                              <?php if ($data['kebutuhan_khusus'] == 'Kesulitan Belajar (K)') { echo 'selected'; } ?>>
                              Kesulitan Belajar (K)</option>
                            <option value="Indigo (O)"
                              <?php if ($data['kebutuhan_khusus'] == 'Indigo (O)') { echo 'selected'; } ?>>Indigo (O)
                            </option>
                            <option value="Down Sindrome (P)"
                              <?php if ($data['kebutuhan_khusus'] == 'Down Sindrome (P)') { echo 'selected'; } ?>>Down
                              Sindrome (P)</option>
                            <option value="Autis (Q)"
                              <?php if ($data['kebutuhan_khusus'] == 'Autis (Q)') { echo 'selected'; } ?>>Autis (Q)
                            </option>
                          </select>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
                          <select name="tempat_tinggal" class="form-control" required>
                            <option value="Bersama Orang Tua"
                              <?php if ($data['tempat_tinggal'] == 'Bersama Orang Tua') { echo 'selected'; } ?>>Bersama
                              Orang Tua</option>
                            <option value="Wali" <?php if ($data['tempat_tinggal'] == 'Wali') { echo 'selected'; } ?>>
                              Wali</option>
                            <option value="Kos" <?php if ($data['tempat_tinggal'] == 'Kos') { echo 'selected'; } ?>>Kos
                            </option>
                            <option value="Asrama"
                              <?php if ($data['tempat_tinggal'] == 'Asrama') { echo 'selected'; } ?>>Asrama</option>
                            <option value="Panti Asuhan"
                              <?php if ($data['tempat_tinggal'] == 'Panti Asuhan') { echo 'selected'; } ?>>Panti Asuhan
                            </option>
                            <option value="Lainnya"
                              <?php if ($data['tempat_tinggal'] == 'Lainnya') { echo 'selected'; } ?>>Lainnya</option>
                          </select>
                          <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang
                            telah
                            diisikan pada kolom-kolom sebelumnya di atas).</small>
                        </div>

                        <div class="form-group">
                          <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="berat_badan"
                              value="<?= $data['berat_badan']?>" required>
                            <div class="input-group-prepend">
                              <div class="input-group-text">Kg</div>
                            </div>
                          </div>
                          <small class="form-text text-muted">Berat badan pada satuan kilogram.</small>
                        </div>
                        <div class="form-group">
                          <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung <span
                              class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="jumlah_saudara_kandung"
                            value="<?= $data['jumlah_saudara_kandung']?>" required>
                          <small class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik.
                            Kosongkan
                            apabila peserta adalah anak tunggal</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <a href="data-peserta-didik" class="btn btn-danger"><i class="nav-icon fas fa-back"></i>Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-lg-right"><i
                        class="nav-icon fas fa-save"></i>
                      Simpan Data</button>
                      </div>
                    </div>
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