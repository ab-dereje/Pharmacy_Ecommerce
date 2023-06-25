<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        $email = $_SESSION["user_email"]["email"];
        $conn =require_once('../model/database.php');
        $sql = "SELECT * FROM users WHERE email = '$email'";$query = "SELECT name FROM users WHERE email = '$email'";
        $result = $db->query($sql);
        $user = $result->fetch_assoc();
        
        session_unset();
        session_destroy();
    }

?>