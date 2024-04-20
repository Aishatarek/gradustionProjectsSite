<?php
include("../dashboard/functions.php");

ob_start();
if (isset($_COOKIE['id']) && isset($_COOKIE['name'])) {
    $_SESSION['user_id'] = $_COOKIE['id'];
    $_SESSION['name'] = $_COOKIE['name'];
}
?>


<style>
    @import url('http://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        border-radius: border-box;
        font-family: "poppins", sans-serif;
    }

   

    nav {
        position: fixed;
        top: 0;
        left: 0;
        height: 70px;
        width: 100%;
        display: flex;
        align-items: center;
        background: rgba(188, 143, 143, 0.323);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        z-index: 120;
    }
   
    nav.logo {
        display: flex;
        align-items: center;
        margin: 0 24px;
    }

    .logo .menu-icon {
        color: rosybrown;
        font-size: 24px;
        margin-right: 14px;
        margin-left: 20px;
        cursor: pointer;
        font-weight: 600;
    }

    .logo .logo-name {
        color: rosybrown;
        font-size: 22px;
        font-weight: 600;

    }

    nav .sidebar {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 260px;
        padding: 20px 0;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        z-index: 130;

    }

    nav.open .sidebar {
        left: 0;
        z-index: 120;

    }

    .sidebar .sidebar-content {
        display: flex;
        height: 70%;
        flex-direction: column;
        justify-content: space-between;
        padding: 30px 16px;
    }

    .sidebar-content .list {
        list-style: none;
    }

    .list .nav-link {
        display: flex;
        align-items: center;
        margin: 8px 0;
        padding: 14px 12px;
        border-radius: 8px;
        text-decoration: none;
    }

    .lists .nav-link:hover {
        background-color: #bc8f8f;
    }

    .nav-link .icon {
        margin-right: 14px;
        font-size: 20px;
        color: #707070;
    }

    .nav-link .link {
        font-size: 16px;
        color: #707070;
        font-weight: 400;
    }

    .lists .nav-link:hover .icon,
    .lists .nav-link:hover .link {
        color: #fff;
    }

    .overlay {
        position: fixed;

        top: 0;
        left: -100%;
        height: 1000vh;
        width: 200%;
        opacity: 0;
        background: rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease;
        pointer-events: none;
        z-index: 100;

    }

    nav.open~.overlay {
        opacity: 1;
        left: 260px;
        pointer-events: auto;
    }


    .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: red;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content {
        list-style: none;
    }

    .nav-link.dropdown-toggle {
        text-align: center;
        font-size: 16px;
        color: #707070;
    }
</style>
<nav>
    <div class="logo">
        <i class='bx bx-menu menu-icon'></i>
        <span class="logo-name">Project Hub</span>
    </div>


    <div class="sidebar">
        <div class="logo">
            <i class='bx bx-menu menu-icon'></i>
            <span class="logo-name">Project Hub</span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">
                <li class="list dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['name'] ?? '<i class="bx bx-user icon"></i>'; ?>

                    </a>
                    <ul class="dropdown-content">
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            echo '
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>

                                  ';
                        } else {
                            echo '
                          <li><a class="dropdown-item" href="../login.php">Sign In</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="../register.php">Register</a></li>
                                         ';
                        }
                        ?>

                    </ul>
                </li>
                <li class="list">
                    <a href="../index.php" class="nav-link">
                        <i class='bx bxs-home icon'></i>
                        <span class="link">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../Gprojects.php" class="nav-link">
                        <i class='bx bxs-graduation icon'></i>
                        <span class="link">Graduation Projects</span>
                    </a>
                </li>
        
                <?php
                if (isset($_SESSION['user_id'])) {
                    if (isset($_SESSION['project_id'])) {

                    if ($_SESSION['project_id'] > 0) {
                        echo '    ';
                    } else {
                        echo '  <li class="list">
                                      <a href="../form.php" class="nav-link"> 
                                    <i class="bx bxs-graduation icon"></i>
                                    <span class="link">Upload Project</span>
                                     </a>
                                  </li> ';
                    }
                }else{
                    echo '  <li class="list">
                                      <a href="../form.php" class="nav-link"> 
                                    <i class="bx bxs-graduation icon"></i>
                                    <span class="link">Upload Project</span>
                                     </a>
                                  </li> ';
                }
                } else {
                    echo '<li class="list">
                    <a href="../login.php" class="nav-link">   
                    <i class="bx bxs-graduation icon"></i>
                    <span class="link">Upload Project</span>
                     </a>
                  </li>  ';
                }
                ?>

                <li class="list">
                    <a href="../campanies.php" class="nav-link">
                        <i class='bx bxs-network-chart icon'></i>
                        <span class="link">Market Labor</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../Awareness.php" class="nav-link">
                        <i class='bx bx-book-open icon'></i>
                        <span class="link">Awareness</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../roadmap.php" class="nav-link">
                        <i class='bx bx-log-in icon'></i>
                        <span class="link">Roadmap</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../whatShould.php" class="nav-link">
                        <i class='bx bx-log-in icon'></i>
                        <span class="link">What should you ?</span>
                    </a>
                </li>
                <li class="list">
                    <a href="../aboutus.php" class="nav-link">
                        <i class='bx bx-sitemap icon'></i>
                        <span class="link">About Us</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<section class="overlay"> </section>






<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<script>
    const navbar = document.querySelector("nav"),
        menubtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelectorAll(".overlay");

    menubtns.forEach((menubtn) => {
        menubtn.addEventListener("click", () => {
            navbar.classList.toggle("open");
        });
    });

    overlay.addEventListener("click", () => {
        navbar.classList.remove("open");
    })
</script>