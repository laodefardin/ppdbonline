   <!-- Main Footer -->
   <footer class="main-footer bg-dark">
     <div class="container">
       <!-- To the right -->
       <div class="float-right d-none d-sm-inline">
         <!-- Anything you want -->
       </div>
       <!-- Default to the left -->
       <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">
       <?php 
       include "app/config/koneksi.php";
       $query = $koneksi->query("SELECT * FROM tb_konfigurasi");
       $data = mysqli_fetch_assoc($query);
       ?> 
       <?= $data['nama_website'] ?> - <?= $data['nama_sekolah'] ?></a>.</strong> All rights reserved.
     </div>
   </footer>

   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->

   <!-- jQuery -->
   <script src="assets/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="assets/dist/js/adminlte.min.js"></script>
   <script src="assets/dist/js/jquery.fancybox.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="assets/dist/js/demo.js"></script>
   <script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
   <script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
   <script>
     // BS-Stepper Init
     document.addEventListener('DOMContentLoaded', function () {
       window.stepper = new Stepper(document.querySelector('.bs-stepper'))
     })
   </script>
   <script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
   </body>

   </html>
