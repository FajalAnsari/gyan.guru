<?php
session_start();
error_reporting(0);
include '../action/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $comp . ' | Admin Login ' ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../img/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth">
				<div class="row flex-grow">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left p-5">
							<div class="brand-logo">
								<a href="../">
									<img src="./assets/imgs/Logo (3).png">
									<!-- <h2 style="color: #00BFFF;"><b><?= $shop['name'] ?></b></h2> -->
								</a>
							</div>
							<h4>Hello! let's get started</h4>
							<h6 class="font-weight-light">Sign in to continue.</h6>
							<form class="pt-3" method="POST">
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
								</div>
								<div class="mt-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="admin_login">SIGN IN</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<script src="js/off-canvas.js"></script>
	<script src="js/misc.js"></script>
	<!-- endinject -->
</body>

</html>