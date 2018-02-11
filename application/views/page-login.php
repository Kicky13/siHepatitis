<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from paullaros.nl/spark-1-1/bootstrap3/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 20:07:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Login Pakar - HEPASIS</title>

  <!-- Loading bar -->
  <script src="<?php echo base_url().'public/'; ?>node_modules/pace-progress/pace.min.js"></script>

  <!-- External fonts -->
  <link href="http://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- NPM Packages -->
  <link href="<?php echo base_url().'public/'; ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'public/'; ?>node_modules/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'public/'; ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Vendor -->
  <link href="<?php echo base_url().'public/'; ?>assets/vendor/md-snackbars/md-snackbars.min.css" rel="stylesheet">

  <!-- Theme -->
  <link href="<?php echo base_url().'public/'; ?>assets/css/spark.css" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class=""> <!-- right-to-left -->
  <div id="wrapper">

    <div id="page-content" class="full-width">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-md-4">
          <br></br>
          <br></br>
          <br></br>

            <div class="panel panel-default widget">
              <div class="panel-heading">
                <h3 class="panel-title">LOGIN PAKAR</h3>
              </div>
              <div class="panel-body">
                <form action="<?php echo base_url ('index.php/login/login'); ?>" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="username" class="form-control" placeholder="Username" name="username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                </form>
                <br></br>
              </div>
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

  <!-- Vendor -->
<!--  <script src="--><?php //echo base_url().'public/'; ?><!--assets/vendor/md-snackbars/md-snackbars.min.js"></script>-->

  <!-- Theme -->
  <script src="<?php echo base_url().'public/'; ?>assets/js/spark.js"></script>
  <script src="<?php echo base_url().'public/'; ?>assets/js/pages/page-login.html"></script>

  <script>
  $(document).ready(function () {
    Spark.init();
  });
  </script>

</body>

<!-- Mirrored from paullaros.nl/spark-1-1/bootstrap3/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2017 20:07:02 GMT -->
</html>
