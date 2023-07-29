<?php
$title = 'Dashboard';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";
include "app/config/koneksi.php";
$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
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


  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Selamat Datang <?= ucfirst($_SESSION['username']); ?> di Layanan PPDB Online
              <?= strtoupper($data['nama_sekolah']) ?></h5>
            Terimakasih telah melakukan pembuatan akun, Silahkan Lengkapi FORMULIR PENDAFTARAN kemudian Cetak Bukti
            Pendaftaran <br> dan mempersiapkan kelengkapan berkas (Akte Kelahiran, Kartu Keluarga, dan KTP kedua
            Orangtua) dan dibawa ke Sekolah untuk melakukan verifikasi berkas.
          </div>
          <!-- /.card -->
        </div>

        <div class="col-lg-6">
          <div class="card shadow-none">
            <div class="card-header bg-danger" style="border-radius: initial;">
              <h3 class="card-title text-center">PENGUMUMAN PENTING, HARAP DIPERHATIKAN</h3>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">
              <ul style="margin-left: -35px;">
                <?php
              $query = $koneksi->query("SELECT * FROM tb_pengumuman");
              $data1 = mysqli_fetch_assoc($query);
          foreach ($query as $data1) : ?>
                <?= $data1['pengumuman'] ?>
                <hr>
                <?php
                endforeach; 
          mysqli_free_result($query);?>
              </ul>

            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card shadow-none">
            <div class="card-header bg-blue" style="border-radius: initial;">
              <h3 class="card-title text-center">TANGGAL-TANGGAL PPDB</h3>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">
              <ul style="margin-left: -23px;">
                <?php
              $query = $koneksi->query("SELECT * FROM tb_infoppdb");
              $data2 = mysqli_fetch_assoc($query);
          foreach ($query as $data2) : ?>
                <Strong><?= $data2['deskripsi_ppdb'] ?></Strong><br>
                <span><?= $data2['tgl_ppdb']?></span>
                <hr>
                <?php
                endforeach; 
          mysqli_free_result($query);?>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
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