<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Form Builder</title>
	
	<link rel="stylesheet" href="public/core/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/core/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/core/css/themify-icons.css">
	<link rel="stylesheet" href="public/core/css/slicknav.min.css">

	<link rel="stylesheet" href="public/core/css/typography.css">
	<link rel="stylesheet" href="public/core/css/default-css.css">
	<link rel="stylesheet" href="public/core/css/styles.css">
	<link rel="stylesheet" href="public/core/css/responsive.css">

	<script src="public/core/js/vendor/modernizr-2.8.3.min.js"></script>

	<style>
		header {
			background-color: #303641;
			height: 5rem;
			line-height: 5rem;
		}

		nav {
			display: inline-block;
		}

		.logo {
			display: inline-block;
		}

		.nav-list {
			font-size: 17px;
		}

		.nav-item > a {
			color: white;
			padding: 1.75rem 0.5rem;
		}

		.nav-item > a:hover {
			background-color: #565a64;
		}
	</style>
</head>

<body>

<div id="preloader">
	<div class="loader"></div>
</div>

<header class="w-100">
	<div class="container">
		<a href="<?=base_url('/')?>" class="logo">
			<img src="public/core/images/icon/logo.png" style="height: 60px;" alt="Logo" />
		</a>
		<nav class="ml-5">
			<ul class="nav-list">
				<li class="nav-item ">
					<a href="<?=base_url('form/list')?>" class="nav__link">BROWSE FORMS</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<div class="login-area">
	<div class="container">

	</div>
</div>

<script src="public/core/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/core/js/popper.min.js"></script>
<script src="public/core/js/bootstrap.min.js"></script>
<script src="public/core/js/jquery.slimscroll.min.js"></script>
<script src="public/core/js/jquery.slicknav.min.js"></script>

<script src="public/core/js/plugins.js"></script>
<script src="public/core/js/scripts.js"></script>
</body>

</html>