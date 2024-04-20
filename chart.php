<?php
ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php
    include("./sideNav.php")
    ?>
    <div style="width: 80%; margin:80px auto;">
        <canvas id="fieldChart"></canvas>
    </div>



    <?php
    function getProjectCountsByField($projects)
    {
        $fieldCounts = [];
        foreach ($projects as $project) {
            $normalizedField = strtolower($project['field']);
            if (!isset($fieldCounts[$normalizedField])) {
                $fieldCounts[$normalizedField] = 0;
            }
            $fieldCounts[$normalizedField]++;
        }
        return $fieldCounts;
    }

    $projects = $Projects->getDataa();
    $projectCountsByField = getProjectCountsByField($projects);
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('fieldChart').getContext('2d');
            const fieldData = <?php echo json_encode($projectCountsByField); ?>;
            const fields = Object.keys(fieldData);
            const counts = Object.values(fieldData);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: fields,
                    datasets: [{
                        label: 'Number of Projects',
                        data: counts,
                        backgroundColor: 'rgba(223, 172, 172 , 0.2)',
                        borderColor: 'rosybrown',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>