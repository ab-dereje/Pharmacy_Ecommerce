<?php

require_once "config.php";


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
if($pass1==$pass2){
$sql="INSERT INTO user (fname,lname,email,pass) values ('$fname','$lname','$email','$pass1');";

mysqli_query($con,$sql);
header("Location:../view/index.php");
}

header("location: ./create.php?signup=failed");

