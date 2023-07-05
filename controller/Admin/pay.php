<?php

require_once "config.php";

$sql="SELECT * FROM medicine;";

$result=mysqli_query($con,$sql);
$resultCheck=mysqli_num_rows($result);
if ($resultCheck > 0){
    while ($row=mysqli_fetch_assoc($result)) {
        $id=$row['medId'];
        $medname=$row['medName'];
        $desc=$row['description'];
        $price=$row['price'];
        $type=$row['type'];
        echo $row['medId'] . "  ";
        echo $row['medName']."   ";
        echo $row['description']."   ";
        echo $row['price']."   ";
        echo $row['type']."<form action='payment.php' method='post'>
                                <input type='text' name='medid' value='$id'>
                                <input type='text' name='email' value='$email'>
                                <input type='text' name='medname' value='$medname'>
                                <button>pay</button>
                          </form>";

    }
}




