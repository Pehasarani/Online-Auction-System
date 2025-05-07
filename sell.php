<?php require("php/config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocobid</title>
    <link rel="stylesheet" href="css/sarala.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/logo2.png" class="logohead">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="buy.html">Buy</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
    </div>


    <div class="main">    
    <br><br><br>
    <div class="box1" style="display: flex; align-items: center; ">
            <h1  style="padding-left: 50px; margin: 0; font-size: 50px;color: #333;font-family: 'palatino';">Make money selling on<br>COCOBID <br><br><a href="additem.php"><input type="submit" value="Add Listing" name="Add a item"></a></h1>
            
            <img src="images/auctionimg.png" style="width: 700px; height: auto; margin-left: auto;margin-right: 20px;border-radius: 30px;">
            

        </div>

    <br><br><br><br>
    <center>
    <h2 style="padding-left: 30px;margin-top: 40px; margin-bottom: 20px;font-size: 30px;color: #333;font-family: 'palatino';">Steps to create a listing</h2>
</center>
    <div class="gallery">
    
        <div class="content">
            <h3>Step 1</step><br>
            <p> Sign in to your account on the  platform.</p>
        </div>   
        
        <div class="content">
            <h3>Step 2</step><br>
            <p>Look for an option to "list an item" on your account dashboard.</p>
        </div>   

        <div class="content">
            <h3>Step 3</step><br>
            <p> Fill out the required information about the item you want to sell</p>
        </div>   

        <div class="content">
            <h3>Step 4</step><br>
            <p>Upload clear photos of the item to attract potential buyers</p>
        </div>   

        <div class="content">
            <h3>Step 5</step><br>
            <p> Fill out the required information about the item you want to sell</p>
        </div>

        <div class="content">
            <h3>Step 6</step><br>
            <p> Set your desired starting price or choose to set up an auction with a starting bid</p>
        </div>

        <div class="content">
            <h3>Step 7</step><br>
            <p> Choose the duration of the listing</p>
        </div>

        <div class="content">
            <h3>Step 8</step><br>
            <p> Submit your listing for review and approval by the online auction platform</p>
        </div>
    </div>
    <center>
    <h2 style="padding-left: 30px;margin-top: 40px; margin-bottom: 20px;font-size: 30px;color: #333;font-family: 'palatino';"><b>My listings<b></h2><br><br>
</center>
    <div class="container1">
        <?php
            $bids = $con->query("SELECT * FROM seller");
            while ($bid = $bids->fetch_assoc()) {
                echo "
                    <div class='card'>
                        <div class='product-image'>
                            <img src='images/bid image.jpg'>
                        </div>
                        <div class='product-info'>
                            <h4>{$bid["ItemTitle"]}</h4>
                           
                            {$bid["Description"]}
                            <br>
                            Category:
                            {$bid["Category"]}
                            <br>
                            Quantity:
                            {$bid["Quantity"]}
                            <br>
                            Auction duration:
                            {$bid["AucDurationHrs"]}
                            /
                            {$bid["AucDurationMin"]}
                            <br>
                            Starting bid:
                            {$bid["StartingBid"]}
                            <br>
                            Shipping method:
                            {$bid["ShippingMethod"]}
                            <br>
                            Condition:
                            {$bid["Condition"]}
                            <br>
                            
                        </div>
                    
                    </div>         
                ";

            }
        ?>

       

    </div>  

    </div>

<footer>
    <div class="row">
        <div class="col">
            <img src="images/logo2.png" class="logofoot">
            <p>Stay updated with the latest auction listings, exclusive deals, and special offers by following us on
                social media for news, updates, and behind-the-scenes content.</p>
        </div>
        <div class="col">
            <h3>Office <div class="underline"><span></span></div>
            </h3>
            <p>SLIIT Malabe Campus</p>
            <p>New Kandy Road</p>
            <p>Malabe, Sri Lanka</p>
            <p class="email-id">perera.vishwa03@gmail.com</p>
            <h4>+94 (77) 239 7767</h4>
        </div>
        <div class="col">
            <h3>Links<div class="underline"><span></span></h3>
            <ul>
                <li class="links"><a href="">Contact Us</a></li>
                <li class="links"><a href="">Terms & Conditions</a></li>
                <li class="links"><a href="">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Social Media<div class="underline"><span></span></h3>
            <div class="social-icons">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxs-envelope'></i>
                <i class='bx bxl-youtube'></i>
                <i class='bx bxl-twitter'></i>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">MLB_10.02_02 &copy 2024 - All Rights Reserved</p>
</footer>
</body>

</html>