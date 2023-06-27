<?php





if($_SERVER["REQUEST_METHOD"]=="POST"){
    

    $conn =require_once('../model/database.php');
    $sql = sprintf("select * from User
                where email = '%s'",
                $conn->real_escape_string($_POST["email"]));
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    // $user[]
    $div="";
    
    if($user){
        if (password_verify($_POST["password"], $user["password"])){
            session_start();
            //$_SESSION["user_email"]= ["email"=>$user['email']];
            $_SESSION["user"] = ["email"=>$user['email'], "name"=>$user['name']];
            // var_dump($_SESSION["user_email"]['email']);
            header("Location: ../view/homePage.view.php");
            exit;
        }
        else{
            $div.="<label class='incorect'>try again</label>";
            header("Location:../view/login.view.php");
            
    
        }
    }else{
        $div.="<label class='incorect'>try again</label>";
        header("../view/login.view.php");

    }
}
