<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url(); ?>">E&J Music</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
<?php if( preg_match("/(registrar-producto)/", current_url()) ): ?>
<script src="<?= base_url(); ?>plugins/ckeditor/ckeditor.js"></script>
<!-- creating a CKEditor instance called myeditor -->
<script type="text/javascript">
    CKEDITOR.replace('descripcion');
</script>
<?php endif;?>
<?php if( preg_match("/edit/", current_url()) ): ?>
<script src="<?= base_url(); ?>plugins/ckeditor/ckeditor.js"></script>
<!-- creating a CKEditor instance called myeditor -->
<script type="text/javascript">
    CKEDITOR.replace('descripcion');
</script>
<?php endif;?>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/'); ?>js/eyj.js"></script>
</body>
</html>