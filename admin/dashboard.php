<?php
include '../action/check-login.php';
include '../action/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $comp_name . ' ' . $page ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="./vendors/chartist/chartist.min.css">

	<link rel="stylesheet" href="./css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../img/favicon.png" />
	<style>
		label {
			font-size: 12px;
			font-weight: bold;
			margin-bottom: 0px;
			padding-bottom: 0px;
		}
	</style>
</head>

<body>
	<div class="container-scroller">


		<!-- partial:partials/_navbar -->
		<?php include 'topbar.php'; ?>


		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar -->

			<?php include 'sidenavbar.php'; ?>


			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
				    
				    <div class="row">
				        <div class="col-md-3 my-2">
				            <div class="card card-body text-center" style="border:2px solid red; ">
				                <h5><a href="post">Add New <br> Vacancy</a></h5>
								<br>
								<?php
								echo 'Total : &nbsp; '. mysqli_num_rows(mysqli_query($con,"SELECT * FROM `posts` "));
								?>
				            </div>
				        </div>
				        				    
				    </div>
				    

				</div>
			</div>
		</div>
	</div>

	<script src="vendors/js/vendor.bundle.base.js"></script>
	<script src="./vendors/moment/moment.min.js"></script>
	<script src="js/off-canvas.js"></script>
	<script src="js/misc.js"></script>
	<script src="./js/dashboard.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
</body>

</html>