	 <!-- header----------------- -->
     <div class="container-fluid bg bggg" style="height:91px;">
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


    </div>
    <!-- <div class="countdiv"><b>03</b></div> -->

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        <a href="about.php" class="fs-5">About</a>
        <a href="allcourses.php" class="fs-5">Courses</a>
        <a href="contact.php" class="fs-5">Contact</a>
    </div>
    <!-- user icon section -->
    <div id="mySlidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeSlidebar()">&times;</a>
		<a href="admin/" <?php if (!isset($_SESSION['email'])) {
									echo "style='display:block'";
								} else {
									echo "style='display:none'";
								} ?>class="fs-5">Sign In/sign up</a>

		<div <?php if (isset($_SESSION['email'])) {
					echo "style='display:block; text-align:center;'";
				} else {
					echo "style='display:none'";
				} ?> class="userpic">
			<img src="<?= $_SESSION['image'] ?>" width="30%" height="25%" class="rounded-circle text-center"><br>
            <p class="text-center text-warning"><?= $_SESSION['email'] ?></p>


			<!-- <i class="fa-solid fa-pencil" id="ed"> -->
		</div>
        <hr class="text-white">

		<a  class="text-info" href="./admin/dashboard.php" <?php if (isset($_SESSION['email'])) {
						echo "style='display:block; text-align:center; '";
					} else {
						echo "style='display:none; text-align:center;'";
					} ?>class="fs-5">Dashboard</a>
		<a class="text-info" href="logout1.php" <?php if (isset($_SESSION['email'])) {
									echo "style='display:block ; text-align:center;'";
								} else {
									echo "style='display:none ; text-align:center;'";
								} ?>class="fs-5">Logout</a>

	</div>

    <!-- header------------------- -->