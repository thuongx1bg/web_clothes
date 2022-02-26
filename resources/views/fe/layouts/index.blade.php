<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='icon' href="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png"  />
    @yield('title')
    <link href="/front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front-end/css/font-awesome.min.css" rel="stylesheet">
    <link href="/front-end/css/prettyPhoto.css" rel="stylesheet">
    <link href="/front-end/css/price-range.css" rel="stylesheet">
    <link href="/front-end/css/animate.css" rel="stylesheet">
	<link href="/front-end/css/main.css" rel="stylesheet">
	<link href="/front-end/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/front-end/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/front-end/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/front-end/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/front-end/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/front-end/images/ico/apple-touch-icon-57-precomposed.png">
	@yield('css')
</head><!--/head-->

<body>
@include('fe.patials.headerfe')
	
	
	@yield('content-front-end')
	
	
	@include('fe.patials.footerfe')
  
    <script src="/front-end/js/jquery.js"></script>
	<script src="/front-end/js/bootstrap.min.js"></script>
	<script src="/front-end/js/jquery.scrollUp.min.js"></script>
	<script src="/front-end/js/price-range.js"></script>
    <script src="/front-end/js/jquery.prettyPhoto.js"></script>
    <script src="/front-end/js/main.js"></script>
	@yield('js')
</body>
</html>