<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>System Admin</title>

<!-- Bootstrap Core CSS -->
<link
	href="{{ url('/') }}/admin/bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link
	href="{{ url('/') }}/admin/bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Timeline CSS -->
<link href="{{ url('/') }}/admin/dist/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ url('/') }}/admin/dist/css/sb-admin-2.css"
	rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{ url('/') }}/admin/bower_components/morrisjs/morris.css"
	rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="{{ url('/') }}/admin/bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!--main-->
	@yield('content')
	<!--/main-->

	<!-- jQuery -->
	<script
		src="{{ url('/') }}/admin/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script
		src="{{ url('/') }}/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script
		src="{{ url('/') }}/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- Morris Charts JavaScript -->
	<script
		src="{{ url('/') }}/admin/bower_components/raphael/raphael-min.js"></script>
	<script
		src="{{ url('/') }}/admin/bower_components/morrisjs/morris.min.js"></script>
	<!-- script src="{{ url('/') }}/admin/js/morris-data.js"></script -->

	<!-- Custom Theme JavaScript -->
	<script src="{{ url('/') }}/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
