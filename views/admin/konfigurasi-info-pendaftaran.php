<?php
$title = "Konfigurasi Informasi Pendaftaran";
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
            Untuk melakukan konfigurasi cukup untuk mengubah atau mengcopy kalimat sehingga format ditiap kolom tidak berubah, pada Konfigurasi untuk aplikasi PPDB Online.
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
                      Informasi Pendaftaran
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                          <input type="text" value='<?= $title ?>' name='title' hidden>
                          <tbody>
                            <tr>
                              <td>Informasi Pendaftaran 1</td>
                              <td>
                              <textarea class="form-control" name="info_ppdb2"
                                  id="summernoteinfo_ppdb2"><?= $data['info_ppdb2'] ?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>Informasi Pendaftaran 2</td>
                              <td>
                              <textarea class="form-control" name="info_ppdb3"
                                  id="summernoteinfo_ppdb3"><?= $data['info_ppdb3'] ?></textarea>
                              </td>
                            </tr>
                            <tr>
                              <td>Prosedur Pendaftaran Online</td>
                              <td>
                              <textarea id="summernoteProsedur"  class="form-control" name="info_prosedur"
                                  id="info_prosedur"><?= $data['info_prosedur'] ?></textarea>
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