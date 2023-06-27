<?php
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn =require_once('../model/database.php');
        $med_id = $_POST['med_id'];
        $sql = "SELECT * FROM Product WHERE med_id = '$med_id'";
        $result= mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $med_name = $user['med_name'];
        $prescription=$user['prescription'];
        $price=$user['price'];
        var_dump($price);
        
        //to escape unwanted variables
        $med_id = mysqli_real_escape_string($conn, $_POST['med_id']);
        $med_name = mysqli_real_escape_string($conn, $med_name);
        $prescription = mysqli_real_escape_string($conn, $prescription);
        $price = mysqli_real_escape_string($conn, $price);

        $sql1 = "INSERT INTO Shopping (med_id, med_name, prescription, price) VALUES ('$med_id', '$med_name', '$prescription', '$price')";

        
        //$sql1 = "INSERT INTO Shopping (med_id, med_name,prescription,price) VALUES ('$med_id', '$med_name', '$prescription','$price')"; 
        $result1 = mysqli_query($conn, $sql1);
        if (!$result1) {
            echo mysqli_error($conn);
        }
        header("Location: ../view/homePage.view.php");
    }

?>