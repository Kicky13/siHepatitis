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

    <title>Tambah Gabungan - HEPASIS</title>

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
                        <a href="#">
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
                    <h3 class="panel-title">Tambah Data Gabungan</h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal style-form" method="post" action="<?php echo base_url('index.php/datagabungan/submitdatagabungan'); ?>">
<!--                      <div class="form-group">-->
<!--                        <label class="col-sm-2 col-sm-2 control-label">ID Gabungan</label>-->
<!--                        <div class="col-sm-10">-->
<!--                          <input type="text" class="form-control" placeholder="otomatis" disabled="">-->
<!--                        </div>-->
<!--                      </div>-->
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Jenis Penyakit</label>
                        <!-- <div class="col-sm-10"> -->
                        <div class="col-md-4">
                        <select name="jenis_penyakit" class="select2">
                        <?php foreach ($jenis as $row){ ?>
                            <option value="<?php echo $row['id_jenispenyakit']; ?>"><?php echo $row['jenis_penyakit']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Gejala</label>
                        <div class="col-md-4">
                        <select name="gejala" class="select2">
                            <?php foreach ($gejala as $row){ ?>
                                <option value="<?php echo $row['id_gejala']; ?>"><?php echo $row['gejala']; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                      </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nilai MB</label>
                            <div class="col-md-4">
                                <select name="nilai_mb" class="select2">
                                    <option>--Pilih--</option>
                                    <option value="1.0">Sangat Yakin</option>
                                    <option value="0.8">Yakin</option>
                                    <option value="0.6">Cukup Yakin</option>
                                    <option value="0.4">Sedikit Yakin</option>
                                    <option value="0.2">Tidak Tahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nilai MD</label>
                            <div class="col-md-4">
                                <select name="nilai_md" class="select2">
                                    <option>--Pilih--</option>
                                    <option value="0">0</option>
                                    <option value="0.01">0.01</option>
                                    <option value="0.02">0.02</option>
                                    <option value="0.03">0.03</option>
                                    <option value="0.04">0.04</option>
                                    <option value="0.05">0.05</option>
                                    <option value="0.06">0.06</option>
                                    <option value="0.07">0.07</option>
                                    <option value="0.08">0.08</option>
                                    <option value="0.09">0.09</option>
                                    <option value="0.1">0.1</option>
                                    <option value="0.11">0.11</option>
                                    <option value="0.12">0.12</option>
                                    <option value="0.13">0.13</option>
                                    <option value="0.14">0.14</option>
                                    <option value="0.15">0.15</option>
                                </select>
                            </div>
                        </div>
<!--                      <div class="form-group">-->
<!--                        <label class="col-sm-2 col-sm-2 control-label">Nilai MB</label>-->
<!--                        <div class="col-sm-10">-->
<!--                          <input type="text" class="form-control round-form" placeholder="nilai MB" name="nilai_mb" required>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="form-group">-->
<!--                        <label class="col-sm-2 col-sm-2 control-label">Nilai MD</label>-->
<!--                        <div class="col-sm-10">-->
<!--                          <input type="text" class="form-control round-form" placeholder="nilai MD" name="nilai_md" required>-->
<!--                        </div>-->
<!--                      </div>-->

                        <p> *RANGE NILAI MD</p>
                        <p>Sangat Yakin = 0.11 - 0.15</p>
                        <p>Yakin = 0.06 - 0.10</p>
                        <p>Sedikit Yakin = 0 - 0.05</p>

                      
                                <div class="col-sm-8 col-sm-offset-2">
                                     <button class="btn-success btn" value="simpan">Simpan</button>
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
