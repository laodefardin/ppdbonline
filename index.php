<?php
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell.php";
?>
<!-- Content Header (Page header) -->
<div class="content-header">

</div>
<!-- /.content-header -->
<div class="container">

  <div class="col-lg-12 text-center text-md">
    <h2 class="text-black"> Informasi PPDB Online </h2>
    <?= $data['info_ppdb2'] ?>
    <br>
    <?= $data['info_ppdb3'] ?>
  </div>

  <div class="row mb-5 mt-5">
    <div class="col-12 text-center">
      <span class="text-cursive h5 text-red d-block">Our Gallery</span>
      <h2 class="text-black">Gallery Sekolah</h2>
    </div>
  </div>
  <div class="row">
    <?php
    $query = $koneksi->query("SELECT * FROM tb_galerysekolah");
    $nomor_urut = 1;
    foreach ($query as $data):
    ?>
    <div class="col-md-3 mb-4">
      <a href="./assets/image/galery/<?= $data['foto'] ?>" data-fancybox="gal"><img
          src="./assets/image/galery/<?= $data['foto'] ?>" alt="Image" class="img-fluid"></a>
    </div>
    <?php
    endforeach;
    mysqli_free_result($query); ?>
  </div>
</div>


<!-- Main content -->
<div class="content">

  <div class="container">
    <div class="row">

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include "views/templates_dashboard/footer.php";
    ?>