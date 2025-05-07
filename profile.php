<?php
require 'php/config.php';
session_start();
if(empty($_SESSION['role']) || empty($_SESSION['email']))
{
    header('location:login.php');
}
$role = $_SESSION['role'];
$email = $_SESSION['email'];

$userid_sql = mysqli_query($con,"SELECT * FROM registered_user WHERE Email = '$email';");

$result = mysqli_fetch_assoc($userid_sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel = "stylesheet" href = "css/header.css">
    <link rel = "stylesheet" href = "css/footer.css">
    <link rel="stylesheet" href = "css/profilepage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
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
<div class="main">
    <hr>
    

    <div class="profile-details">
        <img src="images/profilepic.webp">
        <?php
        echo "<ul>
            <li>
                <b>User ID : </b>".$result['User_Id']."
            </li>
            <li>
            <b>User Name : </b>".$result['Name']."
            </li>
            <li>
            <b>Email : </b>".$result['Email']."
            </li>
            <li>
            <b>Address : </b>".$result['Address']."
            </li>
            <li>
            <b>Contact number : </b>".$result['Phone_number']."
            </li>
        </ul>";
        ?>
        <div class="signout">
        <form action = "php/signout.php" method = "post">
        <p> <b>Sign out from your account</b></p>
        <input type = "submit" class = "signout-btn" name = "signout" value= "signout">
        </form>
        </div>
    </div>
    <hr>
    <div class="myitems">
        <center><h2>My Items</h2></center>
        <ul class = "list">
            <li>
                <img src = "images/item1.png" >
            </li>
            <li>
                <img src = "images/item2.png" >
            </li>
            <li>
                <img src = "images/item3.png">
            </li>
            <li>
                <img src = "images/item4.png">
            </li>
            </ul>
            <ul class = "list">
            <li>
                <img src = "images/item5.png" >
            </li>
            <li>
                <img src = "images/item6.png" >
            </li>
            <li>
                <img src = "images/item7.png">
            </li>
            <li>
                <img src = "images/item8.png">
            </li>
            </ul>
            <ul class = "list">
            <li>
                <img src = "images/item9.png" >
            </li>
            <li>
                <img src = "images/item10.png" >
            </li>
            <li>
                <img src = "images/item11.png">
            </li>
            <li>
                <img src = "images/item12.png">
            </li>
            </ul>
        
    </div>
    <br><br><br>
    


        <h2>Wishlist</h2>
    
    
    <div class="wishlist-outer">
    <div class="wishlist">
        
        <ul>
            <li>
                <i class='bx bx-star'></i> Lego car - #233
            </li>
            <li>
                <i class='bx bx-star'></i> AIR Jordans - #243
            </li>
            <li>
                <i class='bx bx-star'></i> Pearl necklace - #4431
            </li>
            <li>
                <i class='bx bx-star'></i> Canon E45 - #0019
            </li>
            <li>
                <i class='bx bx-star'></i> Land Cruiser model 60 series - #7777
            </li>
        </ul>
    </div>
    <img src="images/wishlist.jpg" class = "wishlist-img">
</div>
    <div class="edit-details">

            <form action="php/edituser.php" method="post" onsubmit="return validatePassword()">
                <h2>Edit Account Details</h2><br>
                <span>Enter new account details</span><br>

                <div class="infield">
                    <input type="text" placeholder=" New Name" name="new_name"/>
                    
                </div>
                <div class="infield">
                    <input type="text" placeholder=" New Address" name="new_address"/>
                    
                </div>
                <div class="infield">
                    <input type="tel" placeholder=" New Phone Number" name="new_phone_number" />
                    
                </div>
                <div class="infield">
                    <input type="password" placeholder="New Password" name="new_password" id = "password"/>
                    
                </div>
                <div class="infield">
                    <input type="password" placeholder="Re-Enter New Password" name="new_password2" id ="confirmPassword"/>
                    
                </div>
                <script>
                    function validatePassword()
                    {
                        var password = document.getElementById ("password").value;
                        var confirmPassword = document.getElementById ("confirmPassword").value;

                        if (password.length < 8)
                        {
                            alert("Password must be at lease 8 characters long");
                            return false;
                        }
                        if (password !== confirmPassword) 
                        {
                            alert("Passwords do not match");
                            return false;
                        }
                        return true;
                    }
                </script>
                <button type = "submit" >Save Changes</button>
            </form>
            
        </div>


    </div>

    <a href = "paymentDetails.php"><button class= "payment-btn">Payment Details</button></a>
    <a href = "PaymentPage.php"><button class= "payment-btn">Payment </button></a>
    <div class="del">
    <form action = "php/deleteuser.php" method = "post">
        <p> Are you sure you want to delete your account?</p>
    <input type = "submit" class = "del-btn" name = "delete" value= "delete">
    </form>

    </div>



</div>

    
    
    <footer>
        <div class="row">
            <div class="col">
                <img src = "images/logo2.png" class="logofoot">
                <p>Stay updated with the latest auction listings, exclusive deals, and special offers by following us on social media for news, updates, and behind-the-scenes content.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>SLIIT Malabe Campus<br>
                New Kandy Road<br>
                Malabe, Sri Lanka<br></p>
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