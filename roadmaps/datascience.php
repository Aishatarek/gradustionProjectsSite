<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Card Project</title>
        <link rel="stylesheet" href="../css/styleroadmaps.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <body>
    <?php
include("./sideNav.php")
?>

        <div class="main">
            <h3 class="head">DATA SCIENCE ROADMAP</h3>
            <div class="container">
                <ul>
                    <li>
                        <h3 class="heading">Basics </h3>
                        <p>python </p>
                        <a href="#">Click Here ></a>
                        <p>Excel </p>
                        <a href="#">Click Here ></a>
                        <p>Git</p>
                        <a href="#">Click Here ></a>
                        <span class="date">step1</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading"> Descriptive Analysis</h3>
                        <p>statistics </p>
                        <a href="#">Click Here ></a>
                        <p>Data Wrangling by SQL </p>
                        <a href="#">Click Here ></a>
                        <p>Data Wrangling by Python (Numby)(Pandas) </p>
                        <a href="#">Click Here ></a>
                        <span class="date">step2</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading">Predictive Analytics</h3>
                        <p> Maths (calculus)(linear Algabra)</p>
                        <a href="#">Click Here ></a>
                       
                        <span class="date">step3</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading">Machine learning</h3>
                        <p>Supervised learning </p>
                        <a href="#">Click Here ></a>
                        <p> UnSupervised learning </p>
                        <a href="#">Click Here ></a>
                        <span class="date">step4</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading">Deep learning</h3>
                        <p></p>
                        <a href="#">Click Here ></a>
                        <span class="date">step5</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading">Python</h3>
                        <p>Sckit-learn </p>
                        <a href="#">Click Here ></a>
                        <p>Keros </p>
                        <a href="#">Click Here ></a>
                        <p>Tensorflow</p>
                        <a href="#">Click Here ></a>
                        <span class="date">step6</span>
                        <span class="circle"></span>
                    </li>
                    <li>
                        <h3 class="heading">Prescriptive Analytics</h3>
                        <p>Simulation </p>
                        <a href="#">Click Here ></a>
                        <p>optimization</p>
                        <a href="#">Click Here ></a>
                        <span class="date">step7</span>
                        <span class="circle"></span>
                    </li>
                   
                
                </ul>
               
            </div>
            
            <h3 class="head">Advanced level</h3>
            <div class="advroad">
                <h3 class="head2">Keep learning </h3>
                <p class="ph2"> After You have finished your journey in learning the basics , here is the roadmap for advanced stage ,</p>
                <a   href="#">
                Click here ></a>
                <p class="ph2">some Articles help you to know more about interview's questions </p>
                <a   href="#">
                Click here ></a>

            </div>
        </div>
        
    </body>
</html>