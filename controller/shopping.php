<?php
    require_once("../view/homePage.view.php");
    $med_id = $_POST['med_id'];
    if(isset($_POST["submit"])){
        $conn =require_once('../model/database.php');
        $sql = "SELECT * FROM Product WHERE med_id = '$med_id'";
        $result= mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result1);
        $med_id=$user['med_id'];
        $med_name = $user['med_name'];
        $prescription=$user['prescription'];
        $price=$user['$price'];

        $sql1 = "INSERT INTO Shopping (med_id, med_name,prescription,price) VALUES ('$med_id', '$med_name', '$prescription','$price')"; 
        $result = mysqli_query($conn, $sql1);       

    };

?>