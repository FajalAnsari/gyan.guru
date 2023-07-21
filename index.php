<?php
include 'action/config.php';
session_start();

//Check if the user is already logged in
if (!isset($_SESSION['email'])) {

	// Redirect the user to the home page or any other authorized page
	// header("Location: sigin_up.php");

}


?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Eduprix</title>
	<style>

	</style>
</head>

<body>
	<!-- header----------------- -->
	<?php include 'header.php' ?>


	<div class="container-fluid bg">
		<div class="container">
			<div class="d-flex justify-content-between text-white">
				<div class="mt-3">
					<a class="navbar-brand" href="index.php"><img src="./assets/imgs/Logo (3).png" /></a>
				</div>
				<div class="mt-3 formsearch">
					<form class="d-flex">
						<span class="searcha fw-bold">Search Anything</span>
						<input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-info rounded-circle searchboxbtn" type="submit"><i class="fa-solid fa-search"></i></button>
					</form>
				</div>
				<div class="mt-3">
					<i class="fa-sharp fa-solid slidicon fa-bars fs-4 " onclick="openSidebar()"></i><span>&nbsp;<i class="fa-solid slidicon fa-user fs-4 mx-2 " onclick="opend()"></i></span>
				</div>
			</div>
		</div>
		<img src="./assets/imgs/Circles (1).svg" width="305px" class="imgrescircle">
		<div class="text-end icondiv">
			<i class="fa-brands fa-instagram "></i>
			<i class="fa-brands fa-twitter "></i>
			<i class="fa-brands fa-facebook "></i>
		</div>

	</div>
	<div class="countdiv"><b>01</b></div>

	<!-- ---------------------------------- -->

	<div class="container mt-4">
		<div id="carouselExampleCaptions" class="carousel slide headerres" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner cinner">
				<div class="carousel-item active">
					<img src="./assets/imgs/HeroImage (1).png" class="d-block w-100" alt="..." height="400px">
					<div class="carousel-caption d-none d-md-block text-start">
						<h5 class="fs-4 emph5">We <b class="empbold">empower</b> you <br>
							to learn what you love.</h5>
						<!-- <p>We empower you 
            to learn what you love.</p> -->
					</div>
				</div>
				<div class="carousel-item">
					<img src="./assets/imgs/Rectangle 28 (1).png" class="d-block w-100" alt="..." height="400px">
					<div class="carousel-caption d-none d-md-block text-start">
						<h5 class="fs-4 emph5">We <b class="empbold">empower</b> you <br>
							to learn what you love.</h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./assets/imgs/Rectangle 28 (2).png" class="d-block w-100" alt="..." height="400px">
					<div class="carousel-caption d-none d-md-block text-start">
						<h5 class="fs-4 emph5">We <b class="empbold">empower</b> you <br>
							to learn what you love.</h5>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden"></span>
			</button>
		</div>
		<div class="bottomcrousel">
			<span>250,998 people are learning with us</span><span><button class="lmore fw-bold">Learn More &rarr;</button></span>
		</div>
	</div>

	<!-- -------------------------------------------- -->

	<!-- TOP COURSES
   Start-->
	<div class="container topcourse">
		<span>
			<div class="seaside mt-5 respontopcoures">TOP COURSES </div>
			<nav aria-label="Page navigation example">
				<ul class="pagination page">
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</span>
		<div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
			<?php
			$query = "SELECT * FROM `posts`;";
			$result = $con->query($query);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {

			?>
					<div class="col">
						<div class="card cardborder">
							<img src="<?php echo 'assets/imgs/' . $row['image']; ?>" class="card-img-top" alt="..." style="height:280px;">
							<div class="card-body">
								<a href="coursedetails.php?id=<?php echo $row['id']; ?>">
									<button type="button" class="btn btn-primary position-relative bgi">
										VIEW COURSE
										<span class="position-absolute top-100 start-100 translate-middle badge">
											Free
											<span class="visually-hidden">unread messages</span>
										</span>
									</button>
								</a>
								<h5 class="card-title"><?php echo $row['title'] ?></h5>
								<!-- <p class="card-text"><?php echo $row['desc'] ?></p> -->
							</div>
						</div>
					</div>

			<?php
				}
			} ?>
		</div>
		<br>
		<div>
			<nav aria-label="Page navigation example">
				<ul class="pagination page page2 iid">
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- TOP COURSES End-->



	<!-- /* EXPLORE EDUPRIX Start */ -->
	<div class="container-fluid explorecontainer">
		<span>
			<h1 class="seaside pt-5 ms-5">&nbsp;EXPLORE EDUPRIX</h1>
			<nav aria-label="Page navigation example">
				<ul class="pagination page">
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Previous">
							<span aria-hidden="true">&larr;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
					<li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link colorchange" href="#" aria-label="Next">
							<span aria-hidden="true">&rarr;</span>
						</a>
					</li>
				</ul>
			</nav>
		</span>
		<div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4 mt-4 m-5">
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-dna mx-3 fs-2 ficon"></i></div>
					<!-- A form containing the button -->
					<form action="" method="post">
						<button name="myButton" value="finance" style="background:none; color:white; margin-top:10px; margin-bottom:10px;">Finance</button>
					</form>


					<p class="couresp">78 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa fa-briefcase mx-3 fs-2 ficon" aria-hidden="true"></i></div>
					<form action="" method="post">
						
						<button name="myButton" value="investment" style="background:none; color:white; margin-top:10px; margin-bottom:10px;">Investment</button>
					</form>
					<p class="text-white"> <?php echo  $numCourses;?></p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-language mx-3 fs-2 ficon"></i></div>
					<form action="" method="post">
						<button name="myButton" value="Marketing" style="background:none; color:white; margin-top:10px; margin-bottom:10px;">Marketing</button>
					</form>
					<p class="couresp">85 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-user mx-3 fs-2 ficon"></i></div>
					<form action="" method="post">
						<button name="myButton" value="development" style="background:none; color:white; margin-top:10px; margin-bottom:10px;">Development</button>
					</form>
					<p class="couresp">98 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-photo-film mx-3 fs-2 ficon"></i></div>
					<b class="text-white">Film & Media</b>
					<p class="couresp">68 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-plus mx-3 fs-2 ficon"></i></div>
					<b class="text-white">Math & Logic</b>
					<p class="couresp">876 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-suitcase-medical mx-3 fs-2 ficon"></i></div>
					<b class="text-white">Health & Medical</b>
					<p class="couresp">79 Courses</p>
				</div>
			</div>
			<div class="col">
				<div class="p-3  exprow text-center">
					<div><i class="fa-solid fa-creative-commons-sampling mx-3 fs-2 ficon"></i></div>
					<b class="text-white">Design & Creative</b>
					<p class="couresp">37 Courses</p>
				</div>
			</div>
			<div>
				<br>
				<nav aria-label="Page navigation example">
					<ul class="pagination page page2 page3">
						<li class="page-item">
							<a class="page-link colorchange" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link colorchange" href="#">1</a></li>
						<li class="page-item"><a class="page-link colorchange" href="#">2</a></li>
						<li class="page-item"><a class="page-link colorchange" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link colorchange" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- <pre class="text-end sall pb-5 pe-5 colorchange">See All</pre> -->
	</div>

	<div class="container">
		<div class="seaside mt-5 text-center">ALL COURSES</div>
		<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
			<?php
              
			if ($_SERVER["REQUEST_METHOD"] === "POST") {
				if (isset($_POST['myButton'])) {
					$filtervalues = $_POST['myButton'];
					$sanitizedFilter = '%' . $con->real_escape_string($filtervalues) . '%';
					
					$query = "SELECT * FROM `posts` WHERE category LIKE ?";
					
					// PREPARE STATEMENT
					$stmt = $con->prepare($query);
					if ($stmt) {
						// BIND PARAMETER
						$stmt->bind_param("s", $sanitizedFilter);

						// EXECUTE QUERY
						$stmt->execute();

						// GET RESULT
						$result = $stmt->get_result();

						$numCourses = $result->num_rows;
						if ($numCourses > 0) {
							
							


							// OUTPUT DATA OF EACH ROW
							while ($row = $result->fetch_assoc()) {
			?>
								<div class="col">
									<div class="card cardborder">
										<img src='<?php echo 'assets/imgs/' . $row['image']; ?>' class="card-img-top" alt="..." style="height: 245px;">
										<div class="card-body">
											<a href="coursedetails.php?id=<?php echo $row['id']; ?>">
												<button type="button" class="btn btn-primary position-relative bgi">
													VIEW COURSE
													<span class="position-absolute top-100 start-100 translate-middle badge">
														Free
														<span class="visually-hidden">unread messages</span>
													</span>
												</button>
											</a>
											<h5 class="card-title"><?php echo $row['title'] ?></h5>
											<!-- <p class="card-text"><?php echo $row['desc'] ?></p> -->
										</div>
									</div>
								</div>
			<?php
							}
						} else {
							echo "<h2>No results found for: " . htmlspecialchars($filtervalues) . "</h2>"; // Display the search term
						}
					} else {
						echo "Error in the query.";
					}
				}
			}
			echo  $numCourses;
			?>

		</div>
		<div class="text-center mt-5 mb-5"><a href="allcourses.php"><button type="button" class="btn btngetcourse btn-lg">View All Courses</button></a></div>
	</div>



	<!-- /* EXPLORE EDUPRIX End */ -->


	<!-- /* Student Review Sart */ -->
	<div class="container">
		<div class="seaside mt-5">STUDENTS REVIEW </div>
		<section class="p-4 p-md-5 text-center text-lg-start  rounded">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10">
					<div class="card " style="border: none;">
						<div class="card-body m-3">
							<div class="row">
								<div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
									<img src="./assets/imgs/Student Photo.png" class=" img-fluid shadow-1 imagesadhow" alt="woman avatar" width="200" height="200" />
								</div>
								<div class="col-lg-8">
									<div>
										<button class="rounded-circle arrowcolor">&larr;</button>
										<button class="rounded-circle arrowcolor">&rarr;</button>
									</div>
									<p class="fw-bold lead mb-2 mt-4 emilliecolor"><strong>Emillie Jonas</strong></p>
									<p class="fw-bold mb-0 englandcolor">England</p>
									<p class=".footertext fw-light mt-3">
										Eduprix is an ideal location for anybody who wants to learn something new or share what they know with others.
										Eduprix is a worldwide platform for online learning that helps to connect with one another via knowledge.
										It comes highly recommended from my side.
									</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- /* Student Review End */ -->
	<!-- --------------------------- -->
	<div class="container-fluid unknown">
		<div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3 mt-4 ">
			<div class="col">
				<div class="m-5 text-center">
					<div><img src="./assets/imgs/Illustration.png" /></div>
					<h3 class="mathunknown">1257</h3>
					<h4 class="unknownh4">Top <br> Courses</h4>
					<p class="fs-40">Take courses from the world’s<br> best instructors and universities. </p>
				</div>
			</div>
			<div class="col">
				<div class="m-5 text-center">
					<div><img src="./assets/imgs/Illustration2.png" /></div>
					<h3 class="mathunknown">99981</h3>
					<h4 class="unknownh4">Happy <br> Learners</h4>
					<p class="fs-40">Learners from all around <br>the world.</p>
				</div>
			</div>
			<div class="col">
				<div class="m-5 text-center">
					<div><img src="./assets/imgs/Illustration 3.png" /></div>
					<h3 class="mathunknown">578</h3>
					<h4 class="unknownh4">Eminent <br>Instructors</h4>
					<p class="fs-40">Learn your favourite course with<br> world-class instructors.</p>
				</div>
			</div>

		</div>
	</div>
	<!-- ------------------------ -->
	<!-- /* MEET OUR INSTRUCTORS Start */ -->
	<div class="container">
		<div class="seaside mt-5 text-center">MEET OUR INSTRUCTORS </div>
		<section>
			<div class="row text-center">
				<div class="col-md-3 mb-5 mb-md-0 meetres">
					<div class="d-flex justify-content-center mb-4 mt-5">
						<img src="./assets/imgs/Rectangle 31.png" class="shadow-1-strong" width="150" height="150" />
					</div>
					<h5 class="mb-3 emilliecolor">John S.Sergent</h5>
					<p class="px-xl-3 englandcolor">Head of Data Science </p>
				</div>
				<div class="col-md-3 mb-5 mb-md-0 meetres">

					<div class="d-flex justify-content-center mb-4 mt-5">
						<img src="./assets/imgs/Rectangle 31 (1).png" class="shadow-1-strong" width="150" height="150" />
					</div>
					<h5 class="mb-3 emilliecolor">Albrecht Kachher</h5>
					<p class="px-xl-3 englandcolor">Developer and Lead Instructor </p>
				</div>
				<div class="col-md-3 mb-5 mb-md-0 meetres">

					<div class="d-flex justify-content-center mb-4 mt-5">
						<img src="./assets/imgs/Rectangle 31 (2).png" class="shadow-1-strong" width="150" height="150" />
					</div>
					<h5 class="mb-3 emilliecolor">Peter P. Rubens</h5>
					<p class="px-xl-3 englandcolor">Digital Marketing Expart</p>
				</div>
				<div class="col-md-3 mb-5 mb-md-0 meetres">

					<div class="d-flex justify-content-center mb-4 mt-5">
						<img src="./assets/imgs/Rectangle 31 (3).png" class="shadow-1-strong" width="150" height="150" />

					</div>

					<h5 class="mb-3 emilliecolor">David A.Sequiros</h5>
					<p class="px-xl-3 englandcolor">Engineering Architect</p>

				</div>
				<div>
					<button class="rounded-circle arrowcolor">&larr;</button>
					<button class="rounded-circle arrowcolor">&rarr;</button>
				</div>
			</div>
		</section>
	</div>
	<!-- /* MEET OUR INSTRUCTORS End */ -->

	<!-- /* Recent Blogpost Sart */ -->
	<div class="container">
		<div class="seaside mt-5 text-center">RECENT BLOGPOST</div>
		<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23.png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Art
						</button>
						<h5 class="card-title emilliecolor">The limits between art and craft</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (1).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Info. Tech
						</button>
						<h5 class="card-title emilliecolor">8 guidelines for art lovers</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (3).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Mathematics
						</button>
						<h5 class="card-title emilliecolor">The Importance of Statistics</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (2).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Design
						</button>
						<h5 class="card-title emilliecolor">The Fundamentals of Color Theory</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (4).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Art
						</button>
						<h5 class="card-title emilliecolor">Excellent short tale writing tips</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (5).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Education
						</button>
						<h5 class="card-title emilliecolor">Make your Classroom a Community</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (7).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Art
						</button>
						<h5 class="card-title emilliecolor">Five Turner chosen art collectives</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
			<div class="col blogshadow">
				<div class="card blogcard">
					<img src="./assets/imgs/Rectangle 23 (8).png" class="card-img-top mt-2 p-4" alt="...">
					<div class="card-body">
						<button type="button" class="btn btn-primary blogbtn">
							Art
						</button>
						<h5 class="card-title emilliecolor">The artistic highlights of the week</h5>
						<p class="card-text footertext">Full Article</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /* Recent Blogpost End */ -->
	<!-- ----------------------- -->
	<div class="container-fluid unknown mt-5 backgroundform">
		<div class="row">
			<div class="col-lg-6 col-sm-12 text-end p-5 imgform"><img src="./assets/imgs/Illustration (1).png " width="300px" height="385px" /></div>
			<div class="col-lg-6 col-sm-12 pt-5 textres">
				<div class="mt-5">
					<h4 class="  emilliecolor">Get Regular <br> Updates from</h4>
					<img src="./assets/imgs/Logo (3).png" height="50px" width="200px" class="mt-2" />
				</div>
				<div class="formcen">
					<form class="row g-3 mt-2 formres">
						<div class="col-auto">
							<label>Subscribe to Newsletter</label>
							<label for="inputPassword2" class="visually-hidden ">Password</label>
							<input type="password" class="form-control mt-2 inputemail" id="inputPassword2" placeholder="Email">
							<button type="submit" class="btn btn-primary subscribebtn mt-2">SUBSCRIBE</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- ---------------------------------- -->
	<?php include 'footer.php' ?>
	<script>
		const openSidebar = () => {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		};

		const closeSidebar = () => {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		};
		const opend = () => {
			document.getElementById("mySlidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		};

		const closeSlidebar = () => {
			document.getElementById("mySlidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		};



		let elCarousel = $('.carousel');
		let elCarouselItem = $('.carousel-item');
		let elCarouselCounter = $('.crsl_slide-counter');

		elCarousel.each(function() {
			let $carousel = $(this);
			let totalItems = $carousel.find(elCarouselItem).length;
			if (totalItems < 10) {
				totalItems = '0' + totalItems;
			}
			$carousel.find(elCarouselCounter).html('01/' + totalItems + '');
		});

		elCarousel.on('slid.bs.carousel', function() {
			let $carousel = $(this);
			let currentIndex = $carousel.find('div.active').index() + 1;
			if (currentIndex < 10) {
				currentIndex = '0' + currentIndex
			}
			let ti = $carousel.find(elCarouselItem).length;
			if (ti < 10) {
				ti = '0' + ti;
			}
			$carousel.find(elCarouselCounter).html('' + currentIndex + '/' + ti + '');
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>