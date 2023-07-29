<?php
$title = "Pengumuman Hasil Seleksi";
include "templates/header.php";
include "templates/navbar.php";
include "templates/sidebar.php";

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

$query = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' ");
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
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Informasi Pengumuman hasil seleksi akan di sampaikan dihalaman ini.
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
            <div class="card-header border-0">
              <div class="text-center">
                <h3 style="margin-bottom: -15px;">IDENTITAS PESERTA DIDIK
                  <hr>
                </h3>
              </div>
            </div>
            <div class="card-body">
              <div class="container-fluid col-lg-7">
                <table class="table table-bordered">
                  <tbody>
                    <?php
          foreach ($query as $data) : ?>

                    <tr>
                      <th>Nomor Pendaftaran</th>
                      <td><?= $data['no_pendaftaran'] ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Pendaftaran</th>
                      <td><?= $data['tgl_buat'] ?></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap </th>
                      <td><?= $data['nama_siswa'] ?></td>
                    </tr>
                    <tr>
                      <th>Tempat/Tanggal Lahir</th>
                      <td><?= $data['tempat_lahir'] ?>/<?= tgl_indo($data['tanggal_lahir']) ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <td><?= $data['jenis_kelamin'] ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Berdasarkan Persyaratan Kelulusan UPT SD NEGERI 30 BINAMU TA 2023/2024 maka: </td>
                    </tr>
                    <?php
                    if($data['status_administrasi'] == 'Lulus'){?>
                    <tr>
                      <td class="bg-success p-lg-3" colspan="2">
                        <h5> SELAMAT! Anda dinyatakan LULUS.</h5>
                      </td>
                    </tr>
                    <?php }elseif($data['status_administrasi'] == 'Tidak Lulus'){ ?>
                    <tr>
                      <td class="bg-danger p-lg-3" colspan="2">
                        <h5> MOHON MAAF! Anda dinyatakan TIDAK LULUS.</h5>
                        <em>Apapun hasil yang didapat, semoga ini adalah yang terbaik, tetap semangat dan optimis</em>
                      </td>
                    </tr>
                    <?php }else{ ?> 
                      <tr>
                      <td class="bg-warning p-lg-3" colspan="2">
                        <h5> BERKAS ANDA MASIH DALAM VERIFIKASI</h5>
                      </td>
                    </tr>
                    <?php } ?>
                    <?php
          endforeach; 
          mysqli_free_result($query);?>
                  </tbody>
                </table>
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