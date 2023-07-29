    <!-- Main Footer -->
    <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">
       <?php 
       include "app/config/koneksi.php";
       $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
       $data = mysqli_fetch_assoc($query);
       ?> 
       <?= $data['nama_website'] ?> - <?= $data['nama_sekolah'] ?></a>.</strong> All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 3.2.0 -->
      </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../assets/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../assets/dist/js/pages/dashboard3.js"></script>
    <script src="../../assets/js/sweetalert/sweetalert2.all.min.js"></script>
    <script src="../../assets/js/myscript.js"></script>

    <script src="../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        bsCustomFileInput.init();
      });
    </script>

    <!-- Fungsi untuk cetak -->
    <script type="text/javascript">
      function cetak() {
        window.open("./cetak/cetak.php", "_blank");
      }
    </script>
    </body>

    </html>
