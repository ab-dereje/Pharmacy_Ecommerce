<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel='stylesheet' href="../../Assets/css/Admin/adminlogin.css">
    <script defer src="../../javaScript/Admin/login.js"></script>
</head>
<body>
    <div class="center">
    <h1> Admin Login </h1>
    <form id="form" action="../../controller/Admin/adminLogin.php" method="post" >
       <div class="textField">
           <input type="text" name="user" required id="user">
           <span></span>
            <label for="user">User Name</label>
        </div>
        <div class="textField"> 
            <input type="password" name="pass" required id="pass">
            <span></span>
            <label for="pass">Password</label>
        </div> 
        <h5 class="error" id="perror"></h5>
        <button type="submit" name="submit">Login</button>
        <div class="userLogin">
           Are you a user? <a href="../login.view.php">User Login</a>
       </div> 
            
   </form>
</div>
   
</body>
</html>