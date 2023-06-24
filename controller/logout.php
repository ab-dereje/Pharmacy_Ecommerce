<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        $conn =require_once('../model/database.php');

        

        session_destroy();
    }

?>