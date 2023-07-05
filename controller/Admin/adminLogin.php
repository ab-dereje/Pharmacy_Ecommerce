<?php


session_start();
if (empty($_SESSION['user'])) {
    header('location:../../view/Admin/AdminLogin.php');
}


if(isset($_POST['submit'])){

    $userName = "Admin";
    $password = "admin";
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    if($user == $userName){
        if ($pass == $password) {
           $_SESSION['login'] = true;
           $_SESSION['user'] = $user; 
           header("location: ../../view/Admin/admin.php"); 
        }
    //     else{
    //         header("location: ../AdminLogin.php");  
    //     }
        
    //     }       
    // else{
        
    //     header("location: ../AdminLogin.php");
        }

}else{
    header("locatio:../AdminLogin.php");
}