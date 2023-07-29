<?php
$title = 'Konfigurasi Informasi User';
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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-warning">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Konfigurasi untuk pengumuman yang tampil dihalaman User/Peserta Didik
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DATA PENGUMUMAN PENTING</h3>
              <div class="card-tools">
                <a href="tambah-informasi-user?status=pengumuman" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah
                  data</a>
              </div>
            </div>
            <div class="card-body pt-3 pl-0 pr-0 pb-0" style="display: block;">
              <table id="" class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">
                      #
                    </th>
                    <th style="width: 50%">
                      Pengumuman
                    </th>
                    <th style="width: 30%">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = $koneksi->query("SELECT * FROM tb_pengumuman");
                  $nomor_urut = 1;
                  foreach ($query as $data): ?>
                  <tr>
                    <td>
                      <?= $nomor_urut ?>
                    </td>
                    <td>
                      <a>
                        <?= $data['pengumuman']; ?>
                      </a>
                    </td>
                    <td class="project-actions text-right">
                      <a class="btn bg-navy btn-sm" href="edit-informasi-user?id=<?= $data['id']; ?>&status=pengumuman">
                        <i class="fas fa-edit">
                        </i>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Hapus"
                        href="../../app/controller/proses-delete-informasiuser?id=<?= $data['id']?>&status=pengumuman">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                      </a>
                    </td>
                  </tr>
                  <?php
            $nomor_urut++;
            endforeach;
            mysqli_free_result($query);
            ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card -->



        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">TANGGAL-TANGGAL PPDB</h3>
              <div class="card-tools">
                <a href="tambah-informasi-user?status=infoppdb" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah
                  data</a>
              </div>
            </div>
            <div class="card-body pt-3 pl-0 pr-0 pb-0" style="display: block;">
              <table id="" class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">
                      #
                    </th>
                    <th style="width: 50%">
                      Deskripsi
                    </th>
                    <th style="width: 18%">
                      Tanggal
                    </th>
                    <th style="width: 30%">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
            $query = $koneksi->query("SELECT * FROM tb_infoppdb");
            $nomor_urut = 1;
            foreach ($query as $data): ?>
                  <tr>
                    <td>
                      <?= $nomor_urut ?>
                    </td>
                    <td>
                        <?= $data['deskripsi_ppdb']; ?>
                    </td>
                    <td>
                        <?= $data['tgl_ppdb']; ?>
                    </td>
                    <td class="project-actions text-right">
                    <a class="btn bg-navy btn-sm" href="edit-informasi-user?id=<?= $data['id']; ?>&status=infoppdb">
                        <i class="fas fa-edit">
                        </i>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Hapus"
                        href="../../app/controller/proses-delete-informasiuser?id=<?= $data['id']?>&status=infoppdb">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                      </a>
                    </td>
                  </tr>
                  <?php
            $nomor_urut++;
            endforeach;
            mysqli_free_result($query);
            ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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