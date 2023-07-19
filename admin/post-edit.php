<?php include '../action/check-login.php';
include '../action/config.php';
// error_reporting(E_ALL);

$qry = mysqli_query($con, "SELECT * FROM `posts` WHERE id='$_GET[post_id]' ");
$res = mysqli_fetch_array($qry);


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!--  meta tags -->
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
							<h5><?= $page ?></h5>
							<form method="post">
								<div class="row">

									<div class="col-md-12 my-2">
										<div class="">
											<label>Job Title</label>
											<input name="job_title" id="myInput" value="<?= $res['job_title'] ?>" class="form-control form-control-sm" type="text">
										</div>
									</div>

									<div class="col-md-3 my-2">
										<label>Category </label>
										<select name="cat" class="js-example-basic-multiple form-control form-control-sm">
											<option value="<?= $res['cat_id'] ?>"><?= $res['cat_id'] ?></option>
											<?php $i = 1;
											$qry1 = mysqli_query($con, "SELECT * FROM `category` WHERE status=1 ORDER BY category ASC ");
											while ($res1 = mysqli_fetch_array($qry1)) : ?>
												<option value="<?= $res1['id'] ?>"><?= $res1['category'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>

									<div class="col-md-3 my-2">
										<label>State</label>
										<select name="state" class="js-example-basic-multiple form-control form-control-sm">
											<option value="<?= $res['state'] ?>"><?= $res['state'] ?></option>
											<?php
											$i = 1;
											$qry2 = mysqli_query($con, "SELECT * FROM `state` ORDER BY state ASC ");
											while ($res2 = mysqli_fetch_array($qry2)) : ?>
												<option value="<?= $res2['id'] ?>"><?= $res2['state'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>

									<div class="col-md-3 my-2">
										<div class="">
											<label>Post Date</label>
											<input name="post_date" class="form-control" value="<?= $res['post_date'] ?>" type="date">
										</div>
									</div>

									<div class="col-md-3 my-2">
										<div class="">
											<label>Last Date</label>
											<input name="last_date" class="form-control" value="<?= $res['last_date'] ?>" type="date">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Short Description</label>
											<textarea name="short_info" class="form-control form-control-sm" type="text"><?php echo htmlspecialchars_decode($res['short_info']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Date Title</label>
											<input name="date_title" class="form-control form-control-sm" value="<?= $res['date_title'] ?>" type="text">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Important Date</label>
											<textarea name="imp_date" class="form-control form-control-sm imp-date" type="text"><?php echo htmlspecialchars_decode($res['imp_date']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Fee Title</label>
											<input name="fee_title" class="form-control form-control-sm" value="<?= $res['fee_title'] ?>" type="text">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Fee Details</label>
											<textarea name="fee" class="form-control form-control-sm fee" type="text"><?php echo htmlspecialchars_decode($res['app_fee']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Age Title</label>
											<input name="age_title" class="form-control form-control-sm" value="<?= $res['age_title'] ?>" type="text">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Age Details</label>
											<textarea name="age" class="form-control form-control-sm age" type="text"><?php echo htmlspecialchars_decode($res['age_limit']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Post Details</label>
											<textarea name="post_details" class="form-control form-control-sm post" type="text"><?php echo htmlspecialchars_decode($res['post_details']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Cat-Wise Post Details</label>
											<textarea name="cat_details" class="form-control form-control-sm cat-post" type="text"><?php echo htmlspecialchars_decode($res['cat_wise_post']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Link Title</label>
											<input name="link_title" class="form-control form-control-sm" value="<?= $res['link_title'] ?>" type="text">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Important Links</label>
											<textarea name="links" class="form-control form-control-sm link-post" type="text"><?php echo htmlspecialchars_decode($res['links']); ?></textarea>
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Resource Title</label>
											<input name="res_title" class="form-control form-control-sm" value="<?= $res['res_title'] ?>" type="text">
										</div>
									</div>

									<div class="col-md-12 my-2">
										<div class="">
											<label>Resource Details</label>
											<textarea name="resource" class="form-control form-control-sm resource" type="text"><?php echo htmlspecialchars_decode($res['resource']); ?></textarea>
										</div>
									</div>

								</div>

								<div class="text-center col-md-2 mt-4">
									<input type="hidden" name="id" value="<?= $res['id'] ?>">
									<input type="submit" name="post_update" class="btn btn-info btn-block" value="Update">
								</div>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<script src="vendors/moment/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
	<script src="js/off-canvas.js"></script>
	<script src="js/misc.js"></script>
	<script src="js/user.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
	<script src="vendors/select2/select2.min.js"></script>
	<script src="js/select2.js"></script>
	<script src="vendors/ckeditor5/build/ckeditor.js"></script>
	<script>
		var inputField = document.getElementById("myInput");
		inputField.addEventListener("input", function() {
			var inputValue = inputField.value;
			var sanitizedValue = inputValue.replace(/[^\w\s]/gi, '');
			inputField.value = sanitizedValue;
		});




		ClassicEditor
			.create(document.querySelector('.imp-date'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.fee'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.age'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.post'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.cat-post'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.resource'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.link-post'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})
	</script>

</body>

</html>