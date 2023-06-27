<?php
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn =require_once('../model/database.php');
        $med_id = $_POST['med_id'];
        $sql = "DELETE FROM Shopping WHERE med_id = '$med_id'";
        $result= mysqli_query($conn, $sql);
        var_dump($med_id);
        header("Location: ../view/shopping.php");
    };

?>