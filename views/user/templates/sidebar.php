    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-dark-navy">
      <!-- Brand Logo -->
      <a href="index" class="brand-link bg-navy bg-light bg-white">
        <img src="../../assets/dist/img/AdminLTELogo1.png" alt="AdminLTE Logo" class="brand-image">
        <!-- <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light"><strong>PPDB</strong> ONLINE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <?php
      $query = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa' ");
      foreach ($query as $data):
      ?>
            <?php
        $foto = $data['foto'];
        if ($foto==='' OR $foto === null){?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/anonim.png" alt="User Image">
            <?php } else { ?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/foto_siswa/<?= $data['foto']; ?>"
              alt="User Image">
            <?php }?>
            <!-- <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->

            
          </div>
          <div class="info">
            <a href="index" class="d-block"><?= $data['nama_siswa']; ?></a>
            <a href="index" class="d-block"><?= $data['level']; ?><p>
                <!-- <span>No.Regis <?= ucfirst($_SESSION['no_pendaftaran']); ?></span></p></a> -->
          </div>
        </div>
        <?php endforeach; mysqli_free_result($query);?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index" class="nav-link <?php if($title == 'Dashboard') echo 'active'?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <!-- <li class="nav-header"></li> -->
            <li class="nav-item menu-open">
              <a href="#"
                class="nav-link <?php if($title == 'Informasi Data Siswa' OR $title == 'Informasi Data Orangtua/Wali' OR $title == 'Upload Photo Peserta Didik' OR $title == 'Pengumuman Hasil Seleksi') echo 'active'?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Formulir
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./data-siswa" class="nav-link <?php if($title == 'Informasi Data Siswa') echo "active" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data-ortu"
                    class="nav-link <?php if($title == 'Informasi Data Orangtua/Wali') echo "active" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Ortu/Wali</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./upload-photo"
                    class="nav-link <?php if($title == 'Upload Photo Peserta Didik') echo "active" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Upload Photo</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./upload-berkas"
                    class="nav-link <?php if($title == 'Upload Berkas Peserta Didik') echo "active" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Upload Berkas</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="./hasil-seleksi"
                    class="nav-link <?php if($title == 'Pengumuman Hasil Seleksi') echo "active" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hasil Seleksi</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="./hasil-seleksi" class="nav-link <?php if($title == 'Pengumuman Hasil Seleksi') echo 'active'?>">
                <i class="nav-icon fas fa-fire"></i>
                <p>
                Hasil Seleksi
                </p>
              </a>
            </li>
            <li class="nav-header"></li>
            <!-- <li class="nav-item">
              <a href="./cetak/cetak.php" target="_blank" class="nav-link active">
                <i class="nav-icon fas fa-print"></i>
                <p>
                  Cetak Bukti Pendaftaran
                </p>
              </a>
            </li> -->

            <li class="nav-item">
              <button class="btn bg-white btn-md btn-block btn-icon-split"
                onclick="cetak(<?= $_SESSION['nisnPeserta']; ?>)">
                <i class="fas fa-sign-out-alt"></i> Cetak Bukti Pendaftaran
              </button>
            </li>


            <!-- <li class="" style="border-bottom: 1px solid #4f5962;"></li>
            <li class="nav-item">
            <a href="../../logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt mr-2"></i>
                <p>
                    Logout
                </p>
            </a>
        </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>