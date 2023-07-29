<?php
include("app/config/koneksi.php");
//buat koneksi ke mysql dari file config.php
if (isset($_POST["submit"])) {
  // form telah disubmit, proses data
  // ambil nilai form
$username = htmlentities(strip_tags(trim($_POST["username"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));
// include("koneksi.php");
session_start();
//filter dengan mysqli_real_escape_string
$username = $koneksi->escape_string($username);
$password = $koneksi->escape_string($password);

//generate hashing
$password_sha1 = md5(sha1(md5($password)));
//   $password_sha1 = sha1($password);

// cek apakah username dan password ada di tabel 
  $query = "SELECT * FROM tb_pengguna WHERE username = '$username' AND password = '$password_sha1'";
$result = $koneksi->query($query);
$row = $result->num_rows;
  $sql = $koneksi->query("SELECT * FROM tb_pengguna WHERE username = '$username'");
$akun = $sql->fetch_assoc();

  if ($row > 0 ){ // jika data ada
    $akun = $result->fetch_assoc();
     // bebaskan memory 
    mysqli_free_result($result);
    
      // tutup koneksi dengan database MySQL
    mysqli_close($koneksi);
    $_SESSION["username"] = $akun["username"];
    $_SESSION["nama"] = $akun["nama"];
    $_SESSION["level"] = $akun["level"];
    $_SESSION["id_user"] = $akun['id'];
    $_SESSION['foto'] = $akun['foto'];
    
    echo "<script> document.location.href='views/admin/index'; </script>";


}else{
    $_SESSION['pesan'] = '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
    Username dan Password Tidak ditemukan
    </div>';
}
}
else{
  $username = "";
  $password = "";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | PPDB Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon" />
</head>
<style>
  #iconeye {
    cursor: pointer;
  }
  .btn-secondary {
    background-color: #0c5071;
    border-color: #0c5071;
  }
</style>

<body class="hold-transition login-page accent-lightblue" style="background: rgb(12, 80, 113);color: rgb(255, 255, 255);min-height: 407.656px;background-position: bottom;background-size: 900px;background-position-x: left;background-repeat: no-repeat;background-image: url(https://ppdbsd.slemankab.go.id/assets/images/hero-illustration.png);">

  <div class="login-box">
    <div class="login-logo">
      <div class="login-logo">
        <a href="#" style="color: #fff;">
          <h1><b style="color: #fff;"> PPDB </b>ONLINE
        </a></h1>
      </div>
      <div class="lead" style="font-size: 20px; margin-top: -20px;">
        Selamat datang di Layanan PPDB Online <br> UPT SD NEGERI 30 BINAMU
      </div>

    </div>
    <?php
                //menampilkan pesan jika ada pesan
                if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                    echo $pesan = $_SESSION['pesan'];
                    
                }
                //mengatur session pesan menjadi kosong
                $_SESSION['pesan'] = '';
                ?>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Login disini</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="username" class="form-control" placeholder="Username" name="username" id="username"
              value="<?php echo $username ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password"
              value="<?php echo $password ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span id="iconeye" onclick="show()">
                  <i class="fas fa-eye"></i></span>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-secondary bg-navi btn-block">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
        <a href="index" class="btn btn-default btn-sm btn-flat pull-center"><i class="fa fa-home"></i>
            Kembali Beranda
          </a>
          <!-- <a href="../pengunjung/pengunjung.php" class="btn btn-default btn-sm btn-flat"><i
              class="fa fa-user-secret"></i> Data Kunjungan</a>
          <a href="index" class="btn btn-default btn-sm btn-flat pull-right"><i class="fa fa-search"></i>
            Cari Inventory
          </a> -->
          <!-- <br> -->
        </div>
        <!-- <p class="mb-1">
          <a href="index"><i class="fa fa-arrow-left"></i> Kembali</a>
        </p> -->
        <!-- <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> -->
      </div>

      <!-- /.login-card-body -->
     
    </div>
    <!-- <img src="https://ppdbsd.slemankab.go.id/assets/images/hero-illustration.png" alt="" class="w-full" style="margin-bottom: 0px;"> -->
    

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#largeModal').on('show.bs.modal', function (e) {
          var rowid = $(e.relatedTarget).data('id');
          //menggunakan fungsi ajax untuk pengambilan data
          $.ajax({
            type: 'post',
            url: 'detailkontak.php',
            data: 'rowid=' + rowid,
            success: function (data) {
              $('.fetched-data').html(data); //menampilkan data ke dalam modal
            }
          });
        });
      });
    </script>
    <script>
      function show() {
        var nilai = document.getElementById('password').type;
        if (nilai == 'password') {
          document.getElementById('password').type = 'text';
          document.getElementById('iconeye').innerHTML = '<i class= "fas fa-eye-slash"></i>';
        } else {
          document.getElementById('password').type = 'password';
          document.getElementById('iconeye').innerHTML = '<i class= "fas fa-eye"></i>';
        }
      }
    </script>
</body>

</html>