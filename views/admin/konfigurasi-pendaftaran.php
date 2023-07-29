<?php
$title = "Konfigurasi Pendaftaran";
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
            Konfigurasi untuk menampilkan pendaftaran dan Pengumuman di tutup atau dibuka
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
            <div class="container-fluid col-sm-6">
              <form action="../../app/controller/proses-konfigurasi.php" method="post">
                <?php foreach ($query as $data) : ?>
                <div class="table-responsive">
                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                      <tr>
                        <td>Pengaturan Pendaftaran</td>
                        <td>
                          <select name="setdaftar" class="form-control">
                            <option value="Buka" <?php if ($data['setdaftar'] == 'Buka') { echo 'selected'; } ?>>Buka</option>
                            <option value="Tutup" <?php if ($data['setdaftar'] == 'Tutup') { echo 'selected'; } ?>>Tutup</option>
                          </select>
                          <small class="form-text text-muted"><a href="../../daftar-siswa" target="_blank" rel="noopener noreferrer">Cek Pendaftaran</a></small>
                        </td>
                      </tr>
                      <tr>
                        <td>Pengaturan Pengumuman</td>
                        <td>
                          <select name="setpengumuman" class="form-control">
                            <option value="Buka" <?php if ($data['setpengumuman'] == 'Buka') { echo 'selected'; } ?>>Buka</option>
                            <option value="Tutup" <?php if ($data['setpengumuman'] == 'Tutup') { echo 'selected'; } ?>>Tutup</option>
                          </select>
                          <small class="form-text text-muted"><a href="../../pengumuman" target="_blank" rel="noopener noreferrer">Cek Pengumuman</a></small>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <button type="submit" class="btn btn-primary">Sumbit</button>
                <?php endforeach; mysqli_free_result($query);?>
              </form>
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