<?php
ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Previous Projects</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="css/G projects.css">
</head>

<body>
  <?php
  include("./sideNav.php")
  ?>
  <form id="searchForm">
    <div>
      <input type="text" placeholder=" Project Name" name="name" class="input">
      <input type="text" placeholder=" Supervisor Name" name="supervisor_name" class="input">
      <input type="text" placeholder=" Field" name="field" class="input">
      <input type="text" placeholder=" GPA" name="gpa" class="input">
    </div>
    <button type="button" class="btn3" onclick="searchProjects()">Search</button>

  </form>
  <a href="chart.php" class="summaryBtn">
    <button>Summary</button>
  </a>
  <table>
    <thead>
      <tr>
        <th>Project Name</th>
        <th>Supervisor </th>
        <th>Field</th>
        <th>GPA</th>
      </tr>
    </thead>
    <tbody id="projectsTable">
      <?php
      foreach ($Projects->getDataa() as $projectst) :
      ?>
        <tr>

          <td><a href="detail.php?id=<?php echo $projectst["id"] ?>"><?php echo $projectst["name"] ?></a></td>
          <td> <?php echo $projectst["supervisor_name"] ?></td>
          <td><?php echo $projectst["field"] ?></td>
          <td><?php echo $projectst["gpa"] ?></td>
        </tr>
      <?php
      endforeach;
      ?>

    </tbody>


  </table>
  <script>
    function searchProjects() {
      const formData = new FormData(document.getElementById('searchForm'));
      const projects = <?php echo json_encode($Projects->getDataa()); ?>; // Assuming $Projects->getData() returns project data
      const filteredProjects = projects.filter(project => {
        const projectName = formData.get('name');
        const supervisorName = formData.get('supervisor_name');
        const field = formData.get('field');
        const gpa = parseFloat(formData.get('gpa'));

        return (!projectName || project.name.toLowerCase().includes(projectName.toLowerCase())) &&
          (!supervisorName || project.supervisor_name.toLowerCase().includes(supervisorName.toLowerCase())) &&
          (!field || project.field.toLowerCase().includes(field.toLowerCase())) &&
          (isNaN(gpa) || parseFloat(project.gpa) >= gpa);
      });

      updateProjectsTable(filteredProjects);
    }

    function updateProjectsTable(projects) {
      const tableBody = document.getElementById('projectsTable');
      tableBody.innerHTML = ''; // Clear previous data

      projects.forEach(project => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td><a href="detail.php?id=${project.id}">${project.name}</a></td>
          <td>${project.supervisor_name}</td>
          <td>${project.field}</td>
          <td>${project.gpa}</td>
        `;
        tableBody.appendChild(row);
      });
    }
  </script>
</body>