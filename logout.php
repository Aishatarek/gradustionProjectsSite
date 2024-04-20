<?php 
session_start();
session_destroy();
if (isset($_COOKIE['id'])&&isset($_COOKIE['name'])) {
    unset($_COOKIE['id']);
    unset($_COOKIE['name']);

    setcookie('id', '', time() - 3600, '/'); // empty value and old timestamp
    setcookie('name', '', time() - 3600, '/'); // empty value and old timestamp

}
header("Location: index.php");

?>