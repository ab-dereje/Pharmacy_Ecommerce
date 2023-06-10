<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/signup.css">
    <link rel="stylesheet" href="../Assets/Boxicons/css/boxicons.min.css">
    <title>Create Account</title>
</head>

<body>
    <form action="signup.php" method="post" novalidate>
        <div class="content">

            <div class="container">
                <i class='bx bx-user-plus'></i>
                <div class="sub">
                    <label class='UN' for="userName">Full name</label>
                    <input id='userName' name="name" type='text' required placeholder="   Insert first name" />
                </div>
                <div class="sub">
                    <label class='UN' for="userName">Phone</label>
                    <input id='userName' name="phone" type='text' required placeholder="   Insert phone" />
                </div>
                <div class="sub">
                    <label class='UN' for="email">Email</label>
                    <input id='email' type='email' name="email" required placeholder="   Insert your email" />
                </div>
                <div class="sub">
                    <label class='UN1' for="password">New Password</label>
                    <input id='password1' name="password" type='password'  placeholder="  Enter new password" />
                </div>
                <div class="sub">
                    <label class='UN2' for="password">Confirm Password</label>
                    <input id='password2' name="cPassword" type='password' placeholder="  Confirm password" />
                </div>
                <div class='btn-container'>
                    <button type='submit' name="submit" class='Sbtn'>Sign Up</button>
                    <!-- <button type='submit' class='Cbtn'>Signup</button> -->
                    <!-- <p>Or</p>
                    <a href="" class="Signup">Sign Up</a> -->
                </div>
            </div>
        </div>
    </form>
</body>

</html>