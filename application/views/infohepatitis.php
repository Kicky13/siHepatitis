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

    <title>Info Hepatitis - HEPASIS</title>

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
                <a class="navbar-brand hidden-xs hidden-sm" href="<?php echo base_url ('index.php/home'); ?>">
                    <img class="img-responsive" src="<?php echo base_url().'public/'; ?>assets/img/liver3.png" alt="">
                    <!--<i class="ion ion-ios-pulse-strong" aria-hidden="true"></i>-->
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="<?php echo base_url ('index.php/login'); ?>">Login Pakar</a>
                    </li>
                    <li>
                        <a>
                            <img src="<?php echo base_url().'public/'; ?>assets/img/user32.png" alt="Avatar" width="48" height="48" class="avatar img-circle" />
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
                         <li class="active">
                             <a href="<?php echo base_url ('index.php/home'); ?>"><i class="fa fa-home"></i> <span class="nav-text">Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/konsultasi'); ?>"><i class="fa fa-medkit"></i> <span class="nav-text">Konsultasi</span></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url ('index.php/infohepatitis'); ?>"><i class="fa fa-book"></i> <span class="nav-text">Info Hepatitis</span></a>
                        </li>
                    </ul>
                </div>
                <div id="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default widget">
                  <div class="panel-heading">
                    <div class="panel-controls">
                      <!-- <a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
                      <a href="#" class="widget-close"><i class="fa fa-times"></i></a> -->
                    </div>
                    <h3 class="panel-title">Info Hepatitis</h3>
                  </div>
                  <div class="panel-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title text-md">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Hepatitis A
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body weight-book">
                              Hepatitis A merupakan salah satu jenis penyakit Hepatitis yang sangat menular. Penyebab dari hepatitis A ini adalah virus Hepatitis A (HAV).
                              Virus yang menyebabkan Hepatitis A ini terdapat dalam hati, empedu, feses, dan darah. Dan virus ini dapat bereplikasi dalam biakan jaringan
                              namum replikasinya kurang baik dibandingkan picornavirus yang lain . Penularannya dapat melalui pencemaran air minum, makanan yang tidak
                              dimasak, makanan dan minuman yang terkontaminasi, dan personal hyglene rendah. Masa inkubasi Hepatitis A ini terjadi berkisar antara 15 sampai
                              45 hari (rata – rata 4 minggu). Hepatitis A ini biasanya muncul pada saat musim dingin dan rentan terjadi pada orang dewasa.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title text-md">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Hepatitis B
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body weight-book">
                              Hepatitis B adalah infeksi hati yang ditularkan melalui darah atau cairan tubuh yang disebabkan oleh virus Hepatitis B (HBV). Antigen hepatitis B
                              dan DNA HBV telah diidentifikasi pada daerah ekstrahepatik, termasuk kelenjar limfe, sumsum tulang, limfosit darah, limpa, dan pankreas. Virus
                              Hepatitis B menular melalui kontak langsung dengan darah dan produk darah seseorang yang terinfeksi, serta dapat menular melalui cairan tubuh.
                              HBsAg telah diidentifikasi pada hampir setiap cairan tubuh dari orang yang terinfeksi, di antaranya ; slaiva, air mata, cairan seminal, cairan
                              serebrospinal, asites, air susu ibu, cairan sinovial, getah lambung, cairan pleura dan urin, dan bahkan kadang dalam feses. Saat awal seseorang
                              terinfeksi Hepatitis B, tubuhnya tidak langsung menunjukkan tanda, bahkan terlihat sehat beberapa bulan sebelum menunjukkan gejala. Masa inkubasi
                              Hepatitis B ini terjadi berkiasar antara 30 sampai 180 hari (rata – rata 4 minggu sampai 12 minggu).
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title text-md">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Hepatitis C
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body weight-book">
                              Hepatitis C ini hampir sama dengan Hepatitis B. Hepatitis C juga merupakan penyakit yang dapat ditularkan melalui kontak dengan darah yang terinfeksi.
                              Hepatitis C ini disebabkan oleh virus Hepatitis C (HCV). Virus ini dapat ditularkan oleh sekelompok orang yang memiliki pekerjaan yang berhubungan dengan
                              darah. Kebanyakan orang yang tertular penyakit Hepatitis C, disebabkan oleh penggunaan jarum suntik yang sama secara bergantian. (NSW Health, 2007). Masa
                              inkubasi Hepatitis C ini berlangsung selama 15 hari sampai 160 hari (rata – rata 7 minggu).
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title text-md">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Hepatitis D
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body weight-book">
                              Hepatitis D ini merupakan salah satu jenis penyakit Hepatitis yang tidak sering ditemukan, tetapi virus Hepatitis D (HDV) ini sangat berbahaya. Hepatitis D
                              ini hanya ditemukan pada seseorang yang telah terinfeksi Hepatitis B, karena virus Hepatitis D berkembang biak jika terdapat virus Hepatitis B. Masa inkubasi
                              Hepatitis D ini berlangsung selama 30 hari sampai 180 hari, sama seperti Hepatitis B.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title text-md">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Hepatitis E
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body weight-book">
                              Hepatitis E disebabkan oleh virus Hepatitis E (HEV). Virus ini menyebar pada air atau makanan yang telah terkontaminasi, dan banyak tersebar pada daerah
                              yang memiliki sanitasi buruk. Hepatitis E ini biasanya dapat didiagnosa setelah seseorang ditetapkan tidak mengidap jenis hepatitis yang lainnya. Masa
                              inkubasi yang terjadi pada Hepatitis E ini berlangsung selama 14 hari sampai 60 hari (rata – rata 5 sampai 6 minggu)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                                
                        </div><!-- /.col-md-12 -->
                    </div>

                    <!-- Footer -->
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
