<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project</title>
    <link rel="stylesheet" href="css/popup.css">
</head>
<body>
<?php
    include("./sideNav.php")
    ?>
    <div class="container">
        <button type="button" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup">
            <!-- <img src="Images/5610944.png"> -->
            <h2>Thank You!</h2>
            <p>The upload was completed successfully. it will be uploaded within 24 hours after verifying the data. Thanks!</p>
          <a href="./Gprojects.php">  <button type="button" >OK</button></a>
        </div>
    </div>

    <script>
         let popup=document.getElementById("popup");
    function openPopup(){
        wrapper.classList.add("open-popup");
    }

        function closePopup()
        {
          popup.classlist.remove("open-popup");
        }
    </script>
</body>
</html>