<?php
// require_once "config.php";

// session_start();
// if (empty($_SESSION['user'])) {
//     header('location:../../view/Admin/AdminLogin.php');
// }


// $medname=$_POST['medname'];
// $desc=$_POST['desc'];
// $price=$_POST['price'];
// $type=$_POST['type'];

// $sql="INSERT INTO medicine (medName,description,price,type) values ('$medname','$desc','$price','$type');";

// mysqli_query($con,$sql);
// header("location: ../../view/Admin/admin.php?insert=success");

$target_dir = "../photos/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$med_name=$_POST["medname"];
$description=$_POST["desc"];
$types=$_POST["type"];
$prescription=$_POST["desc"];
$price =$_POST["price"];



if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }


}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$path_to_photo = $target_file;

$conn =require_once("../model/database.php");

$sql = "INSERT INTO Product (med_name,description,type,prescription,price,url) 
        VALUES ('$med_name','$description','$types','$prescription','$price','$path_to_photo')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>