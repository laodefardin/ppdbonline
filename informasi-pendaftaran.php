<?php
include "app/config/koneksi.php";

include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell2.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
?>
<!-- Content Header (Page header) -->

<style>
  ol {
    counter-reset: li;
    /* Initiate a counter */
    list-style: none;
    /* Remove default numbering */
    *list-style: decimal;
    /* Keep using default numbering for IE6/7 */
    font: 18px 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255, 255, 255, .5);
  }

  ol ol {
    margin: 0 0 0 2em;
    /* Add some left margin for inner lists */
  }

  .rectangle-list a {
    position: relative;
    display: block;
    padding: .4em .4em .4em .8em;
    *padding: .4em;
    margin: .5em 0 .5em 2.5em;
    /* background: #ddd; */
    color: #444;
    text-decoration: none;
    transition: all .3s ease-out;
  }

  .rectangle-list a:hover {
    background: #eee;
  }

  .rectangle-list a:before {
    content: counter(li);
    counter-increment: li;
    position: absolute;
    left: -2.5em;
    top: 50%;
    margin-top: -1em;
    background: #007bff;
    color: #fff;
    /* height: 2em; */
    width: 2em;
    line-height: 2em;
    text-align: center;
    /* font-weight: bold; */
  }

  .rectangle-list a:after {
    position: absolute;
    content: '';
    border: .5em solid transparent;
    left: -1em;
    top: 50%;
    margin-top: -.5em;
    transition: all .3s ease-out;
  }

  .rectangle-list a:hover:after {
    left: -.5em;
    border-left-color: #007bff;
  }
</style>
<br>

<!-- Main content -->
<div class="content">

  <div class="container mt-5 p-lg-5">
    <div class="col-lg-12">
      <h2 class="text-black text-center"> Penjelasan Prosedur Pendaftaran Online</h2>
      <div class="row">
        <p class="text-left" style="font-size: 25px;">
        <?= $data['info_prosedur'] ?>
        </p>
      </div>
    </div>
  </div>
</div>

<section class="bg-navy">
  <div class="container">
    <div class="row" style="padding:4rem 0;">
      <div class="col-sm-12">
        <h1 class="title-promo text-center">Informasi Pendaftaran</h1>
        <div class="row">
          <div class="col-lg-6 ppdb-info-isi">
            <div class="konten-promo">
              <h6 class="sub-title-promo" style="font-size: 18px;padding: 30px;text-align: center;">
              <?= $data['info_ppdb2'] ?>   
            </h6>
            </div>
          </div>
          <div class="col-lg-6 ppdb-info-isi">
            <h6 class="sub-title-promo" style="font-size: 18px;padding: 30px;text-align: center;">
            <?= $data['info_ppdb3'] ?>
            </h6>
          </div>
          <div class="col-lg-12 text-center">
            <a href="daftar-siswa" class="btn btn-outline-light btn-lg mr-3">Daftar Sekarang</a>
            <a href="login" class="btn btn-outline-light btn-lg mr-3">Login Calon Siswa</a>
            <a href="pengumuman" class="btn btn-outline-light btn-lg mr-3">Cek Pengumuman</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- /.content-wrapper -->

<br><br><br><br>
<?php
include "views/templates_dashboard/footer.php";
    ?>