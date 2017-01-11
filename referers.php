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
		<!-- bootstrap-daterangepicker -->
		<link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		<!-- Datatables -->
		<link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
									<li>
										<a href="index.php"><i class="fa fa-bar-chart-o"></i> Statistic <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu" style="display:block">
											<li>
												<a href="mostrecentsearchterms.php">Most recent search terms</a>
											</li>
											<li>
												<a href="topclick.php">Top Clicks</a>
											</li>
											<li>
												<a href="activeusers.php">Active Users</a>
											</li>
											<li class="active">
												<a href="referers.php">Referers</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="validation.php"><i class="fa fa-check"></i> Validation </a>
									</li>
									<li>
										<a href="users.php"><i class="fa fa-users"></i> Users </a>
									</li>
									<li>
										<a href="bannedip.php"><i class="fa fa-cog"></i> Banned IP </a>
									</li>
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
								<h3>Statistic page</h3>
							</div>

							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<!--                  <div class="input-group">-->
									<!--                    <input type="text" class="form-control" placeholder="Search for...">-->
									<!--                    <span class="input-group-btn">-->
									<!--                      <button class="btn btn-default" type="button">Go!</button>-->
									<!--                    </span>-->
									<!--                  </div>-->
								</div>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Referers</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<p class="text-muted font-13 m-b-30"></p>
										<div class="container">
											<table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display table table-striped table-bordered" width="100%">
												<thead>
													<tr>
														<th>http_referer</th>
														<th>autoID</th>
														<th>userID</th>
														<th>fullname</th>
														<th>ipAddress</th>
														<th>dateTime</th>

														<th>userDevice</th>
													</tr>
												</thead>
											</table>
										</div>

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
		<!-- bootstrap-daterangepicker -->
		<script src="assets/vendors/moment/min/moment.min.js"></script>
		<script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Datatables -->
		<script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
		<script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
		<script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
		<script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
		<script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
		<script src="assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
		<script src="assets/vendors/jszip/dist/jszip.min.js"></script>
		<script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
		<script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="assets/build/js/custom.min.js"></script>

		<script src="custom/referers.js"></script>
	</body>
</html>
