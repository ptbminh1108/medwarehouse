<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?= csrf_hash() ?>"/>
  
  <?= $this->include("admin/layout/partials/styles") ?>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
    
  <!-- Content Wrapper. Contains page content -->
  <div >
    <?= $this->include('admin/layout/partials/notification') ?>
    <?= $this->renderSection("content") ?>
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this->include("admin/layout/partials/scripts") ?>
</body>
</html>