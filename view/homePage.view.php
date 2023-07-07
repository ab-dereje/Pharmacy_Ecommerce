
<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.view.php');
    die();
}
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
                    <a href="../view/shopping.php" class="link"><i class='bx bx-cart'></i><label class="number">+<?php echo $count; ?></label></a>
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
        
        <!-- <div class="promotion">
            <p>Subscribe to the one source website <br> receive a 10% discount</p>
        </div>
        <div class="get-button">
            <button class="btn-home">Get more</button>
        </div> -->
    </div>
    <div class="about" id="about">
        <h1>About</h1>
        <div class="about-container">
            <div class="company-info">
                <h4>Company Information</h4>
                <p>One Source Pharmacy is a locally owned and operated pharmacy dedicated to providing superior customer service and high-quality products to our community. Our knowledgeable and friendly staff are always available to answer your questions and help you find the right products to meet your healthcare needs.</p>
                <span class="more">
                    <p><br></p>
                    <p>Products and Services: We offer a wide range of prescription and over-the-counter medications, as well as vitamins, supplements, and natural health products. Our pharmacy also provides prescription compounding services, medication synchronization, and medication therapy management. We offer free delivery to our local area and accept most insurance plans.</p>
                </span>
                <button class="more-btn">Read More</button>
            </div>
            <div class="company-misssion">
                <h4>Our mission</h4>
                <p>At One Source Pharmacy, we take our mission very seriously. We are committed to providing our patients with personalized and compassionate care that exceeds their expectations. We understand that healthcare can be a complex and often confusing field, and we strive to be a trusted resource for our patients, providing them with the information and guidance they need to make informed decisions about their health.
                    We believe that exceptional service and quality products are the foundation of our business, and we are dedicated to maintaining the highest standards of professionalism and integrity in everything we do. Whether you need a prescription filled, advice on a health issue, or just a friendly face to talk to, our knowledgeable and friendly staff are here to help.</p>
                <p><br></p>
                <p>At One Source Pharmacy, we are more than just a pharmacy – we are a partner in your healthcare journey. We are committed to building long-term relationships with our patients, and we will always go above and beyond to ensure that you receive the care and attention you deserve.</p>
            </div>
            <div class="privacy-policy">
                <h4>Privacy Policy</h4>
                <p>One Source pharmacy is committed to protecting the privacy of its customers. This Privacy Policy explains how we collect, use, and protect the personal information of our customers.</p>
            </div>

        </div>
        
        <div class="social-media">
            <div>
                <h3>Keep updated</h3>
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
                <button class="btn" type="submit">Logout</button>
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