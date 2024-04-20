<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/campanies.css">
    <meta charset="UTF-8" />

    <title>campanies page</title>
    <meta name="description" content="This page contain collection of campanies in business field" />

</head>

<body>
    <?php
    include("./sideNav.php")
    ?>

    <div class="cmp" style="margin-top: 100px;">
        <h1>Fields</h1>
    </div>
    <div class="box1">
        <div class="box2">
            <a href="roadmaps/marketing.php">
                <img src="images/Marketing.jpg" alt="photomar" class="img123">
                <h3>Marketing</h3>
            </a>
        </div>
        <div class="box2">
            <a href="roadmaps/programming.php">
                <img src="images/PROGRAMMING.jpg" alt="photopro" class="img123">
                <h3>Programming</h3>
            </a>
        </div>
        <a href="roadmaps/Accountingandauditing.php">
            <div class="box2">
                <img src="images/AUDITING.jpg" alt="photoaud" class="img123">
                <h3>Accounting and Auditing</h3>
        </a>
    </div>
    <div class="box2">
        <a href="roadmaps/financing.php">
            <img src="images/financing.jpg" alt="photofin" class="img123">
            <h3>financing</h3>
        </a>
    </div>
    <div class="box2">
        <a href="roadmaps/insurance.php">
            <img src="images/Accounting.jpg" alt="photoacc" class="img123">
            <h3>Insurance</h3>
        </a>
    </div>
    </div>

</body>

</html>