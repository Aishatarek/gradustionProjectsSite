<?php
ob_start();
$item_id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;

            background-color: #f5f5f5;
        }

        .card {
            width: 60%;
            border: 1px solid rgb(223, 172, 172);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: #fff;
            text-align: center;
            margin-top: 140px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
        }



        .card-body {
            padding: 20px;
            color: #333;
        }

        .card-label {
            display: block;
            font-size: 0.9em;
            color: rgb(223, 172, 172);
            margin-bottom: 5px;
            margin-top: 30px;
            margin-left: 90px;
            text-align: left;

        }

        .card-title {
            margin-bottom: 50px;
            color: #000;
        }

        .bxs-graduation.f {
            margin-top: 40px;
            font-size: 100px;
            color: rgb(223, 172, 172);
        }

        .card-link {
            display: inline-block;
            text-decoration: none;
            background-color: #fff;
            color: #000;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .card-link:hover {
            background-color: #e7e7e7;
        }
        @media screen and (max-width: 800px) {
            .card{
                width: 98%;
            }
        }
    </style>
</head>

<body>
    <?php
    include("./sideNav.php")
    ?>
    <?php
    foreach ($Projects->getDataa() as $projectst) :
        if ($projectst['id'] == $item_id) :
    ?>
            <div class="card">
                <i class='bx bxs-graduation f'></i>
                <div class="card-body">
                    <span class="card-label">Project Name</span>
                    <h3 class="card-title"><?php echo $projectst["name"] ?></h3>
                    <span class="card-label">Supervisor</span>
                    <h3 class="card-title"><?php echo $projectst["supervisor_name"] ?></h3>
                    <span class="card-label">Field</span>
                    <h3 class="card-title"><?php echo $projectst["field"] ?></h3>
                    <span class="card-label">College</span>
                    <h3 class="card-title"><?php echo $projectst["college"] ?></h3>
                    <span class="card-label">GPA</span>
                    <h3 class="card-title"><?php echo $projectst["gpa"] ?></h3>
                    <span class="card-label">Team Name </span>
                    <h3 class="card-title"><?php echo $projectst["team_name"] ?></h3>
                    <span class="card-label">Github Link</span>
                    <a href="<?php echo $projectst["github_link"] ?>" target="_blank">
                        <h3 class="card-title">Click Here</h3>
                    </a>
                    <span class="card-label">Report</span>
                    <a href="uploads/projects/<?php echo $projectst["report"] ?>" target="_blank">
                        <h3 class="card-title">Click Here</h3>
                    </a>
                    <span class="card-label">Important Topics</span>
                    <h3 class="card-title"><?php echo $projectst["important_topics"] ?></h3>
                </div>
            </div>
    <?php
        endif;
    endforeach;
    ?>

</body>

</html>