<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tapway</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>    
    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
    <link href="assets/stylesheets/daterangepicker-bs3.css" rel="stylesheet">
    <link href="assets/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="assets/bootstrap3-wysiwyg/bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link href="assets/stylesheets/overrides.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include '_scripts.php'; ?>
  </head>
  <body>
    <div class="container-fluid">
      <!-- main -->
      <main>
        <div class="row">          
          <?php include '_side-nav.php'; ?>
          <!-- .main-section -->
          <section class="main-section">
          <?php
            if (isset($_GET['p']) && ($_GET['p'] !== "")) {
              $page = $_GET['p'] . '.php';
            } else {  
              $page = 'dashboard.php';
            }
            include $page;
          ?>
          </section>
          <!-- /.main-section -->
        </div>            
      </main>
      <!-- /main -->
    </div>
    <!-- /.container -->

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <!-- <p>&copy; 2014 Tapway Sdn. Bhd. <a href="#">Privacy.</a> <a href="#">Terms</a></p> -->
            <p>
              <a href="/tapway-ui/index.php?p=retail-analytics-1">Retails Analytics 1</a>
              <a href="/tapway-ui/index.php?p=retail-analytics-2">Retails Analytics 2</a>
            </p>
          </div>
        </div>
      </div>
    </footer> 

  </body>
</html>


