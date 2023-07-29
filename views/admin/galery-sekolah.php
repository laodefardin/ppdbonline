<?php
$title = 'Galery Sekolah';
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

$query = $koneksi->query("SELECT * FROM tb_galerysekolah");
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
          <div class="callout callout-danger">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Sebelum melakukan upload gambar galery Usahakan ukuran gambar memeliki ukuran yang sama di tiap gambar galery yang akan di upload
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="container-fluid col-5">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Galery Sekolah</h3>

          <div class="card-tools">
            <a href="tambah-galerysekolah" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus"></i> Tambah
              data</a>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-striped">
            <thead>
              <tr>
                <th style="width: 1%">
                  #
                </th>
                <th>
                  Foto
                </th>
                <th>Aksi
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
                  <a href="../../assets/image/galery/<?= $data['foto'] ?>" data-fancybox="gal">
                  <img src="../../assets/image/galery/<?= $data['foto'] ?>" alt="Image" class="img-fluid" style="height: 140px;"></a>
                </td>
                <td class="project-actions text-center">
                  <a class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Hapus"
                    href="../../app/controller/proses-delete-galerysekolah?id=<?= $data['id']?>">
                    <i class="fas fa-trash"></i> Delete
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

  </section>

  <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<?php
include "templates/footer.php";
?>