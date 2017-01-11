<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- PNotify -->
      <link href="assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
      <link href="assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
      <link href="assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">

      <link href="custom/statistic.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Excellent!</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li ><a href="index.php"><i class="fa fa-bar-chart-o"></i> Statistic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none">
                      <li><a href="index.html">Most recent search terms</a></li>
                      <li><a href="index2.html">Top Clicks</a></li>
                      <li><a href="index3.html">Active Users</a></li>
                      <li><a href="index3.html">Referers</a></li>
                    </ul>
                  </li>
                    <li><a href="validation.php"><i class="fa fa-check"></i> Validation  </a></li>
                    <li><a href="users.php"><i class="fa fa-users"></i> Users </a></li>
                    <li><a href="bannedip.php"><i class="fa fa-cog"></i> Banned IP </a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>BannedIP page</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                      <textarea id="htaccess_tf" rows="10" class="form-control" name="message"  data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." ></textarea>
                      <div class="ln_solid"></div>
                      <button id="save_htaccess_tf" type="button" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <div class="loading_progress">
        <img src="custom/img/loading.svg">
    </div>
    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>

    <!-- PNotify -->
    <script src="assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
    <script src="custom/bannedip.js"></script>


  </body>
</html>
