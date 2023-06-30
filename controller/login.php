<?php





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
            
            $_SESSION["user"] = ["email"=>$user['email'], "name"=>$user['name']];
            // var_dump($_SESSION["user_email"]['email']);
            header("Location: ../view/homePage.view.php");
            exit;
        }
        else{
            var_dump("hsdhj");
            $div="<label class='incorect'>incorrect password try again</label>";
            header("Location:../view/login.view.php?div=" . urlencode($div));
            
    
        }
    }else{
        var_dump("sjjdskh");
        $div1="<label class='incorect-email'>email doesnot exist</label>";
        header("Location:../view/login.view.php?div1=" . urlencode($div1));

    }
}
