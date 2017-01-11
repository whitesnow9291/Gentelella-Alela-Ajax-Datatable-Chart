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
                      <li><a href="mostrecentsearchterms.php">Most recent search terms</a></li>
                      <li><a href="topclick.php">Top Clicks</a></li>
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
                    <input type="text" class="form-control" id="search_validation" placeholder="Search for validation" value="<?php session_start();
                    echo isset($_SESSION['search_term_v'])?$_SESSION['search_term_v']:''; ?>">
                    <span class="input-group-btn">
                      <button class="btn btn-default" id="search_validation_bt" type="button">Lookup!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content validation_content">
                      <form class="form-horizontal form-label-left" id="validation_form" novalidate>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="id_title" class="form-control col-md-7 col-xs-12" type="text" disabled>
                                  <input id="id" class="form-control col-md-7 col-xs-12" name="id"  type="hidden">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Url <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="url" class="form-control col-md-7 col-xs-12" name="url"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emailcontact">Contact <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="emailcontact" class="form-control col-md-7 col-xs-12" name="emailcontact"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notes">Notes <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="notes" class="form-control col-md-7 col-xs-12" name="notes"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="title" class="form-control col-md-7 col-xs-12" name="title"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="start_date">Start date <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="start_date" class="form-control col-md-7 col-xs-12" name="start_date"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_date">End date <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="end_date" class="form-control col-md-7 col-xs-12" name="end_date"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prize_value">Prize value <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="prize_value" class="form-control col-md-7 col-xs-12" name="prize_value"  type="number">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12 hover_zoom_container">
                                  <img class="hover_zoom" id = "image_img" src="a.jpg" />
                                  <input id="image" name="image" accept="image/*" type="file">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sponsor">Sponsor <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="sponsor" class="form-control col-md-7 col-xs-12" name="sponsor"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sponsor_website">Sponsor Website<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="sponsor_website" class="form-control col-md-7 col-xs-12" name="sponsor_website"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sponsor_logo">Sponsor Logo<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12 hover_zoom_container">
                                  <img class="hover_zoom" id = "sponsor_logo_img" src="a.jpg" />
                                  <input id="sponsor_logo" name="sponsor_logo" accept="image/*" type="file">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="description" class="form-control col-md-7 col-xs-12" name="description"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="countries">Countries <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="countries" class="form-control col-md-7 col-xs-12" name="countries"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="states">States <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="states" class="form-control col-md-7 col-xs-12" name="states"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ages">Ages <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="ages" class="form-control col-md-7 col-xs-12" name="ages"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="excluding">Exculding <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="excluding" class="form-control col-md-7 col-xs-12" name="excluding"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frequency">Frequency <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="frequency" class="form-control col-md-7 col-xs-12" name="frequency"  type="number">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frequency_period">Frequency Period <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="frequency_period" class="form-control col-md-7 col-xs-12" name="frequency_period"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frequency_options">Frequency Options <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="frequency_options" class="form-control col-md-7 col-xs-12" name="frequency_options"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="types">Types <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="types" class="form-control col-md-7 col-xs-12" name="types"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Category <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="category" class="form-control col-md-7 col-xs-12" name="category"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prizes">Prizes <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="prizes" class="form-control col-md-7 col-xs-12" name="prizes"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keywords">Keywords <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="keywords" class="form-control col-md-7 col-xs-12" name="keywords"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entry_link">Entry link <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="entry_link" class="form-control col-md-7 col-xs-12" name="entry_link"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rules_link">Rules link <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="rules_link" class="form-control col-md-7 col-xs-12" name="rules_link"  type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="winners_link">Winners link <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="winners_link" class="form-control col-md-7 col-xs-12" name="winners_link"  type="text">
                              </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                  <button type="button" id="prevbtn" class="btn btn-round btn-default" prev_id = '0'"><< Prev</button>
                                  <button type="button" id="nextbtn" class="btn btn-round btn-default" next_id = '0'>Next >></button>
                                  <button id="delete_validation" type="button" class="btn btn-danger">Delete</button>
                                  <button id="update_validation" type="button" class="btn btn-success">Update</button>
                                  <button id="approve_validation" type="button" class="btn btn-success">Approve</button>
                                  <button id="disapprove_validation" type="button" class="btn btn-success">Disapprove</button>
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

    <script src="custom/validation.js"></script>

  </body>
</html>
