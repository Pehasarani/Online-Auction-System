
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel = "stylesheet" href = "css/header.css">
    <link rel = "stylesheet" href = "css/footer.css">

    <link rel = "stylesheet" href = "css/loginpagecss.css">
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


    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="php/signup.php" method="post" onsubmit="return validatePassword()">
                <h1>Get Started</h1>
                
                <span>Enter your details and start your journey with us</span>
                <div class="infield">
                    <input type="text" placeholder="Name" name="name" required/>
                    
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email" required/>
                    
                </div>
                <div class="infield">
                    <input type="text" placeholder="Address" name="address" required/>
                    
                </div>
                <div class="infield">
                    <input type="tel" placeholder="Phone Number" name="phone_number" required/>
                    
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="password" id = "password" required/>
                    
                </div>
                <div class="infield">
                    <input type="password" placeholder="Re-Enter Password" name="password2" id ="confirmPassword" required/>
                    
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
                <button type = "submit" >Create Account</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="php/signin.php" method = "post">
                <h1>Login</h1>
                
                <span>Welcome Back! Please login to your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="user_email" required/>
                    
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="user_password" required/>
                    
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit" name="login" value = "login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Sign in to your account to access your bids, auctions and watchlist.</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello!</h1>
                    <p>Join our vibrant community of buyers and sellers.</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>


    
    <!-- js code -->
    <script>
        const container = document.getElementById ('container');
        const overlayCon = document.getElementById ('overlayCon');
        const overlayBtn = document.getElementById ('overlayBtn');

        overlayBtn.addEventListener('click' ,  () => { 
            container.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame( () => {
                overlayBtn.classList.add('btnScaled');
            })
        });


    </script>


    
    
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