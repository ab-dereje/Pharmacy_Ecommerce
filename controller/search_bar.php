<?php

// $searchbar = $_POST['search'];
// $conn = require_once("../model/database.php");
// $search = mysqli_real_escape_string($conn,$searchbar);
// $sql = "Select * from Product where med_name LIKE '%$search%' or type LIKE '%$search%'";
// $result = mysqli_query($conn,$sql);
// $product = $result->fetch_assoc();




$conn =require_once('../model/database.php');
$divs = "";
// Check if search term is set
if(isset($_POST['search'])) {
    $searchbar = $_POST['search'];
    $search = mysqli_real_escape_string($conn,$searchbar);
    $sql = "SELECT * FROM Product WHERE `med_name` LIKE '%".$search."%'";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    
while ($row = $result->fetch_assoc()) {
    $url = $row['url'];
    $med_id = $row['med_id'];
    $med_name = $row['med_name'];
    $price= $row['price'];
    $pr=($price*1.1);
    $divs .= "<div class='pro-detail'>
    <div class='pro1' style='background-image: url(\"$url\")'></div>
        <p class='first-price'>$pr$</p>
        <p class='product-name'>$med_name</p>
    <div class='second-price'>
        <p>$price$</p>
        <button class='buy-btn' data-med-id='$med_id'>Add</button>
    </div>
</div>" . PHP_EOL;
}
// header("Location:../view/homePage.view.php");

} else {
    $sql = "SELECT * FROM Product";
    $result = mysqli_query($conn,$sql);

    $divs = "";
while ($row = mysqli_fetch_assoc($result)) {
    $url = $row['url'];
    $med_id = $row['med_id'];
    $med_name = $row['med_name'];
    $price= $row['price'];
    $pr=($price*1.1);
    $divs .= "<div class='pro-detail'>
    <div class='pro1' style='background-image: url(\"$url\")'></div>
        <p class='first-price'>$pr$</p>
        <p class='product-name'>$med_name</p>
    <div class='second-price'>
        
        <p>$price$</p>
        <button class='buy-btn' data-med-id='$med_id'>Add</button>
    </div>
</div>" . PHP_EOL;
}
}

require_once("../view/homePage.view.php");

?>

