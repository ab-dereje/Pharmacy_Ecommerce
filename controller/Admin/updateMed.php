<?php
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $conn = require_once('../../model/database.php');
        $sql = "UPDATE Product SET price = '{$price}', description ='{$description}' WHERE med_id = '{$product_id}'";
        $result= mysqli_query($conn, $sql);
        header("Location: ../../view/Admin/medicine_list.php");
    };
    
?>