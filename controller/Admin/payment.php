<?php

require_once "config.php";


$time=date("l jS \of F Y h:i:s A");
$medid=$_post['medid'];
$email=$_POST['email'];
$medname=$_POST['medname'];

$sq="INSERT INTO PAYMENT (email,fname,medName,time) VALUES ($email,$fname,$medname,$time)";
mysqli_query($con,$sq);


$sql="delete from medicine where medId='$medid';";
mysqli_query($con,$sql); 
