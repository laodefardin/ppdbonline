<?php
$title = 'Halaman Dashboard Admin';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

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
          <div class="alert alert-info alert-dismissible text-center">
            <h5> Selamat Datang di Di Layanan PPDB Online <?= $data['nama_sekolah'] ?></h5>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <?php
            $tahunIni = date('Y');
            $sql = "SELECT count(no_pendaftaran) AS a FROM tb_siswa WHERE YEAR(tgl_buat) = '$tahunIni'";
            $query = mysqli_query($koneksi, $sql);
            $data = mysqli_fetch_assoc($query);
            mysqli_free_result($query);
            ?>
            <div class="inner">
              <h3><?= $data['a'] ?></h3>
              <p>Calon Siswa yang mendaftar tahun ini</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
          <?php
            $tahunIni = date('Y');
            $sql = "SELECT count(no_pendaftaran) AS a FROM tb_siswa WHERE YEAR(tgl_buat) = '$tahunIni' AND status_administrasi = 'Lulus' ";
            $query = mysqli_query($koneksi, $sql);
            $data = mysqli_fetch_assoc($query);
            mysqli_free_result($query);
            ?>
            <div class="inner">
            <h3><?= $data['a'] ?></h3>
              <p>Calon Siswa yang lulus PPDB Tahun ini</p>
            </div>
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