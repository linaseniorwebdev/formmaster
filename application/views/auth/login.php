<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login - For Builder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/core/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/core/css/themify-icons.css">
	<link rel="stylesheet" href="public/core/css/slicknav.min.css">
	<link rel="stylesheet" href="public/core/css/typography.css">
	<link rel="stylesheet" href="public/core/css/default-css.css">
	<link rel="stylesheet" href="public/core/css/styles.css">
	<link rel="stylesheet" href="public/core/css/responsive.css">
	<script src="public/core/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="login-area login-s2">
	<div class="container">
		<div class="login-box ptb--100">
			<form action="<?=base_url('auth/login');?>" method="post">
				<div class="login-form-head">
					<h4>Sign In</h4>
					<p>Hello there, Sign in and start managing your Admin Page</p>
				</div>
				<div class="login-form-body">
					<?php
					if (isset($message)) {
						echo '<p style="color: red; padding-bottom: 15px; text-align: center;">' . $message . '</p>';
					}
					?>
					<div class="form-gp">
						<label for="admin_name">Admin Name</label>
						<input type="text" id="admin_name" name="username">
						<i class="ti-user"></i>
					</div>
					<div class="form-gp">
						<label for="admin_password">Admin Password</label>
						<input type="password" id="admin_password" name="password">
						<i class="ti-lock"></i>
					</div>
					<div class="submit-btn-area">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<button type="submit">Submit <i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="public/core/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/core/js/popper.min.js"></script>
<script src="public/core/js/bootstrap.min.js"></script>
<script src="public/core/js/owl.carousel.min.js"></script>
<script src="public/core/js/metisMenu.min.js"></script>
<script src="public/core/js/jquery.slimscroll.min.js"></script>
<script src="public/core/js/jquery.slicknav.min.js"></script>

<script src="public/core/js/plugins.js"></script>
<script src="public/core/js/scripts.js"></script>
</body>

</html>