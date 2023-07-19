<?php include '../action/check-login.php';
include '../action/config.php';

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

					<div class="row">
						<div class="col-md-6">

							<div class="card">
								<div class="card-body">
									<h5>Add <?= $page ?> Title</h5>
									<form method="post" enctype="multipart/form-data" runat="server">
										<div class="col-md-12 my-2">
											<label>Course Detail</label>

											<select name="post_id" class="js-example-basic-multiple form-control form-control-sm">
												<option value=""> -- SELECT --</option>
												<?php
												$qry = mysqli_query($con, "SELECT * FROM `posts` ");
												while ($res = mysqli_fetch_array($qry)) : ?>
													<option value="<?= $res['id'] ?>"><?= $res['title'] ?></option>
												<?php endwhile; ?>
											</select>

										</div>


										<div class="col-md-12 my-2">
											<label>Title </label>
											<input name="title" placeholder="Type Curicullum Title !" class="form-control form-control-sm " type="text" required>
										</div>




										<div class="col-md-12" style="margin-top:28px;">
											<div class="text-center col-md-6" style="margin-top:28px;">
												<button type="submit" name="add_curicullum_title" class="btn btn-primary btn-block">Save</button>
											</div>
										</div>

									</form>
								</div>
							</div>


						</div>


						<div class="col-md-6">


							<div class="card">
								<div class="card-body">
									<h5>Add <?= $page ?></h5>
									<form method="post" enctype="multipart/form-data" runat="server">
										<div class="row">											

											<div class="col-md-12 my-2">
												<label>Select Curicullum Title</label>

												<select name="curi_id" class="js-example-basic-multiple form-control form-control-sm">
													<option value=""> -- SELECT --</option>
													<?php
													$qry = mysqli_query($con, "SELECT * FROM `curicullum_title` ");
													while ($res = mysqli_fetch_array($qry)) : ?>
														<option value="<?= $res['id'] ?>"><?= $res['title'] ?></option>
													<?php endwhile; ?>
												</select>

											</div>


											<div class="col-md-12 my-2">
												<label>Quastion </label>
												<input name="qus" placeholder="Type Question !" class="form-control form-control-sm " type="text" required>
											</div>

											<div class="col-md-12 my-2">
												<label>Answer </label>
												<input name="ans" placeholder="Type Answer !" class="form-control form-control-sm " type="text" required>
											</div>


											<div class="col-md-12" style="margin-top:28px;">
												<div class="text-center col-md-6" style="margin-top:28px;">
													<button type="submit" name="add_curicullum" class="btn btn-primary btn-block">Save</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>




						</div>


					</div>




					<!-- 
					<div class="card">
						<div class="card-header">
							<h2><?= $page ?> List</h2>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table text-center">
									<thead>
										<th>S.no</th>
										<th class="text-left">Question</th>
										<th>Answer</th>

									</thead>
									<tbody>
										<?php
										$i = 1;
										$qry = mysqli_query($con, "SELECT * FROM `curicullum` ORDER BY id DESC");
										while ($res = mysqli_fetch_array($qry)) :
										?>
											<tr>
												<form method="post" enctype="multipart/form-data" runat="server">
													<td><?= $i++; ?></td>
													<td>
														<input type="text" name="qus" value="<?= $res['question'] ?>" class="form-control form-control-sm" required>
													</td>

													<td>
														<input type="text" name="qus" value="<?= $res['answer'] ?>" class="form-control form-control-sm" required>
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
				
				
				 -->




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