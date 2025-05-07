


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cocobid</title>

    <link rel="stylesheet" href="css/styles.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
                <li><a href = "profile.php" >Profile</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Provide your feedback or any requests you need from our website:
          </p>

          <fieldset>
            <legend>Details</legend>
          <h4>
            
            <span class="material-symbols-outlined">
              call
            </span>     Phone : +94xxxxxxxxxx
</h4>

           <h4>
              <span class="material-symbols-outlined">
              mail
            </span>     Email : vishwa@gmail.com
</h4>
          
           <h4>
            <span class="material-symbols-outlined">
              home
            </span>
                   Address : 23/12xxxxxxxxx
            
</h4>
          </fieldset>

         

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

          <form method = "post" action="php/update.php" >
            <h3 class="title">Update user info</h3>
        
            <div class="input-container">
              Username :<input type="text" name="mname" class="input" />
              <span>Username</span>
            </div>
            <div class="input-container">
              Email :<input type="text" name="memail" class="input" />
              
              <span>Email</span>
            </div>
            <div class="input-container">
              Contact no: <input type="text" name="mcontact" class="input" />
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
             Message : <textarea name="memmsg" class="input"></textarea>
             
              <span>Message</span>
            </div>
            <input type="submit" value="update" class="btn" />
            
              


          </form>

          <!--DELETE FORM-->
        </div>
        <h3 class="title">   </h3>
     <div class = "input-container1">
    
         <form method ="post" action = "php/delete.php" >
        
             Delete data : <input type = "text" name = "mname" class = "input1"><br><br>
       <input type = "submit" value = "delete" class = "btn"/>
  </form>
</div>
 
      </div>
   
</div>
    </div>



    <?php

require 'php/config.php';

$sql = "SELECT name, contact, email , messages FROM feedback";

$result = $con ->query($sql);

if($result->num_rows>0)
{
    echo "<table style='background-color:lightblue' border = '1'  width = '100%' >";
    echo "<th>";
      echo "<tr>";
      echo "<td> ID </td> <td> Name </td> <td> Contact number </td> <td> Email </td>";
      echo "</tr>";
      echo "</th>";
   while($row= $result->fetch_assoc())
   {
      
      echo "<tr>";
      echo "<td>".$row[ "name" ]."</td>"."<td>".$row[ "contact" ]. "</td>" ."<td>". $row[ "email" ]."<td>". $row[ "messages" ]."</td>"."</td>";
      echo "</tr>";
   }
   echo "</table>";

   /*header('location:read.php');*/
}
else
{
    echo "<script> 
    alert('Invalid');
  </script>";
  header('location:read.php');
}

$con->close();
?>

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



