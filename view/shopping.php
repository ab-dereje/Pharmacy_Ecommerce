<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/shopping.css">
    <link rel="stylesheet" href="../Assets/Boxicons/css/boxicons.min.css">
    <title>shop</title>
</head>

<body>
    <div class="header-content">
        <div class="img-log">
            <!-- <img src="./img/logo.jpeg"> -->
        </div>
        <div class="search">
            <input class="search-bar" placeholder="search" type="text">
            <i class='bx bx-search-alt-2'></i>
        </div>
        <div class="nav-bar">

            <nav>
                <div>
                    <a href="./homePage.view.php" class="link">home</a>
                    <a href="" class="link">about</a>
                    <a href="" class="link">services</a>
                    <a href="" class="link"><i class='bx bx-cart'></i></a>
                </div>
            </nav>
            <div class="menu-icon">
                <i class='bx bxs-user-circle'></i>
            </div>
        </div>

    </div>
    <div class="shop" id="shop">
        <!-- <div class="shop-container">
            <div class="prodct-detail">

            </div>
            <div class="prescription">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim, expedita velit esse quam dignissimos ab dolore ut nihil facilis eum voluptatem odit ex dolor natus voluptate culpa fugiat? Ea, amet.</p>
            </div>
        </div> -->

        <table class="table" border="1" height="300" width="600">
            <thead class="thead">
                <tr class="tr">
                    <th class="th">medicine_id</th>
                    <th class="th">Name</th>
                    <th class="th">Quantity</th>
                    <th class="th">prescription</th>
                    <th class="th">payment</th>
                    <th class="th">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn =require_once('../model/database.php');
                    $query1 = mysqli_query($conn,"select * from Shopping");
                    $query3 = mysqli_query($conn,"select * from Product");
                    $query2 = mysqli_query($conn,"select * from User");
                    while($row=mysqli_fetch_array($query1)){
                        $med_id=$row['med_id'];
                ?> 
                <tr>
                    <td class="td" ><?php echo $row['med_id'] ; ?></td>
                    <td class="td"><?php echo $row['med_name']; ?></td>
                    <td class="td"><input name="quantity" value="1"></td>
                    <td class="td"><?php echo $row['prescription']; ?></td>
                    <td class="td"><?php echo $row['price']; ?></td>
                    <td class="td"><button class="btn" ><i data="<?php echo $med_id; ?>" class='bx bx-message-alt-minus'></i></button></td>
                

                 <?php   } ?>
                
            </tbody>
        </table>
        <div class="pay-btn">
            <button class="proced-pay">Next</button>
        </div>
    </div>
    <div class="Billing">
        <button class="close"><i class='bx bx-window-close'></i></button>
        <div class="container">
            <div class="fill-info">
                <label for="firstName">Full Name *</label>
                <input name="firstName" id="firstName" type="text">
                <label for="address">Address *</label>
                <input name="address" id="address" type="text">
                <label for="phone">Phone *</label>
                <input name="phone" id="phone" type="text">
            </div>
            <div class="order">
                <table class="table" border="1" >
                    <thead class="thead">
                        <tr class="tr">
                            <th class="th">product</th>
                            <th class="th">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // $conn =require_once('../model/database.php');
                            while($row=mysqli_fetch_array($query3)){
                        ?> 
                        <tr>
                            <td class="td"><?php echo $row['med_name']; ?></td>
                            <td class="td"><?php echo $row['price']; ?></td>
                        </tr>
                        

                        <?php   } ?>

                        <tr>
                            <td class="td">Total</td>
                            <td class="td"> ?</td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="payment-method">
                    <label class="telebirr">Payment is through Telebirr !</label>
                    <button class="payment" >PLACE ORDER</button>
                </div>
            </div>
        </div>
        
    </div>

    <script src="../javaScript/shopping.js"></script>

</body>
<footer>
    <div class="first-col">
        <h3>Customer Service</h3>
        <p>Contact Us</p>
        <p>Returns</p>
        <p>Site Map</p>
        <p>Blog</p>
    </div>
    <div class="second-col">
        <h3>My Account</h3>
        <p>My Account</p>
        <p>Order History</p>
        <p>News Letter</p>
    </div>
    <div class="third-col">
        <h3>Contact Us</h3>
        <p>Adama</p>
        <p>+251-9999</p>
        <p>admin@gmail.com</p>
        <p>7 days a week from 8:00 am to 9:00 pm</p>
    </div>
</footer>

</html>