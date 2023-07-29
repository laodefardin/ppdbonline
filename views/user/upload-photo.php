<?php
$title = "Upload Photo Peserta Didik";
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
          <div class="callout callout-warning">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Pas foto <strong>hitam putih ukuran 3x4 </strong>. ukuran max 1MB. , format:
            JPG,JPEG,PNG
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
              <form action="../../app/controller/proses-upload-photo.php" method="post" enctype="multipart/form-data">
                <?php foreach ($query as $data): ?>
                <div class="container-fluid col-sm-6">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="text" value="<?= $id_siswa ?>" name="id_siswa" hidden>
                        <div class="col sm 5">
                          <?php
                        $foto = $data['foto'];
                        if ($foto==='' OR $foto === null){?>
                          <img class="img-thumbnail" src="../../assets/image/anonim.png" alt="User profile picture"
                            style="height: 380px;">
                          <?php } else { ?>
                          <img class="img-thumbnail" src="../../assets/image/foto_siswa/<?= $data['foto']; ?>"
                            alt="User profile picture" style="height: 380px;">
                          <?php }?>
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Upload Foto baru</label>
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" name="foto" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="form-group text-right">
                  <button type="submit" name="tambah" class="btn btn-primary float-lg-right"><i
                      class="nav-icon fas fa-save"></i>
                    Simpan Data</button>
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