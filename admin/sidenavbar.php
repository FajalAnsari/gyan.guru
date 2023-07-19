<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="<?= $_SESSION['image'] ?>" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?= $_SESSION['username'] ?></p>
                    <p class="designation">Administrator</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Main Menu</span>
        </li>

        <li class="nav-item">
            <a target="_blank" class="nav-link" href="../">
                <span class="menu-title">Home</span>
                <i class="icon-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
                <span class="menu-title">Posts</span>
                <i class="icon-picture menu-icon"></i>
            </a>
            <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="post.php">Add Post</a></li>
                    <li class="nav-item"> <a class="nav-link" href="post-list.php">Post List</a></li>
                    <li class="nav-item disabled"> <a class="nav-link disabled" href="post-edit.php">Post Edit</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cat" aria-expanded="false" aria-controls="cat">
                <span class="menu-title">Category</span>
                <i class="icon-picture menu-icon"></i>
            </a>
            <div class="collapse" id="cat">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="category.php">Category</a></li>
                </ul>
            </div>
        </li>

      <li class="nav-item">
            <a class="nav-link" href="curicullum.php">
                <span class="menu-title">Curicullum</span>
                <i class="icon-graduation menu-icon"></i>
            </a>
        </li>

       <!--  <li class="nav-item">
            <a class="nav-link" href="users">
                <span class="menu-title">Users</span>
                <i class="icon-people menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="authors">
                <span class="menu-title">Authors</span>
                <i class="icon-people menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="enquiry">
                <span class="menu-title">Enquiry</span>
                <i class="icon-people menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="subscriber">
                <span class="menu-title">Subscriber</span>
                <i class="icon-people menu-icon"></i>
            </a>
        </li> -->

        <li class="nav-item">
            <a class="nav-link" href="../action/logout.php">
                <span class="menu-title">Logout</span>
                <i class="icon-logout menu-icon"></i>
            </a>
        </li>



    </ul>
</nav>