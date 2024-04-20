<?php
include('../functions.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem_projects'])) {
        $Projects->deleteProjects($_POST['item_id']);
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
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <a href="addProject.php" class="addtotable"> Add Project</a>
                                </div>
                                <table class=" table ">
                                    <tr>
                                        <th> name</th>
                                        <th> State</th>
                                        <th>-</th>

                                        <th> college</th>
                                        <th> team name</th>
                                        <th> field</th>
                                        <th> supervisor name</th>
                                        <th> gpa</th>
                                        <th> report</th>
                                        <th> github link</th>

                                        <th> important topics</th>


                                        <th>-</th>
                                    </tr>
                                    <?php
                                    foreach ($Projects->getData() as $projectst) :
                                    ?>
                                        <tr>

                                            <td>
                                                <p><?php echo $projectst["name"] ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $projectst["approved"] == 1 ? 'approved' : ($projectst["approved"] == 2 ? 'refused' : 'Pending'); ?></p>

                                            </td>
                                            <td>
                                                <p><?php
                                                    if ($projectst["approved"] == 1) {
                                                    ?>
                                                        <a href="#">
                                                            <button class="btn btn-outline-success">Approved</button>
                                                        </a>
                                                    <?php
                                                    } elseif ($projectst["approved"] == 2) {
                                                    ?>

                                                        <a href="#">
                                                            <button class="btn btn-outline-danger">Refused</button>
                                                        </a>
                                                    <?php
                                                    } elseif ($projectst["approved"] == 0) {
                                                    ?>
                                                               <a href="<?php printf('%s?id=%s', 'Approve.php',  $projectst['id']); ?>">
                                                    <button class="btn btn-outline-info">Approve/Refuse</button>
                                                </a>
                                                    <?php
                                                    }

                                                    ?>

                                            </td>
                                          

                                            <td>
                                                <p><?php echo $projectst["college"] ?></p>
                                            </td>

                                            <td>
                                                <p><?php echo $projectst["team_name"] ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $projectst["field"] ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $projectst["supervisor_name"] ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $projectst["gpa"] ?></p>
                                            </td>
                                            <td>
                                                <a href="../../uploads/projects/<?php echo $projectst["report"];  ?>" target="_blank" > Report</a>
                                            </td>

                                            <td>
                                                <a href="<?php echo $projectst["github_link"];  ?>" target="_blank">github link</a>
                                            </td>
                                            <td>
                                                <p><?php echo $projectst["important_topics"] ?></p>
                                            </td>

                                            <td>

                                                <form method="post">

                                                    <input type="hidden" value="<?php echo $projectst["id"] ?>" name="item_id">
                                                    <button name="deleteItem_projects" class="btn btn-outline-danger" type="submit"><i class="fas fa-trash"></i></button>

                                                </form>



                                            </td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->
</div>
<?php
include("../footer.php");
?>