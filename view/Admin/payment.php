<?php
session_start();
if (empty($_SESSION['user'])) {
    header('location:AdminLogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/css/Admin/admin.css" >
    <link rel="stylesheet" href="../../Assets/css/Admin/medicine_list.css" >
    
</head>
<body>
    <div class="navbar"> 
        <div class="icon">
                    <!-- <img src="./pics/drugLogo.jpg" class="logo"> -->
                </div>
                <div class="menu">
                    <ul>
                         
                        <li><a href="./admin.php">HOME</a></li>
                        <li><a href="./medicine_list.php">MEDICINES</a></li>
                         
                         <li><a href="./customer.php">ACCOUNTS</a></li>
                     
                         <li><a href="./payment.php">PAYMENT</a></li>
                        
                        <form action="../../controller/Admin/adminLogout.php" method="post">
                            <li><button type="submit">LOGOUT</button></li>
                        </form>
                        <div class="search">
                            <form action="../../controller/Admin/searchAccount.php" method="post">
                                <input class="srch" type="email" name="email" required placeholder="Enter email of the user" >
                                
                                <button type="submit">search</button>
                            </form>
                        </div>
                    </ul>
                </div>

    </div>
    <div class="table">
    <table border="1">
        <thead class="thead">
            <tr class="tr">
                <th class="th">Medicine Id</th>
                <th class="th">Medicine Name</th>
                <th class="th">Email</th>
                <th class="th">Date</th>
                <th class="th">Price</th>
            </tr>
            <tbody>
                <?php
                    $conn =require_once('../../model/database.php');
                    $query1 = mysqli_query($conn,"select * from paymentHistory;");
                    while($row=mysqli_fetch_array($query1)){
                        $med_id=$row[''];
                ?>

                <tr>
                    <td class="td" ><?php echo $row['med_id'] ; ?></td>
                    <td class="td"><?php echo $row['med_name']; ?></td>
                    <td class="td"><?php echo $row['email']; ?></td>
                    <td class="td"><?php echo $row['time']; ?></td>
                    <td class="td"><?php echo $row['price']; ?></td>
                    
                    
                </tr>

                 <?php   } ?>
            </tbody>
        </thead>
    </table>
    </div>    
    
   
</body>
</html>