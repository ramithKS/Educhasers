<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Calendar</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="shortcut icon" href="uploads/logo.webp" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<link href="assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print' />
	<link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
	<script src="assets/plugins/pace/pace.min.js"></script>
</head>
<body style="background-color: black;">
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<?php include("header.php"); ?>
		<?php include("aside.php"); ?>
		<div class="sidebar-bg"></div>
		<div id="content" class="content">
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Calendar</li>
			</ol>
			<h1 class="page-header">Calendar <small>header small text goes here...</small></h1>
			<hr class="bg-grey-lighter" />
			<div class="vertical-box">
				<div class="vertical-box-column p-r-45 d-none d-lg-table-cell" style="width: 215px">
				</div>
				<div id="calendar" class="vertical-box-column calendar"></div>
			</div>
		</div>
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	</div>
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<script src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/demo/calendar.demo.min.js"></script>
	<script>
		$(document).ready(function() {
			App.init();
			Calendar.init();
		});
	</script>
<script type="text/javascript">
	
</script>
 
<script src="/removeBanner.js"></script>

</body>
</html>