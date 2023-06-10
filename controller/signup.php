<?php
require_once('../view/index.php');


if(empty($_POST["name"])){
    die("Name is required");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("valid email is required");
}

if(strlen($_POST["password"])<8){
    die("password must be at least 8 character");
}

if(! preg_match("/[a-z]/i", $_POST["password"])){
    die("password must contain st least one letter");
}

if(! preg_match("/[0-9]/i", $_POST["password"])){
    die("password must contain st least one number");
}

if($_POST["password"] !== $_POST["cPassword"]){
    die("password must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn =require_once('../model/database.php');


$sql = "Insert into User (name,phone,email,password) values (?,?,?,?)";

$stmt = $conn->stmt_init();

if ( ! $stmt->prepare($sql)){
    die("SQL error: " .$conn->error);
}

$stmt->bind_param("ssss",
                $_POST["name"],
                $_POST["phone"],
                $_POST["email"],
                $password_hash);

if ($stmt->execute()) {
    header("Location: ../view/homePage.view.php");
    exit;
}else{
    if ($conn->errno === 1062) {
        die("email already taken");
    }else{
        die($conn->errorr . "" .$conn->errno);
    }
}




?>