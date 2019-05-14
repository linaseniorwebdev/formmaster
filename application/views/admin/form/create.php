<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootstrap Form Builder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="public/css/lib/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/custom.css" rel="stylesheet">

	<!--		<link rel="shortcut icon" href="images/favicon.ico">-->
	<!--		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">-->
	<!--		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">-->
	<!--		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->

	<style>
		.nav-link {
			padding: 0.5rem 0.75rem !important;
		}

		ul > li.nav-item:last-child {
			display: none;
		}
	</style>
</head>
<body>
<div class="container pt-5">
	<div class="row clearfix">
		<!-- Components -->
		<div class="col-md-6">
			<h5>Drag & Drop components to create form</h5>
			<hr>
			<div class="tabbable">
				<ul class="nav nav-tabs" id="formtabs">
					<!-- Tab nav -->
				</ul>
				<form class="form-horizontal" id="components" role="form">
					<fieldset>
						<div class="tab-content">
							<!-- Tabs of snippets go here -->
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<!-- / Components -->

		<!-- Building Form. -->
		<div class="col-md-6">
			<div class="clearfix">
				<h5>Preview / Edit</h5>
				<hr>
				<div id="build">
					<form id="target" class="form-horizontal">
					</form>
				</div>
			</div>
			<div class="text-center mt-3">
				<button class="btn btn-success" type="button">
					Confirm & Save
				</button>
			</div>
		</div>
		<!-- / Building Form. -->
	</div>
</div>
<script data-main="public/js/main-built.js" src="public/js/lib/require.js" ></script>
</body>
</html>