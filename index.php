<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocobid</title>
    <link rel = "stylesheet" href = "css/homepagecss.css">
    <link rel = "stylesheet" href = "css/header.css">
    <link rel = "stylesheet" href = "css/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
</head>
<body>
    <?php
        require 'php/config.php';
    ?>
    <div class = "banner">
        <div class = "navbar">
            <img src = "images/logo2.png"  class = "logohead">
            <ul>
                <li><a href = "index.php" >Home</a></li>
                <li><a href = "buy.html" >Buy</a></li>
                <li><a href =  "sell.php" >Sell</a></li>
                <li><a href = "aboutus.html" >About us</a></li>
                <!--<li><a href =  "login.php" >Login</a></li>-->
                <li><a href = "profile.php" >Profile</a></li>
            </ul>
        </div>
    </div>
    

    <div class="hero">
        <div class="main">
        <div class="content">
            <h1>Discover. Bid. Win!</h1>
            <h4>Your One Stop Auction House.</h4>
            <?php
                require 'php/config.php';
                
                session_start();
                if(isset($_SESSION['role'])) 
                {
                
                }
                else
                {
                    echo '<a href ="login.php" class = "btn">Log in</a>';
                }
            ?>
        </div>
        <img src = "images/Auction illustration3.jpeg" class = "feature-img">
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="category">
            <center><h2>Explore our Categories</h2></center>
                <ul class = "list">
                <li>
                    <img src = "images/1.png" >
                </li>
                <li>
                    <img src = "images/2.png" >
                </li>
                <li>
                    <img src = "images/3.png">
                </li>
                <li>
                    <img src = "images/4.png">
                </li>
                </ul>
                <ul class = "list">
                <li>
                    <img src = "images/5.png" >
                </li>
                <li>
                    <img src = "images/6.png" >
                </li>
                <li>
                    <img src = "images/7.png">
                </li>
                <li>
                    <img src = "images/8.png">
                </li>
                </ul>
                <ul class = "list">
                <li>
                    <img src = "images/9.png" >
                </li>
                <li>
                    <img src = "images/10.png" >
                </li>
                <li>
                    <img src = "images/11.png">
                </li>
                <li>
                    <img src = "images/12.png">
                </li>
                </ul>
        </div>  
        <br><br><br><br><br><br>
        <div class="review">
            <center><h2>Buyer's Odyssey</h2></center>
                <ul class = "list">
                <li>
                    <img src = "images/review2.png" >
                </li>
                <li>
                    <img src = "images/review1.png" >
                </li>
                <li>
                    <img src = "images/review3.png">
                </li>
                
                </ul>
        </div>  
        <br><br><br><br><br>  
        <center>
            <fieldset>
            <legend>In Association with</legend>
            <div class="association">
                <i class='bx bxl-amazon'></i>
                <i class='bx bxl-ebay' ></i>
                <i class='bx bxs-shopping-bag' ></i>
                <i class='bx bx-bitcoin' ></i>
            </div>
            </fieldset>
        </center>
    </div>



    <footer>
        <div class="row">
            <div class="col">
                <img src = "images/logo2.png" class="logofoot">
                <p>Stay updated with the latest auction listings, exclusive deals, and special offers by following us on social media for news, updates, and behind-the-scenes content.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>SLIIT Malabe Campus</p>
                <p>New Kandy Road</p>
                <p>Malabe, Sri Lanka</p>
                <p class="email-id">perera.vishwa03@gmail.com</p>
                <h4>+94 (77) 239 7767</h4>
            </div>
            <div class="col">
                <h3>Links<div class="underline"><span></span></h3>
                <ul>
                    <li class = "links"><a href="contactus.php">Contact Us</a></li>
                    <li class = "links"><a href="terms.html">Terms & Conditions</a></li>
                    <li class = "links"><a href="privacypolicy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Social Media<div class="underline"><span></span></h3>
                <div class="social-icons">
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-facebook-square' ></i>
                    <i class='bx bxs-envelope' ></i>
                    <i class='bx bxl-youtube' ></i>
                    <i class='bx bxl-twitter' ></i>
                </div>

            </div>
        </div>
        <hr>
        <p class = "copyright">MLB_10.02_10 &copy 2024 - All Rights Reserved</p>
    </footer>
</body>
</html>