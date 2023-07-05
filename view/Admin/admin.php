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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../../Assets/css/Admin/admin.css" >
</head>
    <body>
        <div class="main"> 
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
                
            <div class="center">
                <h1> Welcome Admin</h1>
                <h2>Insert New Medicine </h2>
                <form action="../../controller/Admin_prod_insert.php" method="post" enctype="multipart/form-data">
                    <div class="textField">
                        <input type="text" name="med_name" required placeholder="medicine name">
                        <input type="number" name="price" required placeholder="price">
                        <input type="text" name="types" required placeholder="type">
                        <textarea name="description" required placeholder="description here..." rows="8" cols="60"></textarea>
                        <input type="file" id="photo" name="photo">
                    </div>
                    <button type="submit">Insert</button>
                </form>           
            </div>
        </div>  
   </body>
</html>