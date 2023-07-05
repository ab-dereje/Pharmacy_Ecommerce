<?php

require_once "config.php";

session_start();
if (empty($_SESSION['user'])) {
    header('location:../../view/Admin/AdminLogin.php');
}


$email=$_POST['email'];
$conn = require_once("../../model/database.php");

$sql="SELECT * FROM User WHERE email='$email'; ";

$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if ($resultCheck > 0){
    while ($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        echo $row['id'] . "   ";
        echo $row['fname']."   ";
        echo $row['lname']."   ";
        echo $row['email']."   ";
        echo $row['pass']."<form action='deleteAccount.php' method='post'>
                                <input type='hidden' name='id' value='$id'><br>
                                <button type='submit'>delete</button>
                           </form>";


    } 
}
else
echo "user not found";


