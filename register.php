<?php
include('dashboard/functions.php');
ob_start();
if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $f_name = "'" . $_POST['f_name'] . "'";
    $s_name = "'" . $_POST['s_name'] . "'";

    $email = "'" . $_POST['email'] . "'";
    $phone = "'" . $_POST['phone'] . "'";
    $address = "'" . $_POST['address'] . "'";
    $password = "'" . md5($_POST['password']) . "'";
    $cpassword = "'" . md5($_POST['cpassword']) . "'";
    $code = "'" . substr(md5(uniqid(mt_rand(), true)), 0, 8) . "'";
    $verified = "'0'";

    if ($password == $cpassword) {
      $Users->Register($f_name, $s_name,  $email, $password, $address, $phone, $code, $verified);
    } else {
      echo "<script>alert('Password Not Matched.')</script>";
    }
  }
}
// include("./header.php");

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
          <img src="css/graduation 1.avif" alt="image" >
        </div>
        <form method="POST">
          <h3>Create Account</h3>
          <div class="form-wrapper">
            <input type="text" name="f_name" placeholder="First Name" class="form-control">

          </div>

          <div class="form-wrapper">
            <input type="text" name="s_name" placeholder="Last Name" class="form-control">

          </div>

          <div class="form-wrapper">
            <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please provide only a Best Startup Ever corporate email address" placeholder="Email Address" class="form-control">

          </div>

          <div class="form-wrapper">
            <input type="text" name="address" placeholder="Address" class="form-control">

          </div>
          <div class="form-wrapper">
            <input type="tel" name="phone" placeholder="Phone" class="form-control">

          </div>


          <div class="form-wrapper">
            <input type="password" name="password" placeholder="Password" class="form-control">

          </div>
          <div class="form-wrapper">
            <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">

          </div>
          <button type="submit" class="btn" name="submit">Register

          </button>
          <p class="createP">Already have an account ? <a href="login.php">Sign In</a></p>
          <p class="createP">Need to verify your account? <a href="verify.php">Verify</a></p>
       
        </form>
      </div>
    </div>
</body>

</html>
