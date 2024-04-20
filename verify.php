


<?php
ob_start();
include('dashboard/functions.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $email = "'" . $_POST['email'] . "'";
    $code = "'" . $_POST['code'] . "'";
    $Users->Verify($email, $code);
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>How to make registration form using HTML and CSS </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div>
    <div class="wrapper" style="background-image: url('');">
      <div class="inner">
        <div class="image-holder">
          <img src="css/graduation 1.avif" alt="image">
        </div>
        <form method="POST">
          <h5>There is A code will be Sent to Your Email within 24 hours after registeration</h5>

          <div class="form-wrapper">
            <input type="text" name="email" placeholder="Email Address" class="form-control">

          </div>

          <div class="form-wrapper">
            <input type="code" name="code" placeholder="code" class="form-control">

          </div>

          <button type="submit" class="btn" name="submit">
            Verify

          </button>
          <p class="createP"> have a Verified account ? <a href="login.php">Sign In</a></p>
        </form>
      </div>
    </div>
</body>

</html>