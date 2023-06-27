<?php
require_once("../controller/login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="stylesheet" href="../Assets/Boxicons/css/boxicons.min.css">
    <title>Login</title>
</head>

<body>
    <form action="../controller/login.php" method="POST" novalidate>
        <div class="content">
            <div class="imglog">
                <img src='../Assets/img/log.jpg' />
            </div>
            <div class='container'>
                <i class='bx bx-user'></i>
                <label class='UN' for="userName">Username</label>
                <input id='userName' type='text' name="email" required placeholder="   Type your username" />
                <label class='pass' for="password">Password</label>
                <input id='password' type='password' name="password" required placeholder="  Type your password" />
                <!-- <label ></label> -->
                <div class="eye-icon">
                    <i class='bx bxs-low-vision'></i>
                </div>
                <div class="key">
                    <i class='bx bx-key'></i>
                </div>
                <div class="user-icon">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <a href="" class="forgot">Forgot password?</a>
                <div class='btn-container'>
                    <button type='submit' class='Lbtn'>Login</button>
                    <!-- <button type='submit' class='Cbtn'>Signup</button> -->
                    <p>Or</p>
                    <a href="./index.php" class="Signup">Sign Up</a>
                </div>
                <?php var_dump($div); ?>
            </div>
        </div>
    </form>
</body>

</html>