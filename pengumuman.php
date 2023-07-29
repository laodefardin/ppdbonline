<?php
include "app/config/koneksi.php";
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell2.php";

$searchTerm = '';
$results = [];
$searchStatus = '';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search'])) {
  // Mendapatkan nilai pencarian dari form
  $searchTerm = $_GET['search'];

  // Jika kolom pencarian tidak kosong, lakukan pencarian
  if (!empty($searchTerm)) {
  // Query untuk mencari data berdasarkan kata kunci
  $query = "SELECT * FROM tb_siswa WHERE no_pendaftaran LIKE '%$searchTerm%'";
  $result = mysqli_query($koneksi, $query);

  // Memasukkan hasil query ke dalam array
  while ($row = mysqli_fetch_assoc($result)) {
      $results[] = $row;
  }

  // Mengatur status pencarian
  if (count($results) > 0) {
    $searchStatus = 'found';
} else {
    $searchStatus = 'not-found';
}
} else {
  // Jika kolom pencarian kosong, set status pencarian ke 'empty'
  $searchStatus = 'empty';
}

}

// Menutup koneksi ke database
// mysqli_close($koneksi);

// $query = $koneksi->query("SELECT * FROM tb_siswa WHERE no_pendaftaran = '$id_siswa' ");
?>
<!-- Content Header (Page header) -->


<br>

<!-- Main content -->
<div class="content">

<?php
$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
// mysqli_free_result($query);

if ($data['setpengumuman'] === 'Buka'){
?>
  <div class="container mt-4">
    <div class="col-lg-12 text-md">
      <h2 class="text-black text-center"> Pengumuman Kelulusan </h2>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-md">
              SILAHKAN CEK KELULUSAN ANDA
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">
                  <p>Masukan Nomor Pendaftaran Anda untuk melihat apakah Anda Diterima atau Tidak</p>
                  <form method="GET" action="">
                    <div class="form-group">
                      <label for="no_pendaftaran">Nomor Pendaftaran :</label>
                      <input type="text" class="form-control" placeholder="Masukan Nomor Pendaftaran" name="search"
                        id="no_pendaftaran" value="<?php echo $searchTerm; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Menampilkan hasil pencarian -->
          
          <?php if ($searchStatus === 'found') : ?>
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
                <table class="table table-bordered">
                <?php foreach ($results as $data) : ?>
                  <tbody>
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
                      <td colspan="2">Berdasarkan Persyaratan Kelulusan UPT SD NEGERI 30 BINAMU TA 2023/2024 maka:
                      </td>
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
                        <em>Apapun hasil yang didapat, semoga ini adalah yang terbaik, tetap semangat dan
                          optimis</em>
                      </td>
                    </tr>
                    <?php }else{ ?>
                    <tr>
                      <td class="bg-warning p-lg-3" colspan="2">
                        <h5> BERKAS ANDA MASIH DALAM VERIFIKASI</h5>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <?php elseif ($searchStatus === 'not-found') : ?>
          <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            <p>Maaf, Data yang Anda cari tidak ditemukan, Anda Belum melakukan pendaftaran.</p>
          </div>
          <?php elseif ($searchStatus === 'empty') : ?>
          <p>Masukkan kata kunci untuk memulai pencarian.</p>
          <?php endif; ?>


        </div>
      </div>
    </div>
  </div>
  <?php }else{ ?> 
  <div class="container mt-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-center text-bold">
          <h5 style="margin-bottom: -5px;">MAAF PENGUMUMAN SUDAH DITUTUP</h5>
          <h6>Jika sudah mendaftar, silahkan <a href="login">login</a> dan cetak bukti pendaftaran</h6>
        </div>
      </div>
    </div>
  
</div>
<?php } ?>
</div>
</div>


<?php
include "views/templates_dashboard/footer.php";
    ?>