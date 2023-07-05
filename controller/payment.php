<?php
    session_start();
    $email =$_SESSION['user']['email'];

    $conn = require_once("../model/database.php");
    $sql = "select * from Shopping;";
    $result = mysqli_query($conn,$sql);
    $user = $result->fetch_assoc();
    $name=$user['med_name'];
    $id = $user['med_id'];
    $price = $user['price'];
    $time = date("1 js \of F Y h:i:s A");

    while($user){
        $sql1 = "Insert into paymentHistory ('med_id','med_name','email','time','price') values ('$id','$name','$email','$time','$price');";
        $result1 = mysqli_query($conn,$sql1);
    }
?>