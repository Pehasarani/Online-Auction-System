<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cocobid</title>

    <link rel="stylesheet" href="css/styles.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
<!--Header-->
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

<!--Close Header-->
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Provide your feedback or any requests you need from our website:
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form method = "post" action="php/insert.php" >
            <h3 class="title">Contact us</h3>
          
            <div class="input-container">
              Username :<input type="text" name="mname" class="input" required/>
              <span>Username</span>
            </div>
            <div class="input-container">
              Email :<input type="text" name="memail" class="input" required/>
              
              <span>Email</span>
            </div>
            <div class="input-container">
              Contact no: <input type="text" name="mcontact" class="input" required />
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
             Message : <textarea name="memmsg" class="input" required></textarea>
              
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
            
          </form>
          
          <a href = "read.php" target="_blank">
              <input type = "submit" value = "Update" class = "btn"/></a>

        </div>

        </div>
      </div>
    </div>

    <!--<script src="app.js"></script>-->
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