<?php
include "./app/config/koneksi.php";
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell2.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
mysqli_free_result($query);
?>
<!-- Content Header (Page header) -->


<br>

<!-- Main content -->
<div class="content">

<?php
if ($data['setdaftar'] === 'Buka'){ ?> 
  <div class="container mt-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-center text-bold">
          <h5 style="margin-bottom: -5px;">PENERIMAAN PESERTA DIDIK BARU</h5>
          <h5 style="margin-bottom: -3px;"><?= $data['nama_sekolah'] ?></h5>
          <h6>Tahun Ajaran <?= (date('Y')); ?> / <?= (date('Y')+1); ?> </h6>
        </div>
        <div class="card-body">
          <!-- Petunjuk Pengisian Formulir
          <ul>
            <li>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</li>
            <li>Isi Data Anda Secara Benar dan Jujur.</li>
          </ul> -->

          <div class="row">
            <div class="col-lg-4">
              <div class="card bg-lightblue shadow-none">
                <div class="card-header" style="background-color: #0c5071; border-radius: initial;">
                  <h3 class="card-title text-center">PANDUAN PENGISIAN</h3>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-secondary" style="display: block;">
                  <ul style="margin-left: -23px;">
                    <li>Untuk dapat mendaftar dan mengikuti proses PPDB, terlebih dahulu Anda harus membuat akun yang
                      akan
                      digunakan selama proses PPDB berlangsung, mulai dari pendaftaran hingga hasil kelulusan.</li>
                    <li>Nomor Induk Kependudukan (NIK) yang diinput adalah NIK calon siswa yang tertera di Kartu
                      Keluarga
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card card-primary shadow-none">
                <div class="card-header bg-secondary" style="border-radius: initial;">
                  <h3 class="card-title text-center">MEMBUAT AKUN PPDB</h3>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <form action="./app/controller/daftar_akunsiswa.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body" style="display: block;">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username" style="font-weight: 600;">Username <span
                              class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="username" value="" required>
                          <small class="form-text text-muted">Masukkan username atau Nama panggilan peserta didik
                          </small>
                        </div>

                        <div class="form-group">
                          <label for="nonik">NIK <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" minlength="16" maxlength="16" name="nonik" value=""
                            required>
                          <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu
                            keluarga,
                            Kartu Identitas Anak, atau KTP (jika sudah memiliki). NIK memiliki format 16 digit angka.
                            Contoh: 6112090906021104.</small>
                        </div>


                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama_siswa" style="font-weight: 600;">Nama Lengkap <span
                              class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_siswa" required>
                          <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (Akta
                            atau
                            ijazah sebelumnya).</small>
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
                      </div>

                    </div>
                    <button name="tambah" type="submit" class="btn btn-primary float-lg-right">Daftar Sekarang</button>
                  </div>
                </form>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }else{ ?> 

    <div class="container mt-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-center text-bold">
          <h5 style="margin-bottom: -5px;">MAAF PENDAFTARAN SUDAH DITUTUP</h5>
          <h6>Jika sudah mendaftar, silahkan <a href="login">login</a> dan cetak bukti pendaftaran</h6>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php } ?>

</div>

<?php
include "views/templates_dashboard/footer.php";
?>