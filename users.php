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
      <!-- iCheck -->
      <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- PNotify -->
      <link href="assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
      <link href="assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
      <link href="assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
      <!-- bootstrap-daterangepicker -->
      <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
                  <li class=""><a href="index.php"><i class="fa fa-bar-chart-o"></i> Statistic <span class="fa fa-chevron-down"></span></a>
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
                <h3>Users page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="search_user" placeholder="Search for user" value="<?php session_start();
                    echo isset($_SESSION['search_term'])?$_SESSION['search_term']:''; ?>">
                    <span class="input-group-btn">
                      <button class="btn btn-default" id="search_user_bt" type="button">Lookup!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content user_content">
                      <div class="alert alert-info alert-dismissible fade in" role="alert">
                          User #<strong id="user_id_title"></strong>
                      </div>
                      <form class="form-horizontal form-label-left" id="user_form" novalidate>
                            <input type="hidden" id="user_id_field" name="id"/>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                              <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">

                                      M:
                                      <input type="radio" class="flat" name="gender" id="genderM" value="male" checked="" required /> F:
                                      <input type="radio" class="flat" name="gender" id="genderF" value="female" />

                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">Full Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="full_name" class="form-control col-md-7 col-xs-12" name="full_name"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email Address<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="email" id="email" name="email"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Birthday <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="birthday" name="birthday" class="date-picker form-control col-md-7 col-xs-12"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="tel" id="telephone" name="phone"   class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="address" name="address"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="city" name="city"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincestate">Province/State <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="provincestate" name="provincestate"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="postalzipcode">Postal/Zip code<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="postalzipcode" name="postalzipcode"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Country<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="country" name="country"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_password">Current password <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="url" id="current_password" name="current_password"  class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label for="password" class="control-label col-md-3">New password</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="password" type="password" name="password"  class="form-control col-md-7 col-xs-12" >
                              </div>
                          </div>
                          <div class="item form-group">
                              <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">New password again</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="password2" type="password" name="password2" class="form-control col-md-7 col-xs-12" >
                              </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                  <button type="button" id="prevbtn" class="btn btn-round btn-default" prev_id = '0'"><< Prev</button>
                                  <button type="button" id="nextbtn" class="btn btn-round btn-default" next_id = '0'>Next >></button>
                                  <button id="update_user" type="button" class="btn btn-success">Update</button>
                              </div>
                          </div>
                      </form>
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
    <!-- validator -->
    <script src="assets/vendors/validator/validator.js"></script>
    <!-- iCheck -->
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- PNotify -->
    <script src="assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>

    <script src="custom/users.js"></script>

  </body>
</html>
