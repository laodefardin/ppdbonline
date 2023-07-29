<?php
include "app/config/koneksi.php";
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell2.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
?>
<!-- Content Header (Page header) -->


<br>

<!-- Main content -->
<div class="content">

  <div class="container">
    <div class="col-lg-12 text-md">
      <h2 class="text-black text-center"> Tentang Sekolah </h2>
      <div class="row">
        <div class="col-lg-9">
          <?= $data['tentang_sekolah'] ?>
        </div>

        <div class="col-lg-3 text-center">
          <img src="./assets/image/img/<?= $data['foto_kepsek'] ?>" class="img-fluid border border-primary" style="padding: 10px; /* width: 300px; */ /* height: auto; */" alt="">
          <caption><strong>
              Kepala Sekolah: <?= $data['nama_kepsek'] ?> <br>
              Nip. <?= $data['nip_kepsek'] ?>
            </strong></caption>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-2">
  <div class="col-lg-12 text-md">
  <?= $data['tentang_sekolah2'] ?>
  </div>
</div>

<section class="bg-blue">
  <div class="container">
    <div class="row" style="padding:4rem 0;">
      <div class="col-sm-12">
        <h1 class="title-promo text-center">Visi Dan Misi UPT SD Negeri 30 Binamu </h1>
        <div class="row">
          <div class="col-lg-6 ppdb-info-isi">
            <div class="konten-promo">
              <h6>Visi</h6>
              <h6 class="sub-title-promo">
              <?= $data['visi_sekolah'] ?>   
            </h6>
            </div>
          </div>
          <div class="col-lg-6 ppdb-info-isi">
            <h6>Misi</h6>
            <h6 class="sub-title-promo">
            <?= $data['misi_sekolah'] ?>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- /.row -->
</div>
<!-- /.content -->

<!-- /.content-wrapper -->

<br><br><br><br>
<?php
include "views/templates_dashboard/footer.php";
    ?>