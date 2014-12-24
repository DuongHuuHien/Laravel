<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/ddsmoothmenu.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/ddsmoothmenu-v.css')}}" />
	
</head>
<body>
<div id="wrapper">
	<div id="banner">
		<img src="{{asset('public/img/1.png')}}"/>
	</div>
	<!-- end div banner-->
	<div id="menu">
		@include('menu')
	</div>
	<!-- end div menu-->
	<div id="content">
		<div id="left">
			@yield('noidung')
		</div>
		<!-- end div left -->
		<div id="right">
			@include('right')
		</div>
		<!-- end div right -->

	</div>

	<!-- end div content-->
	<div id="footer"></div>
</div>
</body>
</html>