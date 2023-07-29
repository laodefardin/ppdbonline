<?php
$title = "Konfigurasi Aplikasi";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
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
          <div class="callout callout-warning">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Konfigurasi untuk aplikasi PPDB Online
          </div>

        </div>
      </div>
    </div>
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
              <div class="col-md-12">
                <form action="../../app/controller/proses-konfigurasi-aplikasi.php" method="post"
                  enctype="multipart/form-data">
                  <?php foreach ($query as $data) : ?>
                  <div class="card mb-3">
                    <div class="card-header">
                      General
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <input type="text" value="<?=$title?>" name="title" hidden>
                              <td>Nama Aplikasi</td>
                              <td>
                                <input class="form-control" type="text" name="nama_website" id="nama_website"
                                  value="<?= $data['nama_website'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Nama Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah"
                                  value="<?= $data['nama_sekolah'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Alamat Sekolah</td>
                              <td>
                                <textarea class="form-control" name="alamat_sekolah"
                                  id="alamat_sekolah"><?= $data['alamat_sekolah'] ?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>Telepon Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="telepon_sekolah" id="telepon_sekolah"
                                  value="<?= $data['telepon_sekolah'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Email Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="email_sekolah" id="email_sekolah"
                                  value="<?= $data['email_sekolah'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Link Google Maps</td>
                              <td>
                                <textarea class="form-control" name="map_sekolah"
                                  id="map" style="height: 100px;"><?= $data['map_sekolah'] ?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>Nama Kepala Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="nama_kepsek" id="nama_kepsek"
                                  value="<?= $data['nama_kepsek'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Nip Kepala Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="nip_kepsek" id="nip_kepsek"
                                  value="<?= $data['nip_kepsek'] ?>">
                              </td>
                            </tr>
                            <tr>
                              <td>Foto Kepala Sekolah</td>
                              <td>
                                <div class="form-group">
                                  <label for="customFile">Pas Foto 3x4 <span class="text-danger">*</span></label>
                                  <div class="custom-file">
                                    <input class="custom-file-input" id="customFile" type="file" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>

                                  <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. ,
                                    format:
                                    JPG,JPEG,PNG</small>
                                </div>
                                <!-- <input type="file" class="form-control" name="foto_kepsek" id="foto_kepsek"> -->
                              </td>
                            </tr>
                            <!-- <tr>
                              <td>Nama Wakil Kepala Sekolah</td>
                              <td>
                                <input class="form-control" type="text" name="nama_wakasek" id="nama_wakasek"
                                  value="SUPRIADI, S.PD., M.PD.">
                              </td>
                            </tr>
                            <tr>
                              <td>Foto Wakil Kepala Sekolah</td>
                              <td>
                                <input type="file" name="foto_wakasek" id="foto_wakasek">
                              </td>
                            </tr> -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Informasi Sekolah
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <input type="hidden" name="id_admin" value="1">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <td>Tentang Sekolah bagian 1</td>
                              <td>
                                <textarea id="summernote" name="tentang_sekolah" style="height: 200px;">
                                <?= $data['tentang_sekolah'] ?>
                                </textarea>
                              </td>
                            </tr>

                            <tr>
                              <td>Tentang Sekolah bagian 2</td>
                              <td>
                                <textarea id="summernote2" name="tentang_sekolah2" style="height: 200px;">
                                <?= $data['tentang_sekolah2'] ?>
                                </textarea>
                              </td>
                            </tr>

                            <tr>
                              <td>Visi</td>
                              <td>
                              <textarea class="form-control" id="summernoteVisi" name="visi_sekolah" style="height: 200px;">
                                <?= $data['visi_sekolah'] ?>
                                </textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>Misi</td>
                              <td>
                              <textarea id="summernoteMisi" class="form-control" style="height: 200px;" name="misi_sekolah">
                                <?= $data['misi_sekolah'] ?>
                                </textarea>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      Informasi PPDB
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <input type="hidden" name="id_admin" value="1">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <td>Informasi PPDB bagian 1</td>
                              <td>
                                <textarea id="summernote3" name="info_ppdb1" style="height: 200px;">
                                <?= $data['info_ppdb1'] ?>
                                </textarea>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary mt-3 mb-3">Sumbit</button>
                  <?php endforeach; mysqli_free_result($query);?>
                </form>

              </div>
            </div>
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