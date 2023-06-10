<?php


require_once("../view/login.view.php");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    

    $conn =require_once('../model/database.php');
    $sql = sprintf("select * from User
                where email = '%s'",
                $conn->real_escape_string($_POST["email"]));
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    // $user[]
    
    if($user){
        if (password_verify($_POST["password"], $user["password"])){
            session_start();
            $_SESSION["user_email"]= ["email"=>$user['email']];
            // var_dump($_SESSION["user_email"]['email']);
            header("Location: ../view/homePage.view.php");
            exit;
        }
    }else{
        echo "try again";
    }
}
