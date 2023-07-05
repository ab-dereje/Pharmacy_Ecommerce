<?php
    session_start();
    $email =$_SESSION['user']['email'];

    $conn = require_once("../model/database.php");
    $sql = "select * from Shopping;";
    $result = mysqli_query($conn,$sql);
    
    
    $time = date("1 js \of F Y h:i:s A");

    while($user = $result->fetch_assoc()){
        $med_name=$user['med_name'];
        var_dump($name);
        $mid = $user['med_id'];
        $price1 = $user['price'];
        $id = mysqli_real_escape_string($conn, $mid);
        $name = mysqli_real_escape_string($conn, $med_name);
        $price = mysqli_real_escape_string($conn, $price1);
        $sql1 = "INSERT INTO paymentHistory (med_id, med_name, email, time, price) VALUES ('$id', '$name', '$email', '$time', '$price')";
        $result1 = mysqli_query($conn,$sql1);
    }
    $sql2 = "DELETE FROM Shopping;";
    $result2 = mysqli_query($conn,$sq2);
    header("Location:../view/homePage.view.php");
?>