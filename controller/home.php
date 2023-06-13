<?php

require_once("../view/homePage.view.php");

$conn =require_once('../model/database.php');
$sql = "SELECT url FROM Product";
$result = mysqli_query($conn, $sql);

// $css = "";
// $i = 1;
// while ($row = mysqli_fetch_assoc($result)) {
//     $image_data = base64_encode($row['image_column']);
//     $css .= ".bg-image-" . $i . " { background-image: url('data:image/jpeg;base64," . $image_data . "'); }" . PHP_EOL;
//     $i++;
// }

$divs = "";
// while ($row = mysqli_fetch_assoc($result)) {
//     $url = $row['url'];
//     $divs .= "<div class='pro1' style='background-image: url(\"$url\")'></div>" . PHP_EOL;
// }

while ($row = mysqli_fetch_assoc($result)) {
    $url = $row['url'];
    $divs .= "<div class='pro-detail'>
    <div class='pro1' style='background-image: url(\"$url\")'></div>
    <p class='first-price'>100$</p>
    <div class='second-price'>
        <p>90$</p>
        <button class='buy-btn'>Buy</button>
    </div>
</div>" . PHP_EOL;
}


?>