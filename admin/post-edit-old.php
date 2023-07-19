<?php include '../action/check-login.php';
include '../action/config.php';
// error_reporting(E_ALL);
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
						<div class="card-header">
							<h2><?= $page ?></h2>
						</div>
						<div class="card-body">

							<?php
							$qry = mysqli_query($con, "SELECT * FROM `posts` WHERE id='$_GET[post_id]' ");
							$res = mysqli_fetch_array($qry);
							?>
							<form method="post" enctype="multipart/form-data" runat="server">
								<div class="row">

									<div class="col-md-12">
										<img style="height:200px" src="<?= $path . $res['img1'] ?>" alt="" />

										<img style="height:200px" src="<?= $path . $res['img2'] ?>" alt="" />
									</div>

									<div class="col-md-3">
										<label for="">Image 1*</label>
										<input type="file" name="img1" class="form-control form-control-sm" onchange="readURL1(this);">
									</div>
									<div class="col-md-3">
										<img width="50%" id="blah1" src="assets/blank.png" alt="" />
									</div>

									<div class="col-md-3">
										<label for="">Image 2</label>
										<input type="file" name="img2" class="form-control form-control-sm" onchange="readURL2(this);">
									</div>
									<div class="col-md-3">
										<img width="50%" id="blah2" src="assets/blank.png" alt="" />
									</div>


									<div class="col-md-2  my-2">
										<label for="">Post Date</label>
										<input type="date" name="date" value="<?= $res['date'] ?>" class="form-control form-control-sm" required>
									</div>

									<div class="col-md-3 my-2">

										<div class="">
											<label for="input">Tags <small>(Tag separated By {Coma} )</small></label>
											<input type="text" value="<?= $res['tag'] ?>" name="tag" class="form-control" placeholder="           ">
										</div>

									</div>

									<div class="col-md-3 my-2">
										<div class="">
											<label><?= $page ?> Keywords <small>(separated By {Coma} )</small></label>
											<input name="keyword" value="<?= $res['keyword'] ?>" class="form-control form-control-sm" type="text">
										</div>
									</div>

									<div class="col-md-3 my-2">
										<div class="">
											<label><?= $page ?> #tag <small>(#Tag separated By {Coma} )</small></label>
											<input name="hashtag" value="<?= $res['hashtag'] ?>" class="form-control form-control-sm" type="text">
										</div>
									</div>

									<div class="col-md-12">
										<label for="">Post Title</label>
										<textarea type="text" name="title" id="title1" class="form-control form-control-sm" required>
										<?= $res['title'] ?>
										</textarea>
									</div>

									<div class="col-md-12">
										<label for="">URL Title</label>
										<textarea type="text" name="url_title" class="form-control form-control-sm" required>
										<?= $res['url_title'] ?>
										</textarea>
									</div>

									<div class="col-md-10">
										<label for="">Category</label>
										<select name="category[]" multiple class="js-example-basic-multiple form-control form-control-sm" id="category1">
											<option value="<?= $res['category'] ?>">
												<?php
												$z = mysqli_fetch_array(mysqli_query($con, "SELECT category FROM `category` WHERE id='$res[category]' "));
												echo $z['category'];
												?>
											</option>
											<option value="">--Select Category--</option>
											<?php
											$i = 1;
											$qry2 = mysqli_query($con, "SELECT * FROM `category` WHERE status=1 ORDER BY category ASC ");
											while ($res2 = mysqli_fetch_array($qry2)) :
											?>
												<option value="<?= $res2['id'] ?>"><?= $res2['category'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>

									<div class="col-md-2">
										<label for="">Trending</label>
										<input type="text" name="trending" value="<?= $res['trending'] ?>" class="form-control form-control-sm">
									</div>

									<div class="col-md-12">
										<label for="">Short Description</label>
										<textarea type="text" name="short_desc" rows="3" class="form-control form-control-sm" required><?= $res['short_desc'] ?></textarea>
									</div>

									<div class="col-md-12">
										<label for="">Long Description</label>
										<textarea name="editor1" id="desc" class="form-control ckeditor" rows="4" required><?php echo htmlspecialchars_decode($res['long_desc']); ?></textarea>
										
									</div>

									<div class="col-md-12 mt-4 text-center">
										<input type="hidden" name="id" value="<?= $res['id'] ?>">
										<button type="submit" name="post_update" class="btn btn-info">Update</button>
										&nbsp; &nbsp;
										<button type="submit" name="delete_post" class="btn btn-danger" onclick="return confirm('Do you really want to delete this post ?')"><i class="fas fa-trash"></i></button>
									</div>
								</div>
							</form>

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
	<script src="vendors/select2/select2.min.js"></script>
	<script src="js/select2.js"></script>

	
	<script src="vendors/ckeditor5/build/ckeditor.js"></script>
	<script>
		ClassicEditor
			.create(document.querySelector('#title1'));
	</script>

	<script>
		ClassicEditor
			.create(document.querySelector('#desc'))
	</script>



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

		function readURL2(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah2').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$('#category').on('change', function() {
			var categoryID = $(this).val();
			if (categoryID) {
				$.ajax({
					type: 'POST',
					url: 'ajax.php',
					data: 'category_id=' + categoryID,
					success: function(html) {
						$('#subcategory').html(html);
					}
				});
			} else {
				$('#subcategory').html('<option value="">Select category first</option>');
			}
		});
	</script>
</body>

</html>