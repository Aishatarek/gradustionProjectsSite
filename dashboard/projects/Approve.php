<?php
include('../functions.php');
$item_id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $approved = "'" . $_POST['approved'] . "'";
        $Projects->Approve($item_id, $approved);
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
                                <div class="theform">
                                    <?php
                                    foreach ($Projects->getData() as $Project) :
                                        if ($Project['id'] == $item_id) :
                                    ?>
                                            <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                                                <p>Approvel</p>
                                                <select name="approved" id="" class="form-control">
                                                    <option value="1"  >Approve</option>
                                                    <option value="2" >Refuse</option>

                                                </select>
                                                <br>
                                                <button name="submit" class="addtotable">Submit</button>
                                            </form>
                                    <?php
                                        endif;
                                    endforeach;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<?php
include("../footer.php");
?>