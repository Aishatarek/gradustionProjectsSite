<?php
include('../functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = "'" . $_POST['name'] . "'";
        $user_id = 0;
        $college = "'" . $_POST['college'] . "'";
        $team_name = "'" . $_POST['team_name'] . "'";
        $supervisor_name = "'" . $_POST['supervisor_name'] . "'";
        $field = "'" . $_POST['field'] . "'";
        $gpa = "'" . $_POST['gpa'] . "'";
        $github_link = "'" . $_POST['github_link'] . "'";
        $important_topics = "'" . $_POST['important_topics'] . "'";
        $approved = 0;
        $report =  $_FILES['report'];
        $Projects->addProjects($name, $user_id, $college, $team_name, $field, $supervisor_name, $gpa, $report, $github_link, $important_topics, $approved);
    }
}
include("../header.php");
?>
<div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>


            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include("../theSideNav.php"); ?>
        <div class="main-panel maindashboard">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">

                            <div class="card-body">
                          
                                <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                                    <p style="font-size: 2rem; font-weight: 800;">Add Project</p>
                                    <div class="input-group">
                                        <input type="text" placeholder="name" name="name" required class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="team name" name="team_name" required class="form-control">
                                    </div>
                                    
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="college" name="college" required class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="supervisor name" name="supervisor_name" required class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="field" name="field" required class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="gpa" name="gpa" required class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input type="text" placeholder="github_link" name="github_link" required class="form-control">
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <textarea class="form-control" name="important_topics" placeholder="important topics " cols="30" rows="10"></textarea>
                                    </div>
                                    <br>

                                    <label for="">Add Report</label>
                                    <div class="input-group">
                                        <input type="file" name="report" required class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <button name="submit" class="btn addtotable">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../footer.php');
?>