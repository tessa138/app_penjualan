<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link href="<?php echo base_url();?>assets/modal/SyntaxHighlighter.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/modal/shCore.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/modal/shBrushJScript.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/modal/ModalPopups.js" language="javascript"></script>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/skins/_all-skins.min.css">
  <!-- TABLE STYLES-->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/js/js/dataTables/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/gdw.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div id="header">
  <h1 class="heading"><a href="#" name="top"> SIM (Manajemen Barang)</a></h1>
  </div>

<div id="content-pinggir">
  <div class="content-pinggir-link">
    <ul>
      <li><a href="dashboard"><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
      <li><a href="customer"><span class="glyphicon glyphicon-user"></span>Data Customer</a></li>
      <li><a href="barang"><span class="glyphicon glyphicon-briefcase"></span>Data Barang</a></li>
      <li><a href="transaksi"><span class="fa fa-edit"></span>Transaksi</a></li>
      <li><a href="operator"><span class="glyphicon glyphicon-user"></span>Operator</a></li>
      <li><a href="#"><span class="fa fa-sitemap"></span>Laporan</a>
          <ul class="scd-lvl">
              <li>
                  <a href="laporan">Laporan Default</a>
              </li>
              <li>
                  <a href="laporan/pdf" target="_blank">Laporan PDF</a>
              </li>
          </ul>
      </li>
      <li><a href="identitas"><span class="glyphicon glyphicon-heart"></span>Identitas</a></li>
      <li><a href="auth/logout"><span class="glyphicon glyphicon-off"></span>Keluar</a></li>
    </ul>
  </div>
</div>

<div id="content-utama">
  <div id="content-isi">
    <?php echo $contents; ?>
  </div>
</div>

<div id="footer">
  <b>Hak Cipta &copy; 2023 <a href="dashboard">Thesallonika KS</a> .</b>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/demo.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="<?php echo base_url() ?>/assets/dist/js/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>/assets/dist/js/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
      $(document).ready(function () {
          $('#dataTables-example').dataTable();
      });
</script>
</body>
</html>