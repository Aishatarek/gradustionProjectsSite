<?php
ob_start();
include('dashboard/functions.php');
if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $email = "'" . $_POST['email'] . "'";
    $password = "'" . md5($_POST['password']) . "'";
    $Users->signIn($email, $password);
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
          <h3>Welcome Back</h3>

          <div class="form-wrapper">
            <input type="text" name="email" placeholder="Email Address" class="form-control">

          </div>

          <div class="form-wrapper">
            <input type="password" name="password" placeholder="Password" class="form-control">

          </div>

          <button type="submit" class="btn" name="submit">Sign In

          </button>
          <p class="createP">Don't have an account ? <a href="register.php">Create Now</a></p>
        </form>
      </div>
    </div>
</body>

</html>