<?php
ob_start();
include("./dashboard/functions.php");
  if(isset($_SESSION['project_id'])){
    if($_SESSION['project_id'] > 0){
      header("Location: index.php");
     }
  }
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {
    $name = "'" . $_POST['name'] . "'";
    $user_id = $_SESSION['user_id'];
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
?>



<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="css/form.css">

  <title>Data Entry</title>

</head>

<body>
  
  <div class="wrapper" >
    <section class="hero is-primary is-bold" >
      <div class="hero-body">
        <div class="container1">
          <h1 class="title" id="header">Data Entry Form</h1>
        </div>
      </div>
    </section>
    <form id="form" class="container m-4 pl-4" method="POST" enctype="multipart/form-data" >
      <div class="field">
        <label class="label">Describe Your Project</label>
        <div class="control">
          <input class="input" type="text" placeholder="Your Project " name="name" />
        </div>
      </div>

      <div class="field">
        <label class="label">Your College</label>
        <div class="control">
          <label class="radio">
            <input type="radio" name="college" value="Commerce" /> Commerce
          </label>
          <label class="radio">
            <input type="radio" name="college" value="Engineering" /> Engineering
          </label>
          <label class="radio">
            <input type="radio" name="college" value="Science" /> Science
          </label>
          <label class="radio">
            <input type="radio" name="college" value="Agriculture" /> Agriculture
          </label>
        </div>
      </div>

      <!-- <div class="field">
        <label class="label">Last Name</label>
        <div class="control">
          <input
            class="input"
            type="text"
            placeholder="Your Last Name"
            name="Last Name"
          />
        </div>
      </div> -->

      <div class="field">
        <label class="label">Team Members</label>
        <div class="control">
          <input class="input" type="text" placeholder=" Team Members Name" name="team_name" />
        </div>
      </div>

      <div class="field">
        <label class="label">Field</label>
        <div class="control">
          <input class="input" type="text" placeholder=" field" name="field" />
        </div>
      </div>

      <div class="field">
        <label class="label">Supervisor Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="Your Supervisor Name" name="supervisor_name" />
        </div>
      </div>

      <div class="field">
        <label class="label">GPA of your project</label>
        <div class="control">
          <input class="input" type="number" placeholder="GPA " name="gpa" />
        </div>
      </div>


      <div class="field">
        Upload The Report:
        <input type="file" name="report" id="fileToUpload" class="btn1">
        <br>
      </div>
      <!-- <class class="field">
     Upload Powerpoint: 
     <input type="file" name="fileToUploadpowerpoint" id="fileToUpload" class="btn1">
     <br> <br>
      </div> -->

      <div class="field">
        <label class="label">Link Github of your Website or Application (If it founded)</label>
        <div class="control">
          <input class="input" type="text" placeholder="URL " name="github_link" />
        </div>
      </div>

      <div class="field">
        <label class="label">What is the important topics you use in your project and help you?</label>
        <div class="control">
          <textarea rows="10" cols="20" class="textarea" placeholder=" Important Topics" name="important_topics"></textarea>
        </div>
      </div>




      <div class="field is-grouped">
        <div class="control">

          <a href="popup 1.html">
            <button name="submit" class="button is-primary" type="submit" id="submit-button">
              Submit
            </button></a>

        </div>
        <span id="msg"></span>

      </div>
    </form>
  </div>


  <div id="message" style="
        display: none;
        margin: 20px;
        font-weight: bold;
        color: green;
        padding: 8px;
        background-color: beige;
        border-radius: 4px;
        border-color: aquamarine;
      "></div>


  <!-- <script src="js.js"></script> -->

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxg4oAYwQlC-2JP5ng7DZTue--v_4tcya-zWSiJ0jkK0fdMdmApmMPEc5bdduqIU-_l4Q/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById('msg')

    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, {
          method: 'POST',
          body: new FormData(form)
        })
        .then(response => {
          msg.innerHTML = "Thank you for your message!"
          setTimeout(function() {
            msg.innerHTML = ""

          }, 5000);
          form.reset()


        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>




  <!-- <script>
      document.getElementById("form").addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission
        document.getElementById("message").textContent = "Submitting..";
        document.getElementById("message").style.display = "block";
        document.getElementById("submit-button").disabled = true;

        // Collect the form data
        var formData = new FormData(this);
        var keyValuePairs = [];
        for (var pair of formData.entries()) {
          keyValuePairs.push(pair[0] + "=" + pair[1]);
        }

        var formDataString = keyValuePairs.join("&");

        // Send a POST request to your Google Apps Script
        fetch(
          "https://docs.google.com/spreadsheets/d/1seb5aowynf7bHUgwKGcc211NkoGGzt-WCyGVWaxZYnY/edit?usp=sharin",
          {
            redirect: "follow",
            method: "POST",
            body: formDataString,
            headers: {
              "Content-Type": "text/plain;charset=utf-8",
            },
          }
        )
          .then(function (response) {
            // Check if the request was successful
            if (response) {
              return response; // Assuming your script returns JSON response
            } else {
              throw new Error("Failed to submit the form.");
            }
          })
          .then(function (data) {
            // Display a success message
            document.getElementById("message").textContent =
              "Data submitted successfully!";
            document.getElementById("message").style.display = "block";
            document.getElementById("message").style.backgroundColor = "green";
            document.getElementById("message").style.color = "beige";
            document.getElementById("submit-button").disabled = false;
            document.getElementById("form").reset();

            setTimeout(function () {
              document.getElementById("message").textContent = "";
              document.getElementById("message").style.display = "none";
            }, 2600);
          })
          .catch(function (error) {
            // Handle errors, you can display an error message here
            console.error(error);
            document.getElementById("message").textContent =
              "An error occurred while submitting the form.";
            document.getElementById("message").style.display = "block";
          });
      });
    </script>  -->
</body>

</html>