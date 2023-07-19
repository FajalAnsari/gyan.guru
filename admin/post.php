<?php include '../action/check-login.php';
include '../action/config.php';
// error_reporting(E_ALL);
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
							<h5>Add <?= $page ?></h5>
							<form method="post" enctype="multipart/form-data" action="../action/config.php">
								<div class="row">



									<div class="col-md-3">
										<label for="">Image 1*</label>
										<input type="file" name="image" accept=".jpg, .png, .jpeg, .webp" class="form-control form-control-sm" onchange="readURL1(this);" required>
									</div>
									<div class="col-md-3">
										<img width="100%" id="blah1" src="assets/blank.png" alt="" />
									</div>



									<div class="col-md-12 my-2">
										<div class="">
											<label>Course Title</label>
											<input name="title" id="myInput" class="form-control form-control-sm" type="text">
										</div>
									</div>
									<div class="col-md-12 row my-2">
										<div class="col-md-3 my-2">
											<label>Category </label>
											<select name="cat_id" class="js-example-basic-multiple form-control form-control-sm">
												<option value="">Select Category</option>
												<?php $i = 1;
												$qry = mysqli_query($con, "SELECT * FROM `category` WHERE status=1 ORDER BY category ASC ");
												while ($res = mysqli_fetch_array($qry)) : ?>
													<option value="<?= $res['id'] ?>"><?= $res['category'] ?></option>
												<?php endwhile; ?>
											</select>
										</div>



										<div class="col-md-3 my-2">
											<label>Lebal</label>
											<select name="lebal" id="" class="form-control">
												<option value="">-- Select --</option>
												<option value="Biggner">Biggner</option>
												<option value="Intermediate">Intermediate</option>
												<option value="Advanced">Advanced</option>
											</select>
										</div>
										<div class="col-md-3 my-2">
											<label>Tags <small>(sepreted by Commas)</small></label>
											<input type="text" name="tags" class="form-control" multiple size="50">
										</div>
									</div>
									<!-- <div class="col-md-12 my-2">
										<div class="">
											<label>Curicullum</label>
											<textarea name="curicullum" class="form-control form-control-sm curi" type="text"></textarea>
										</div>
									</div> -->


									<div class="col-md-12 my-2">
										<div class="">
											<label>Description</label>
											<textarea name="desc" class="form-control form-control-sm desc" type="text"></textarea>
										</div>
									</div>

								</div>

								<div class="my-1 col-md-2 ">
									<input type="submit" name="add_post" class="btn btn-primary btn-block" value="Submit">
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
		function readURL1(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah1').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>




	<script>
		var inputField = document.getElementById("myInput");
		inputField.addEventListener("input", function() {
			var inputValue = inputField.value;
			var sanitizedValue = inputValue.replace(/[^\w\s]/gi, '');
			inputField.value = sanitizedValue;
		});


		ClassicEditor
			.create(document.querySelector('.desc'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		ClassicEditor
			.create(document.querySelector('.curi'), {
				licenseKey: '',
			})
			.then(editor => {
				window.editor = editor;
			})

		
	</script>

</body>

</html>