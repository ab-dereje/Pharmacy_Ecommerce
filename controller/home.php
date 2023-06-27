<?php


require_once("../view/homePage.view.php");
$conn =require_once('../model/database.php');

$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);

$divs = "";
while ($row = mysqli_fetch_assoc($result)) {
    $url = $row['url'];
    $med_id = $row['med_id'];
    $divs .= "<div class='pro-detail'>
    <div class='pro1' style='background-image: url(\"$url\")'></div>
    <p class='first-price'>100$</p>
    <div class='second-price'>
        
        <p>90$</p>
        <button class='buy-btn' data-med-id='$med_id'>Buy</button>
    </div>
</div>" . PHP_EOL;
}



?>