<?php
require 'php/config.php';

$bid_sql = mysqli_query($con,"SELECT * FROM bid WHERE Bid_Amount = (SELECT MAX(Bid_Amount) FROM bid WHERE Item_Id = 5) AND Item_Id = 5");

$result = mysqli_fetch_assoc($bid_sql);
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/product1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="main">

        <div class = "banner">
            <div class = "navbar">
                <img src = "images/logo2.png"  class = "logohead">
                <ul>
                    <li><a href = "index.php" >Home</a></li>
                    <li><a href = "buy.html" >Buy</a></li>
                    <li><a href =  "sell.php" >Sell</a></li>
                    <li><a href = "aboutus.html" >About us</a></li>
                    
                    <li><a href = "profile.php" >Profile</a></li>
                </ul>
            </div>
        </div>



        <div class="container">
            <img src="images/ring.jpg" class="productimg">
            <div class="content-box">

                <div class="text">
                    <br><br><br>
        <h1 class="productname">Gold Ear Rings</h1>
                    <p>Adorn your ears with the shimmering allure of our exquisite gold earrings. Crafted with precision and passion, each pair is a celebration of sophistication and style. Whether you're dressing up for a special occasion or adding a touch of glamour to your everyday look, our gold earrings are the perfect choice.</p>
                    <ul>
                        <?php 
                        if ($result && isset($result['Item_Id'], $result['Auction_Id'], $result['Bid_Amount'], $result['Closing_time'])) {
                            echo "<li>Item Id : " . htmlspecialchars($result['Item_Id']) . "</li>
                            <li>Auction Id : " . htmlspecialchars($result['Auction_Id']) . "</li>
                            <li>Current Bid: " . htmlspecialchars($result['Bid_Amount']) . "$</li>
                            <li>Closes at: " . htmlspecialchars($result['Closing_time']) . "</li>";
                            $current_bid = $result['Bid_Amount'];
                        } else {
                            echo "<li>Item Id : 5</li>
                            <li>Auction Id : N/A</li>
                            <li>Current Bid: No bids yet</li>
                            <li>Closes at: N/A</li>";
                            $current_bid = 0;
                        }
                        ?>
                        <form action= "php/bid1.php" method = "post" onsubmit="return CheckBid()">
                            <label for ="placebid">Enter Your Bid : </label>
                            <input  type = "number" id ="placebid" name="new_bid" step = "0.01">
                            <script>
function CheckBid()
{
    var current_bid = <?php echo json_encode($current_bid); ?>;
    var new_bid = document.getElementById ("placebid").value;

    if (parseFloat(new_bid) <= parseFloat(current_bid)) 
    {
        alert("Enter a higher bid");
        return false;
    }
    return true;
}
</script>
                            <button type ="submit" class = "wishlistbtn">Place Bid</button>
                        </form>
                    </ul>
                    <form action="#" method="post">
                        <input type = "submit" value = "Add to Wishlist" class = "wishlistbtn">
                    </form>
            

                </div>
            </div>
        </div>


        <div class="box">
            <part2 style="display: flex;">
                
                <left style="width: 5%;"></left>
                <left style="width: 5%;"></left>
                <post1 style="width: 30%;">
                   <post1-frame class="post-frame">
                    <img src="images/r1.png" style="width: 300px; height: 300px;" >
                </post1-frame>
                </post1>
                
                <post2 style="width: 30%;">
                    <post2-frame class="post-frame">
                        <img src="images/r2.png" style="width: 300px; height: 300px;" >
                    </post2-frame>
                    </post2>
        
                    <post3 style="width: 30%;">
                        <post3-frame class="post-frame">
                            <img src="images/r3.png" style="width: 300px; height: 300px;" >
                        </post3-frame>
                        </post3>
                        <post4 style="width: 30%;">
                            <post4-frame class="post-frame">
                             <img src="images/r4.png" style="width: 300px; height: 300px;" >
                        </post4-frame>
                        </post4>    
                <right style="width: 5%;"></right>
            </part2><br><br>
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
            <p class = "copyright">MLB_10.02_02 &copy 2024 - All Rights Reserved</p>
        </footer>











    </body>
</html>