<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/graduatehome.css">
</head>

<body>
    <?php
    include("./sideNav.php")
    ?>
    <h1 id="first_head">Let's start together</h1>

    <div class="container">

        <div class="card">
            <?php
            if (isset($_SESSION['user_id'])) {
                if (isset($_SESSION['project_id'])) {

                if ($_SESSION['project_id'] > 0) {
                    echo '<a href="Gprojects.php" class="nav-link"> ';
                } else {
                    echo '<a href="form.php" class="nav-link">    ';
                }
            }else{
                echo '<a href="form.php" class="nav-link">    ';

            }
            } else {
                echo ' <a href="login.php" class="nav-link">  ';
            }
            ?>
            <img src="images/grupload.jpg" class="img1" />
            <div class="intro">
                <h1>upload project</h1>
                <P>
                    it will be a refrence for your graduaetion project when you put it in CV
                </P>

            </div>
        </a>
        </div>

        <div class="card">
            <a href="Awareness.php">
                <img src="images/grawarness.jpg" class="img2" />
                <div class="intro">
                    <h1>awareness</h1>
                    <p>
                        You must have sufficient awareness of what you will do in your life after graduation. This
                        page
                        provides you several things that may guide you.</p>

                </div>
            </a>
        </div>

        <div class="card">
            <a href="roadmap.php">
                <img src="images/grroadmap.jpg" class="img3" />
                <div class="intro">
                    <h1>roadmap</h1>
                    <p>If you would like to start learning any of these fields, front end,back end, data analysis
                        and data science
                        ..etc
                        <br> This page will provide you the appropriate path for a beginner in addition to
                        an advanced part.
                    </p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="campanies.php">
                <img src="images/market req.jpg" class="img3" />
                <div class="intro">
                    <h1>labor Market </h1>
                    <p>
                        Before you start learning any field, you must have knowledge of the labor market requirements in
                        this field. This page provides you the labor market requirements in several fields in addition
                        to an
                        example of companies that require these skills.</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>