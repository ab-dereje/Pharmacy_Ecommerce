<?php
    require_once("../view/homePage.view.php");

    $conn =require_once('../model/database.php');
session_start();
$name = $_SESSION["user"]["name"];
$email = $_SESSION["user"]["email"];
$sql2 = "SELECT name FROM User WHERE email = '$email'";
// $result1= mysqli_query($conn, $sql2);
// $user = mysqli_fetch_assoc($result1);
// $user_name=$user["name"];

$div1="";
$div1 .= "<div class='full-name'>
<h3>$name</h3>
<h5>$email</h5>

</div>";
?>