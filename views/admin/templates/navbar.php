<body class="layout-navbar-fixed layout-fixed sidebar-mini accent-navy">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="index" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle nav-link-lg nav-link-user" data-toggle="dropdown">
          <?php
      $query = $koneksi->query("SELECT * FROM tb_pengguna WHERE id = '$id' ");
      foreach ($query as $data):
      ?>
          <?php
        $foto = $data['foto'];
        if ($foto==='' OR $foto === null){?>
        <img class="user-image img-circle elevation-2" src="../../assets/image/anonim.png" alt="User Image">
        <?php } else { ?>
        <img class="user-image img-circle elevation-2" src="../../assets/image/foto_admin/<?= $data['foto']; ?>"  alt="User Image">
        <?php }?>

            <!-- <img src="../../assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2"
              alt="User Image"> -->
            

            <span class="d-none d-lg-inline-block"><?= $data['nama']; ?></span> 
            <?php endforeach; mysqli_free_result($query);?>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <!-- <li class="user-header" style="background-color: #0c5071; color; #fff;">
            <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li> -->
            <a href="../../logout" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
            <!-- <a href="#" class="dropdown-item">
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </h3>
                </div>
              </div>
            </a> -->

          </ul>
        </li>



        <!-- <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
            <img src="../../assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2"
              alt="User Image">
            <div class="d-none d-md-inline"><?= ucfirst($_SESSION['nama']); ?></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="../../logout" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
          </div>
        </li> -->

      </ul>








      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            Keluar
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li> -->


    </nav>
    <!-- /.navbar -->