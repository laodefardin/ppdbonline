    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-dark-navy">
      <!-- Brand Logo -->
      <a href="index" class="brand-link bg-navy bg-light bg-white">
        <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>PPDB</strong> ONLINE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <?php
      $query = $koneksi->query("SELECT * FROM tb_pengguna WHERE id = '$id' ");
      foreach ($query as $data):
      ?>
            <?php
        $foto = $data['foto'];
        if ($foto==='' OR $foto === null){?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/anonim.png" alt="User Image">
            <?php } else { ?>
            <img class="user-image img-circle elevation-2" src="../../assets/image/foto_admin/<?= $data['foto']; ?>"
              alt="User Image">
            <?php }?>
          </div>
          <div class="info">
          <a href="index" class="d-block"><?= $data['nama']; ?></a>
          <a href="index" class="d-block"><?= $data['level']; ?><p>
          </div>
        </div>
        <?php endforeach; mysqli_free_result($query);?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index" class="nav-link  <?php if($title == 'Halaman Dashboard Admin') echo 'active'?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="./cetak/cetak.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Verifikasi
                </p>
              </a>
            </li> -->

            <li class="nav-item menu-open">
              <a href="" class="nav-link <?php if($title == 'Data Peserta Didik' OR $title == 'Informasi Data Siswa' OR $title == 'Upload Photo Peserta Didik' OR $title == 'Informasi Data Orangtua/Wali' OR $title == 'Tambah Data Siswa' OR $title == 'Data Peserta Didik Yang Belum diverifikasi' OR $title == 'Upload Berkas Peserta Didik') echo 'active'?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Data Pendaftar
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./data-peserta-didik" class="nav-link <?php if($title == 'Data Peserta Didik' OR $title == 'Informasi Data Siswa' OR $title == 'Upload Photo Peserta Didik' OR $title == 'Informasi Data Orangtua/Wali' OR $title == 'Tambah Data Siswa' OR $title == 'Upload Berkas Peserta Didik') echo 'active'?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Peserta Didik</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="data-peserta-didik-nonvalidasi" class="nav-link <?php if($title == 'Data Peserta Didik Yang Belum diverifikasi') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Belum Diverifikasi</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item <?php if($title == 'Konfigurasi Pendaftaran' OR $title == 'Konfigurasi Aplikasi' or $title == 'Konfigurasi Informasi Pendaftaran' OR $title == 'Konfigurasi Informasi User' OR $title == 'Edit Informasi User' OR $title == 'Tambah Informasi User' OR $title == 'Galery Sekolah' OR $title == 'Tambah Galery Sekolah') echo 'menu-open'?>">
              <a href="" class="nav-link <?php if($title == 'Konfigurasi Pendaftaran' OR $title == 'Konfigurasi Aplikasi' or $title == 'Konfigurasi Informasi Pendaftaran' OR $title == 'Konfigurasi Informasi User' OR $title == 'Edit Informasi User' OR $title == 'Tambah Informasi User' OR $title == 'Galery Sekolah' OR $title == 'Tambah Galery Sekolah') echo 'active'?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                Konfigurasi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./konfigurasi-pendaftaran" class="nav-link <?php if($title == 'Konfigurasi Pendaftaran') echo 'active'?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendaftaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./konfigurasi-aplikasi" class="nav-link <?php if($title == 'Konfigurasi Aplikasi') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Aplikasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./konfigurasi-info-pendaftaran" class="nav-link <?php if($title == 'Konfigurasi Informasi Pendaftaran') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi Pendaftaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./konfigurasi-informasi-user" class="nav-link <?php if($title == 'Konfigurasi Informasi User' OR $title == 'Edit Informasi User' OR $title == 'Tambah Informasi User') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informasi User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./galery-sekolah" class="nav-link <?php if($title == 'Galery Sekolah' OR $title == 'Tambah Galery Sekolah') echo 'active' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gallery Sekolah</p>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="setting-pengguna" class="nav-link <?php if($title == 'Setting Pengguna') echo 'active' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Pengguna
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>