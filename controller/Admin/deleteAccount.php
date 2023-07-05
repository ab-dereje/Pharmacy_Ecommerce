<?php
require_once "config.php";

session_start();
if (empty($_SESSION['user'])) {
    header('location:../../view/Admin/AdminLogin.php');
}


$id=$_POST['id'];


$sql="delete from user where id='$id';";

mysqli_query($con,$sql);
header("location: ./userAccounts.php?delete=success");