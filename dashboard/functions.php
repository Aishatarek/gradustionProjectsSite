<?php
require('connection.php');
require('users/users.php');
require('admins/admins.php');
require('projects/projects.php');


if (isset($_COOKIE['admin_id']) ) {
    $_SESSION['admin_id'] = $_COOKIE['admin_id'];
}








$db=new DBController();
$Users=new Users($db);
$Admins=new Admins($db);
$Projects=new Projects($db);






// $Students=new Students($db);

