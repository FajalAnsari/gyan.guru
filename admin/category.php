<?php include '../action/check-login.php';
include '../action/config.php';
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $comp_name . ' | ' . $page ?></title>
	<link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="vendors/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="vendors/select2/select2.min.css">
	<link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
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
		<!-- partial:partials/_navbar.html -->
		<?php include 'topbar.php'; ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<?php include 'sidenavbar.php'; ?>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="card">
						<div class="card-body">
							<h5>Add <?= $page ?></h5>
							<form method="post" enctype="multipart/form-data" runat="server">
								<div class="row">
									<div class="col-md-4 my-2">
										<label>Category</label>
										<input name="category" placeholder="Category Name" class="form-control form-control-sm " type="text" required>
									</div>

									<!-- <div class="col-md-4 my-2">
										<label>Sub Category</label>
										<input name="subcategory" class="form-control form-control-sm " type="text">
									</div> -->

									<div class="col-md-2" style="margin-top:28px;">
										<button type="submit" name="add_category" class="btn btn-primary btn-block">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>



					<div class="card">
						<div class="card-header">
							<h2><?= $page ?> List</h2>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table text-center">
									<thead>
										<th>S.no</th>
										<th class="text-left">Category</th>
										<th>Action</th>
										<th>Delete</th>
									</thead>
									<tbody>
										<?php
										$i = 1;
										$qry = mysqli_query($con, "SELECT * FROM `category` WHERE status=1 ORDER BY category ASC ");
										while ($res = mysqli_fetch_array($qry)) :
										?>
											<tr>
												<form method="post" enctype="multipart/form-data" runat="server">
													<td><?= $i++; ?></td>
													<td>
														<input type="text" name="category" value="<?= $res['category'] ?>" class="form-control form-control-sm" required>
													</td>
													<td class="text-center">
														<input type="hidden" name="id" value="<?= $res['id'] ?>">
														<button type="submit" name="category_update" class="btn btn-sm btn-info">Update</button>
													</td>
													<td class="text-center">
														<button type="submit" name="delete_category" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this category ?')"><i class="fas fa-trash"></i></button>
													</td>
												</form>
											</tr>
										<?php
										endwhile;
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<script src="vendors/moment/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
	<script src="js/off-canvas.js"></script>
	<script src="js/misc.js"></script>
	<script src="js/user.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	<script src="vendors/select2/select2.min.js"></script>
	<script src="js/select2.js"></script>

</body>

</html>