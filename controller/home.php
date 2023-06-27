<?php


require_once("../view/homePage.view.php");
$conn =require_once('../model/database.php');

$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);

$divs = "";
while ($row = mysqli_fetch_assoc($result)) {
    $url = $row['url'];
    $med_id = $row['med_id'];
    $price= $row['price'];
    $pr=($price*1.1);
    $divs .= "<div class='pro-detail'>
    <div class='pro1' style='background-image: url(\"$url\")'></div>
    <p class='first-price'>$pr$</p>
    <div class='second-price'>
        
        <p>$price$</p>
        <button class='buy-btn' data-med-id='$med_id'>Add</button>
    </div>
</div>" . PHP_EOL;
}



?>