<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center bg-light" >
        <a class="" href="../index.php" >
            <img style="width: 100%;" src="../assets/imgs/Logo.2.png" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard"><img src="<?= $_SESSION['image'] ?>"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome <?= $comp_name ?></h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">


            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle ml-2" src="<?= $_SESSION['image'] ?>" alt="Profile image">
                    <span class="font-weight-normal"><?= $_SESSION['username'] ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" height="80px" src="<?= $_SESSION['image'] ?>" alt="Profile image">
                        <p class="mb-1 mt-3">Welcome <?= $_SESSION['username'] ?></p>
                    </div>
                    <!-- <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile </a> -->
                    <a href="../action/logout.php" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>