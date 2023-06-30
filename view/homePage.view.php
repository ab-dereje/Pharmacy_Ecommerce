<?php

require_once("../controller/search_bar.php");
require_once("../controller/profile.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/home_after.css">
    <link rel="stylesheet" href="../Assets/Boxicons/css/boxicons.min.css">
    <title>home</title>
</head>

<body>

    <div class="header-content">
        <div class="img-log">

        </div>

        
        

        <div class="search">
            <form action="../controller/search_bar.php" method="POST">
                <input class="search-bar" name="search" placeholder="search" type="text">
                <button type="submit" class="search_icon"><i class='bx bx-search-alt-2'></i></button>
            </form>
            
        </div>
        <div class="nav-bar">

            <nav>
                <div>
                    <a href="#home" class="link">home</a>
                    <a href="#about" class="link">about</a>
                    <a href="" class="link">services</a>
                    <a href="./shopping.php" class="link"><i class='bx bx-cart'></i></a>
                </div>
            </nav>
            <div class="menu-icon">
                <button class="menu-profile"><i class='bx bxs-user-circle'></i></button>
            </div>
            
        </div>

    </div>
    <div class="home" id="home">
        <!-- <form action="../controller/shopping.php" method="POST"> -->
            <div class="Products">


                <?php echo $divs; ?>

                <!-- <div class="pro-detail">
                    <div class="pro1"></div>
                    <p class="first-price">100$</p>
                    <div class="second-price">
                        <p>90$</p>
                        <button class="buy-btn">Buy</button>
                    </div>
                </div>  -->
                <!-- <div class="pro-detail">
                    <div class="pro2"></div>
                    <p class="first-price">100$</p>
                    <div class="second-price">
                        <p>90$</p>
                        <button class="buy-btn">Buy</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <div class="pro3"></div>
                    <p class="first-price">100$</p>
                    <div class="second-price">
                        <p>90$</p>
                        <button class="buy-btn">Buy</button>
                    </div>
                </div> -->
            </div>
        <!-- </form> -->
        
        <div class="promotion">
            <p>Subscribe to the one source website <br> receive a 10% discount</p>
        </div>
        <div class="get-button">
            <button class="btn-home">Get more</button>
        </div>
    </div>
    <div class="about" id="about">
        <h1>About</h1>
        <div class="about-container">
            <div class="company-info">
                <h4>Company Information</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste harum culpa consectetur dolor, necessitatibus dignissimos eveniet, veritatis, nobis odio optio sunt veniam! Nisi veritatis voluptates nemo nam officiis nulla atque?</p>
                <span class="more">
                    <p></br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae iste nostrum dolore quae totam veritatis recusandae, doloremque sequi libero. Autem, distinctio. Saepe accusamus, iste reiciendis repellat suscipit praesentium commodi maiores.</p>
                </span>
                <button class="more-btn">Read More</button>
            </div>
            <div class="company-misssion">
                <h4>Our mission</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque fuga, accusamus laboriosam delectus similique sit odio, corporis cumque quod modi tempore perferendis iure culpa sequi hic aut nesciunt ullam. Incidunt.</p>
            </div>

        </div>
        <div class="privacy-policy">
            <h4>Privacy Policy</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quas quaerat quisquam voluptate voluptatum officia hic illo incidunt dolor, officiis ea ipsam assumenda accusamus rem facere debitis. Voluptas, eveniet blanditiis.</p>
        </div>
        <div class="social-media">
            <div>
                <h3>social media-links</h3>
                <!-- <h4>contact us</h4> -->
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram' ></i></a>
                <a href=""><i class='bx bxl-telegram' ></i></a>
            </div>

        </div>
    </div>
    <form action="../controller/logout.php" method="POST" novalidate>
        <div class="profile">
            <div class="info">
                <div class="img-profile">

                </div>
                <?php echo $div1; ?>
                <!-- <div class="full-name">
                    <h3><php echo $user_name; ?></h3>
                    <h5><php echo $email; ?></h5>

                </div> -->
            </div>
            <div class="manage">
                <a href=""><h4>Manage Account</h4></a>
            </div>
            <div class="logout-btn">
                <button class="btn"><a href="../view/homepage_before.view.php">Logout</a></button>
            </div>
        </div>
    </form>
    

    <script src="../javaScript/homepage_after.js"></script>
    <script src="../javaScript/cart.js"></script>

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