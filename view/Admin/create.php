<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./backEnd/signup.php" method="post">
        <input type="text" name="fname" placeholder="firstname" required><br>
        <input type="text" name="lname" placeholder="lastname"required><br>
        <input type="email" name="email" placeholder="email@Gmail.com"required><br>
        <input type="password" name="pass1" placeholder="password" ><br>
        <input type="password" name="pass2" placeholder="confirm" ><br>
        <!-- <input type="radio" name="gender"  ><br>
        <input type="radio" name="gender" ><br> -->
        <button type="submit">sign up</button>
    </form>
</body>
</html>
<form action="AdminLogin.php" method="post">
    <button type="submit">admin panel</button>
</form>