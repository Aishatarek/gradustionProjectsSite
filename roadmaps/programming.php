<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../css/marketing.css">
    <meta charset="UTF-8" />

    <title>campanies page</title>
    <meta name="description" content="This page contain collection of campanies in business field" />

</head>

<body>
    <?php
    include("./sideNav.php")
    ?>

    <!--programming-->
    <!-- <div class="head1">
        <h1> Programming Companies</h1>
    </div> -->

    <!-- <div class="front">
        <p style="color: rosybrown; font-weight: 600;">If you want to become a back-end developer,this is what the labor
            market requires:</p>
        <ul>
            <li>Hands-on experience working with technology like queueing
                systems(Kafka,RabbitMQ,MSMQ),Spark,Hadoop,NoSQL(Cassandra,MongoDB),Play framework,Akka libray.</li>
            <li>Experience with Scrum/Agile development methodologies.</li>
            <li>Experience building large-scale distributed products.</li>
            <li>5+ years of deep MySQL experience.</li>
            <li>Good understanding of Ruby.</li>
            <li>1+ year of node.js & Express or PHP Laravel.</li>
            <li>Good knowledge of Git.</li> -->
    <!-- </ul>
        <p>These are examples of companies that require these skills,In addition to other skills but these skills are basic:</p>
            <li>
        <a href="https://www.linkedin.com/jobs/view/3714143660">Agoda</a>
        <li>
        <a href="https://www.linkedin.com/jobs/view/3798399213">Turing</a>
        </li>
           </li>
           <li>
            <a href="https://www.linkedin.com/jobs/view/3837994869">Carwah</a>
           </li>
           <li>
            <a href="https://www.linkedin.com/jobs/view/3825438996">AMG</a>
           </li>
           <li><a href="https://www.linkedin.com/jobs/view/3785065162">Lokalise</a></li>
        </ul> -->
    <!-- </ul>
    </div> -->
    <h2 class="main">These are the most in-demand fields in the labor market in the field of programming:</h2>
    <div class="fields">
        <div class="field">
            <h2>Front-End</h2>
            <span class="text">
                <h3>*What does front end Mean?</h3><br>
                Front-end development is the process of building components that interact with users. Examples are the
                user interface, buttons, user-entered data, websites, and user experience (UX) features.

                <span class="dots">....</span> <span class="moretext"><br><br>

                    <h3>*Minimum requirements to be Front End?</h3>
                    <br>
                    <ol>
                        <li>Html</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ol>
                    some frameworks such as:
                    <ol>
                        <li>jQuery</li>
                        <li>React JS</li>
                        <li>Angular</li>
                        <li>Vue JS</li>
                    </ol> <br>
                    <h3>*roadmap link for this track:</h3>
                    <br>
                    <a href="front-end.html" class="map">front-end roadmap</a>
                    <br>
                </span>
            </span>
            <br>
            <button class="readmore_btn">Read More</button> <br>
            <!-- <script src="main.js"></script> -->
        </div>






        <div class="field">
            <h2>Back-End</h2>
            <span class="text1">
                <h3>*What does Back-end Mean?</h3><br>

                the part of a computer system, piece of software, etc., where data is stored or processed rather than
                the parts that are seen and directly used by the user
                <span class="dots1">....</span> <span class="moretext1"><br><br>

                    <h3>*Minimum requirements to be Back-End?</h3>
                    <br>
                    <ol>

                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>java</li>
                        <li>Ruby</li>
                        <li>PHP</li>

                    </ol>


                    some frameworks such as:
                    <ol>
                        <li>Node JS</li>
                        <li>Express js</li>
                        <li>Laravel</li>
                    </ol> <br>

                    database such as:
                    <ol>
                        <li>My SQL</li>
                        <li>Oracle</li>
                        <li>MongoDB</li>
                        <li>SQL Server</li>
                    </ol> <br>


                    severs such as:
                    <ol>
                        <li>Apache</li>
                        <li>NGINX</li>
                        <li>Lighttpd</li>
                    </ol> <br>

                    <h3>*roadmap link for this track:</h3>
                    <br>
                    <a href="backend.html" class="map1">Back-end roadmap</a>
                    <br>
                </span>
            </span>
            <br>
            <button id="readmore_btn1">Read More</button> <br>
            <script src="../main.js"></script>
        </div>





        <div class="field">
            <h2>Full Stack</h2>
            <span class="text">
                <h3>*What does Full Stack Mean?</h3><br>

                Full stack development refers to the end-to-end application software development, including the front
                end and back end.
                <span id="dots">....</span> <span id="moretext"><br><br>

                    <h3>*Minimum requirements to be Full Stack ?</h3>
                    <br>
                    <ol>
                        <li>Html</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>java</li>
                        <li>Ruby</li>
                        <li>PHP</li>

                    </ol>

                    database and web storage such as:
                    <ol>
                        <li>My SQL</li>
                        <li>Oracle</li>
                        <li>MongoDB</li>
                        <li>SQL Server</li>
                    </ol> <br>


                    severs such as:
                    <ol>
                        <li>Apache</li>
                        <li>NGINX</li>
                        <li>Lighttpd</li>
                    </ol> <br>
                    some frameworks such as:
                    <ol>
                        <li>React JS</li>
                        <li>Node JS</li>
                        <li>Express js</li>
                        <li>Laravel</li>
                    </ol> <br>
                    Git & Github
                    <BR></BR>
                    HTTP & REST
                    <BR></BR>
                    <h3>*roadmap link for this track:</h3>
                    <br>
                    <a href="fullstack.html" class="map">Fullstack roadmap</a>
                    <br>
                </span>
            </span>
            <br>
            <button id="readmore_btn" onclick="myfunction()">Read More</button> <br>
            <script src="main.js"></script>
        </div>




        <div class="field">
            <h2>Mobile Apps</h2>
            <span class="text">
                <h3>*What does Mobile Apps Mean?</h3><br>

                Mobile application development is the process of creating software applications that run on a mobile
                device, and a typical mobile application utilizes a network connection to work with remote computing
                resources.
                <span id="dots2">....</span> <span id="moretext2"><br><br>

                    <h3>*Minimum requirements to be Mobile App devloper ?</h3>
                    <br>
                    <ol>
                        <li>UI-UX Design skills</li>
                        <li>Dart</li>
                        <li>OOP</li>
                        <li>Flutter</li>
                        <li>Widgets</li>
                        <li>Api</li>
                        <li>Back-end</li>
                        <li>swift or kotlin</li>

                    </ol>

                    </ol> <br>
                    <h3>*roadmap link for this track:</h3>
                    <br>
                    <a href="flutter.html" class="map">flutter roadmap</a>
                    <br>
                </span>
            </span>
            <br>
            <button id="readmore_btn2" onclick="myfunction2()">Read More</button> <br>
            <script src="main.js"></script>
        </div>




        <div class="field">
            <h2>Desktop Application</h2>
            <span class="text">
                <h3>*What does Desktop Application Mean?</h3><br>

                Creating an application locally for computer devices (operating systems), Desktop app developers build these applications that are used specifically on
                laptops and desktops.
                <span id="dots3">....</span> <span id="moretext3"><br><br>

                    <h3>*Minimum requirements to be Desktop App devloper ?</h3>

                    <br>
                    <ol>
                        <li>c#</li>
                        <li>Javascript</li>
                        <li>Node JS</li>
                        <li>.Net</li>
                        <li>OOP</li>
                        <li>Paython</li>

                    </ol>
                    and some frameworks such as:
                    <ol>

                        <li>WPF</li>
                        <li>Electron JS</li>
                        <li>UWP</li>
                        <LI>Cocoa</LI>
                    </ol> <br>
                    <h3>*roadmap link for this track:</h3>
                    <br>

                    <a href="flutter.html" class="map"> Desktop Application roadmap</a>
                    <br>
                </span>
            </span>
            <br>
            <button id="readmore_btn3" onclick="myfunction3()">Read More</button> <br>
            <script src="main.js"></script>
        </div>

    </div>


    <h2 class="main">These are examples of companies that require these jobs with these skills,In addition to other skills but these skills are basic</h2>






    <div class="container">

        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/logo.png" style="height: 200px; width: 250px;">

                    </a>
                </div>
                <h1> Creative Minds</h1>
                <div class="bottom">
                    <P>Software House Specialized In Mobile Application Development And Web Technologies.</P>
                    <a href="https://www.linkedin.com/company/creativemindsforit">
                        <img src="../images/icons8-linkedin-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.instagram.com/creativemindseg">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.facebook.com/creativemindsforit/">
                        <img src="../images/icons8-facebook-48.png" style="height: 40px; width: 40px;">
                    </a>

                    <a href="https://twitter.com/creativemindsit">
                        <img src="../images/icons8-twitterx-48.png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>

        </div>
        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/LOGO-1.png" style="height: 200px; width: 250px;">

                    </a>
                </div>
                <h1>Techno Misr </h1>
                <div class="bottom">
                    <P>Techno Misr is a software company founded in November 2014,
                        an innovation for creativity in the field of web and
                        information technology. The company specializes in cloud
                        electronics and smart innovations, website design, online
                        store design, and mobile phone applications</P>
                    <a href="https://www.linkedin.com/company/technomasr/">
                        <img src="../images/icons8-linkedin-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.instagram.com/technomasr/">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.facebook.com/technomasrco/">
                        <img src="../images/icons8-facebook-48.png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>

        </div>
        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/magdsoft_logo.jfif" style=" height: 200px; width: 250px;">

                    </a>
                </div>
                <h1> MagdSoft</h1>
                <div class="bottom">
                    <p>MagdSoft is an Egyptian company was founded in 2006 as one of
                        the website design Companies in Egypt. MagdSoft started its
                        steps toward the global market offers a best quality in Design
                        and Software development to a large variety of clients in the
                        Arab countries and gulf countries.</p>
                    <a href="https://www.linkedin.com/company/magdsoft">
                        <img src="../images/icons8-linkedin-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://wa.me/966537155352">
                        <img src="../images/icons8-whatsapp-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.instagram.com/magdsoft/">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://fb.com/magdsoft.co/">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://twitter.com/magdsoft">
                        <img src="../images/icons8-twitterx-48.png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>

        </div>
        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/331475256_582673490435428_8782800852190228289_n.jpg" style="height: 150px; width: 200px;">

                    </a>
                </div>
                <h1> 360 eye solutions</h1>
                <div class="bottom">
                    <P>360Eye Solutions is one of the famous companies in designing and
                        programming websites. It has been operating since 2012 and
                        provide modern services. It is a leading company licensed
                        by the Ministry of Trade and Industry in the Arab Republic of Egypt.</P>

                    <a href="https://wa.me/201150764294">
                        <img src="../images/icons8-whatsapp-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.facebook.com/360eyesolutions">
                        <img src="../images/icons8-facebook-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.instagram.com/360eyesolutions/">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/web-pioneer.png" style="height: 150px; width: 200px;">

                    </a>
                </div>
                <h1>Web Pioneer </h1>
                <div class="bottom">
                    <P>Web Pioneer is one of the best companies that provides technology
                        solutions in many electronic fields, which include: designing
                        and programming mobile applications for all operating systems,
                        designing websites and preparing them for search engines (SEO).</P>

                    <a href="https://api.whatsapp.com/send?phone=+201027770444&text=%D8%B7%D9%84%D8%A8%20%D8%AE%D8%AF%D9%85%D8%A9">
                        <img src="../images/icons8-whatsapp-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.facebook.com/webpioneer.company">
                        <img src="../images/icons8-facebook-48.png" style="height: 40px; width: 40px;">
                    </a>

                    <a href="https://twitter.com/WebPioneer1">
                        <img src="../images/icons8-twitterx-48.png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>

        </div>
        <div class="cmpengz">
            <div class="imgbx">
                <div class="logo">
                    <a href="#">
                        <img src="../images/428127599_367480022878471_5004674527324786246_n.jpg" style="height: 150px; width: 200px;">

                    </a>
                </div>
                <h1>Egelz </h1>
                <div class="bottom">
                    <P>Is a software company that specialized in designing websites,
                        applications and commercial design Since 2005.</P>
                    <a href="https://www.linkedin.com/in/egelz/">
                        <img src="../images/icons8-linkedin-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.instagram.com/egelz2022/">
                        <img src="../images/icons8-instagram-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.facebook.com/EgelzTech">
                        <img src="../images/icons8-facebook-48.png" style="height: 40px; width: 40px;">
                    </a>
                    <a href="https://www.youtube.com/@egelz">
                        <img src="../images/icons8-youtube-48 (1).png" style="height: 40px; width: 40px;">
                    </a>
                </div>
            </div>

        </div>

    </div>
</body>