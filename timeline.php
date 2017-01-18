<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include('includes/header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('includes/left_sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <?php include('timeline/breadcrumb.php'); ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
    <?php include('timeline/content.php');  ?>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('includes/footer.php') ?>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<?php include('includes/page_script.php'); ?>
</body>
</html>
