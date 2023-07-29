<?php
$title = 'Edit Informasi User';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?php echo ucfirst($title); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?php echo ucfirst($title); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="row">
        <div class="col-lg-6">
          
          <?php
          $status = $_GET['status'];
          if ($status === 'pengumuman'){?>


<div class="card">
            <div class="card-header">
              <h3 class="card-title">DATA PENGUMUMAN PENTING</h3>
            </div>
            <div class="card-body" style="display: block;">
              <form action="../../app/controller/proses-informasi-user" method="post" enctype="multipart/form-data">
                <div class="row">
                  <?php
                  $id = $_GET['id'];
                  $query = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id = '$id' ");
                  $nomor_urut = 1;
                  foreach ($query as $data): ?>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pengumuman</label>
                      <input type="text" name="status" value="editpengumuman" hidden>
                      <input type="text" name="id" value="<?= $id ?>" hidden>
                      <textarea name="pengumuman" id="pengumuman" class="form-control" cols="100" rows="5"><?= $data['pengumuman']?></textarea>
                    </div>
                  </div>
                </div>
                &nbsp; &nbsp;<input class="btn btn-primary btn-sm" name="tambah" type="submit" value="Update">
                &nbsp;
                <input class="btn btn-danger btn-sm" id="reset" type="reset" value="Batal"
                  onclick="self.history.back()">
            </div>
            <?php
            $nomor_urut++;
            endforeach;
            mysqli_free_result($query);
            ?>
            </form>
          </div>


          <?php }else{ ?> 
            
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">TANGGAL-TANGGAL PPDB</h3>
            </div>
            <div class="card-body" style="display: block;">
              <form action="../../app/controller/proses-informasi-user" method="post" enctype="multipart/form-data">
                <div class="row">
                  <?php
                  $id = $_GET['id'];
                  $query = $koneksi->query("SELECT * FROM tb_infoppdb WHERE id = '$id' ");
                  $nomor_urut = 1;
                  foreach ($query as $data): ?>
                  <div class="col-md-12">
                  <div class="form-group">
                      <label>Deskripsi PPDB</label>
                      <input type="text" name="status" value="editinfoppdb" hidden>
                      <input type="text" name="id" value="<?= $id ?>" hidden>
                      <input type="text" name="deskripsi_ppdb" value="<?= $data['deskripsi_ppdb'] ?>" class="form-control">
                      <label>Tanggal</label>
                      <input type="text" name="tgl_ppdb" value="<?= $data['tgl_ppdb'] ?>" class="form-control">
                    </div>
                  </div>
                </div>
                &nbsp; &nbsp;<input class="btn btn-primary btn-sm" name="tambah" type="submit" value="Update">
                &nbsp;
                <input class="btn btn-danger btn-sm" id="reset" type="reset" value="Batal"
                  onclick="self.history.back()">
            </div>
            <?php
            $nomor_urut++;
            endforeach;
            mysqli_free_result($query);
            ?>
            </form>
          </div>
            
            
          <?php } ?>

        </div>
      </div>
      <!-- /.card -->

    </div>
</div>
</section>

<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>