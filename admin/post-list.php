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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
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
							<div class="table-responsive">
								<table class="table table-bordered" id="myTable">
									<thead>
										<th>S.no</th>
										<th>Title</th>
										<th>Catagary</th>
										<th>Lebal</th>
										<th>Tags</th>
										<th>post_date</th>
										<th>image</th>
										<th>Action</th>

									</thead>
									<?php
									$i = 1;
									$qry = mysqli_query($con, "SELECT * FROM `posts` ORDER BY id DESC ");
									while ($res = mysqli_fetch_array($qry)) :
									?>
										<tr>
											<td><?= $i++ ?>.</td>

											<td style="line-height: 20px;"><?= ($res['title']) ?></td>


											<td>
												<?php
												$z = mysqli_fetch_array(mysqli_query($con, "SELECT category FROM `category` WHERE id='$res[cat_id]' "));
												echo $z['category'];
												?>
											</td>
											<td style="line-height: 20px;"><?= ($res['lebal']) ?></td>
											<td style="line-height: 20px;"><?= ($res['tags']) ?></td>
											<td><?= date('d-m-Y', strtotime($res['post_date'])) ?></td>
											<td style="line-height: 20px;"><img src="<?= $path . $res['image'] ?>" /></td>

											<td>
												<a href="post-edit?post_id=<?= $res['id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
												<br><br>
												<form method="post">
													<input type="hidden" name="id" value="<?= $res['id'] ?>">
													<button type="submit" name="delete_post" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this post ?')"><i class="fas fa-trash"></i></button>
												</form>
											</td>
										</tr>
									<?php endwhile; ?>
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
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('#myTable').DataTable({
				pageLength: 25,
			});
		});

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