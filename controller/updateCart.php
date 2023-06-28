<?php
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $conn = require_once('../model/database.php');
        $sql = "UPDATE Shopping SET quantity = '{$quantity}' WHERE med_id = '{$product_id}'";
        $result= mysqli_query($conn, $sql);
        // header("Location: ../view/shopping.php");
    };

?>