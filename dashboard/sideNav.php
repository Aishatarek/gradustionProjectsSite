<nav class="sidebar sidebar-offcanvas w-10" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard </span>
                <i class="fa fa-home menu-icon"></i>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <span class="menu-title">Admins</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-person menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="./admins/addAdmin.php">Add Admin </a></li>
                    <li class="nav-item"> <a class="nav-link" href="admins/displayAdmins.php">All Admins  </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-users menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="./users/addUser.php">Add User </a></li>
                    <li class="nav-item"> <a class="nav-link" href="users/displayUsers.php">All Users  </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
                <i class="fa-solid fa-sheet-plastic menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic7">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="projects/addProject.php">Add Projects </a></li>
                    <li class="nav-item"> <a class="nav-link" href="projects/displayProjects.php">All Projects </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <span class="menu-title">Log out</span>
                <i class="fa fa-sign-out menu-icon"></i>

            </a>
        </li>

    </ul>
</nav>