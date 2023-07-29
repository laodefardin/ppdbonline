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

<div class="container">
  <div class="col-lg-12 text-md">
    <h2 class="text-black text-center"> Kontak </h2>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-2">
            <strong>
              <i class="fa fa-globe"></i>
              Nama Sekolah :
            </strong><br>
            <?= $data['nama_sekolah'] ?></div>
          <div class="col-md-6 mb-2">
            <strong>
              <i class="fa fa-envelope"></i>
              EMAIL :
            </strong><br>
            <?= $data['email_sekolah'] ?>
          </div>
          <div class="col-md-6 mb-2">
            <strong>
              <i class="fa fa-phone"></i>
              Phone :
            </strong><br>
            <?= $data['telepon_sekolah'] ?>
          </div>
          <div class="col-md-6 mb-2">
            <strong>
              <i class="fa fa-map-marker"></i>
              Alamat :
            </strong><br>
            <?= $data['alamat_sekolah'] ?>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="float-right">
          <!-- Admin : <strong>Masruddin, S.Kom</strong> -->
        </div>
      </div>
    </div>

    <div class="text-center">
    <h2 class="text-black text-center"> Alamat <?= $data['nama_sekolah'] ?> </h2>
    <p><?= $data['nama_sekolah'] ?> beralamat di <?= $data['alamat_sekolah'] ?></p>
    <iframe src=" <?= $data['map_sekolah'] ?>" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63528.62301423271!2d119.70434675!3d-5.6348538999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUPT%20%20SD%20Negeri%2030%20Binamu%2C%20KEC.%20BINAMU!5e0!3m2!1sid!2sid!4v1686797267853!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

    </div>


  </div>
</div>

<br><br>
<?php
include "views/templates_dashboard/footer.php";
    ?>