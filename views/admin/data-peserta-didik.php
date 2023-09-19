<?php
$title = 'Data Peserta Didik';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_siswa");
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

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Semua calon siswa yang sudah mendaftar</h3>

        <div class="card-tools">
          <a href="tambah-datasiswa" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah data</a>
        </div>
      </div>
      <div class="card-body pt-3 pl-0 pr-0 pb-0" style="display: block;">
        <table id="example1" class="table table-striped">
          <thead>
            <tr>
              <th style="width: 1%">
                #
              </th>
              <th style="width: 10%">
                No. Pendaftaran
              </th>
              <th style="width: 10%">
                Nama Lengkap
              </th>
              <th style="width: 9%">
                Tanggal Lahir
              </th>
              <th style="width: 10%" class="text-center">
                Status
              </th>
              <th style="width: 30%">
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor_urut = 1;
            foreach ($query as $data): ?>
            <tr>
              <td>
                <?= $nomor_urut ?>
              </td>
              <td>
                <a>
                  <?= $data['no_pendaftaran']; ?>
                </a>
                <br>
                <small>
                  Tanggal daftar <?= tgl_indo(date('d F Y, h:i:s A')); ?>
                </small>
              </td>
              <td>
                <?= $data['nama_siswa']; ?>
              </td>
              <td>
                <?= tgl_indo(date($data['tanggal_lahir'])); ?>
              </td>
              <td class="text-center">
                <?php
                if ($data['status_administrasi'] === 'Belum diVerifikasi'){?>
                  <span class="badge badge-warning text-center">Belum di verifikasi</span>

                 <a class="btn btn-success btn-xs tombol-validasi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-validasiberkas?no-pendaftaran=<?= $data['no_pendaftaran']?>&status=Lulus">
                  <i class="icon fas fa-check"></i> Lulus
                </a>
                <a class="btn btn-danger btn-xs tombol-tidaklulus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-validasiberkas?no-pendaftaran=<?= $data['no_pendaftaran']?>&status=Tidak Lulus">
                <i class="fas fa-times"></i> Tidak Lulus
                </a>
                <?php }elseif($data['status_administrasi'] === 'Lulus'){?>
                <span class="badge badge-success">Lulus</span>
                <br>
                <a class="btn btn-danger btn-xs tombol-unvalidasi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-validasiberkas?no-pendaftaran=<?= $data['no_pendaftaran']?>&status=Batal">
                <i class="fas fa-times"></i> Batal
                </a>
                <?php }else{ ?>
                  <span class="badge badge-danger">Tidak Lulus</span>
                <br>
                <a class="btn btn-danger btn-xs tombol-unvalidasi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-validasiberkas?no-pendaftaran=<?= $data['no_pendaftaran']?>&status=Batal">
                <i class="fas fa-times"></i> Batal
                </a>
                <?php } ?>
              </td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="data-siswa?no-pendaftaran=<?= $data['no_pendaftaran']; ?>">
                  <i class="fas fa-folder">
                  </i>
                  Siswa
                </a>
                <a class="btn btn-primary btn-sm" href="upload-photo?no-pendaftaran=<?= $data['no_pendaftaran']; ?>">
                  <i class="fas fa-upload">
                  </i>
                  Foto Siswa
                </a>
                <a class="btn btn-primary btn-sm" href="upload-berkas?no-pendaftaran=<?= $data['no_pendaftaran']; ?>">
                  <i class="fas fa-upload">
                  </i>
                  Berkas Siswa
                </a>
                <a class="btn btn-info btn-sm" href="data-ortu?no-pendaftaran=<?= $data['no_pendaftaran'] ?>">
                  <i class="fas fa-folder">
                  </i>
                  Orangtua/Wali
                </a>
                <a class="btn btn-warning btn-sm" target="_blank" href="./cetak/cetak?no-pendaftaran=<?= $data['no_pendaftaran']?>">
                  <i class="fas fa-print">
                  </i>
                  Cetak
                </a>
                <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="../../app/controller/proses-delete-datasiswa?no-pendaftaran=<?= $data['no_pendaftaran']?>">
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
    <!-- /.card -->

  </section>

  <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>