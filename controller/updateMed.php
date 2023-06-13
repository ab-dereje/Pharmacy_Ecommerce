<?php
require_once("../model/database.php");

$id=$_POST["id"];
$name =$_POST["name"];
$nam = $_POST['nam'];
$sql="UPDATE Product 
SET med_name='$nam'
WHERE med_id = '$id';";

mysqli_query($conn,$sql);
header("location: ../view/homePage.view.php");