<?php
$host= "127.0.0.1";
$dbname = "Pharmacy";
$password = "";
$username = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);



return $conn;
?>