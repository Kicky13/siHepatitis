<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from paullaros.nl/spark-1-1/bootstrap3/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 20:07:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Tambah Gejala - HEPASIS</title>

    <!-- Loading bar -->
    <script src="<?php echo base_url().'public/'; ?>node_modules/pace-progress/pace.min.js"></script>

    <!-- External fonts -->
    <link href="http://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- NPM Packages -->
    <link href="<?php echo base_url().'public/'; ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>node_modules/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>node_modules/summernote/dist/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>node_modules/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>node_modules/morris.js/morris.css" rel="stylesheet">

    <!-- Vendor -->
    <link href="<?php echo base_url().'public/'; ?>assets/vendor/md-snackbars/md-snackbars.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>assets/vendor/zabuto/zabuto_calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/'; ?>assets/vendor/datatables/datatables.min.css" rel="stylesheet">

    <!-- Theme -->
    <link href="<?php echo base_url().'public/'; ?>assets/css/spark.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class=""> <!-- right-to-left -->
<div id="wrapper">
    <nav class="navbar navbar-spark nav-primary">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="sidebar-open visible-xs visible-sm">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="<?php echo base_url ('index.php/homepakar'); ?>">
                    <img class="img-responsive" src="<?php echo base_url().'public/'; ?>assets/img/liver3.png" alt="">
                    <!--<i class="ion ion-ios-pulse-strong" aria-hidden="true"></i>-->
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="<?php echo base_url ('index.php/home'); ?>">Logout</a>
                    </li>
                    <li>
                        <a>
                            <img src="<?php echo base_url().'public/'; ?>assets/img/doctor2.png" alt="Avatar" width="48" height="48" class="avatar img-circle" />
                        </a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </nav>
    <div id="content">
        <header id="page-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 page-title-wrapper">
                        <h1 class="page-title">HEPASIS</h1>
                        <h2 class="page-subtitle">Hepatitis Diagnosis</h2>
                    </div>
                    <div class="col-sm-4 hidden-xs hidden-sm page-search-wrapper">
                        <input type="text" class="form-control input-lg keyword-search hidden-sm hidden-xs" placeholder="Search">
                    </div>
                </div>
            </div>
        </header>
        <div id="page-body">
            <div class="container-fluid">
                <div id="page-sidebar" class="toggled sidebar">
                    <nav class="sidebar-collapse hidden-xs hidden-sm">
                        <i class="ion ion-ios-arrow-forward show-on-collapsed"></i>
                        <i class="ion ion-ios-arrow-back hide-on-collapsed"></i>
                    </nav>

                    <ul class="nav nav-pills nav-stacked" id="sidebar-stacked">
                        <li class="visible-xs visible-sm">
                            <a href="#" class="sidebar-close"><i class="ion ion-ios-arrow-left"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('index.php/homepakar'); ?>"><i class="fa fa-home"></i> <span class="nav-text">Home</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/datagejala'); ?>"><i class="fa fa-th"></i> <span class="nav-text">Data Gejala</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/datajenis'); ?>"><i class="fa fa-heartbeat"></i> <span class="nav-text">Data Jenis Penyakit</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/datagabungan'); ?>"><i class="fa fa-cubes"></i> <span class="nav-text">Data Gabungan</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/laporandiagnosis'); ?>"><i class="fa fa-file-text"></i> <span class="nav-text">Laporan Hasil Diagnosis</span></a>
                        </li>
                    </ul>
                </div>
                <div id="page-content">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="panel panel-default widget">
                  <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Gejala</h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal style-form" method="post" action="<?php echo base_url('index.php/datagejala/submitdata'); ?>">
<!--                      <div class="form-group">-->
<!--                        <label class="col-sm-2 col-sm-2 control-label">ID Gejala</label>-->
<!--                        <div class="col-sm-10">-->
<!--                          <input type="text" class="form-control" placeholder="otomatis" disabled="">-->
<!--                        </div>-->
<!--                      </div>-->
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Gejala</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control round-form" placeholder="gejala" name="gejala" required>
                          <span id="pesan"></span>
                        </div>
                      </div>
                      
                                <div class="col-sm-8 col-sm-offset-2">
                                     <button class="btn-success btn" name="submit" value="submit">Simpan</button>
                                </div>
                    </form>
                  </div>
                </div>
                        </div><!-- /.col-md-12 -->
                    </div>


                    <footer id="footer" class="text-center">
                        <p>Information System &copy; 2017</p>
                       
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->

<!-- NPM Packages -->
<script src="<?php echo base_url().'public/'; ?>node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/flot/jquery.flot.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/bxslider/dist/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/moment/min/moment.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/summernote/dist/summernote.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/morris.js/morris.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/raphael/raphael.min.js"></script>

<!-- Vendor -->
<script src="<?php echo base_url().'public/'; ?>assets/vendor/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/mark/jquery.mark.min.js"></script>
<!--<script src="--><?php //echo base_url().'public/'; ?><!--assets/vendor/md-snackbars/md-snackbars.min.js"></script>-->
<script src="<?php echo base_url().'public/'; ?>assets/vendor/zabuto/zabuto_calendar.min.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-africa-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-asia-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-cn-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-europe-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-in-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-north_america-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-oceania-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-south_america-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-uk_countries-mill.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/vendor/jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="<?php echo base_url().'public/'; ?>node_modules/gmaps/gmaps.min.js"></script>

<!-- Theme -->
<script src="<?php echo base_url().'public/'; ?>assets/js/spark.js"></script>
<script src="<?php echo base_url().'public/'; ?>assets/js/pages/blank.js"></script>

<script>
    $(document).ready(function () {
        Spark.init();
    });

</script>

</body>

<!-- Mirrored from paullaros.nl/spark-1-1/bootstrap3/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 20:07:07 GMT -->
</html>
