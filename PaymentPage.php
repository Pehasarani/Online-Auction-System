<!DOCTYPE html>
<html>

<head>
<div class = "banner">
	
	
	
<title>Payment Page</title>
<link rel="stylesheet" href="css/styles-1.css">
<link rel = "stylesheet" href = "css/header.css">
    <link rel = "stylesheet" href = "css/footer.css">
</head>

<body>

<div class = "navbar">
            <img src = "images/logo2.png"  class = "logohead">
            <ul>
                <li><a href = "index.php" >Home</a></li>
                <li><a href = "buy.html" >Buy</a></li>
                <li><a href =  "sell.php" >Sell</a></li>
                <li><a href = "aboutus.html" >About us</a></li>\
                
                <li><a href = "profile.php" >Profile</a></li>
            </ul>
        </div>
    </div>

<h1>Company name</h1>



<form method = "post" action = "#" >
<div class="">
	<label for="fullname">Enter Full name:</label>
		<input type="text" id="Fullname" name="full_name"  placeholder="Full name..." required>
		<br><br>
    <label for="Email">Email:</label>
		<input type="email" id="Fullname" name="email"  placeholder="Email..." required>
		<br><br>
	<label for="Adress" >Enter you Adress:</label>	<br>
		<input type="Adress"  id="Fullname" name="Adress" placeholder="Adress..." required>
		<br><br>
	<label for="postcode">Enter postcode:</label>
		<input type="number" id="postcode" name="Postcode"  placeholder="****" required>
		<br><br>	
		
	<p>Select a payment method</p>
		
			
			<input type="radio" name="Paymentmethod" value="PayPal" id="option-1">
			<label for="option-1">PayPal</label>
			<img class="image1" src="images/PayPalCard.jpeg" alt="A picture of Paypal logo">
			<br>
			
			<input type="radio" name="Paymentmethod" value="Bank transfer" id="option-2">
			<label for="option-2">Bank transfer</label>
			<img class="image2" src="images/Banktrans.jpeg" alt="A picture of Banktransfer reference">
			<br>
			
			<input type="radio" name="Paymentmethod" value="Credit card" id="option-3">
			<label for="option-3">Credit card</label>
			<img class="image3" src="images/credir card1.jpeg" alt="A picture of Credit card">
			<br>
			
			<input type="radio" name="Paymentmethod" value="Debit card" id="option-4">
			<label for="option-2">Debit card</label>
			<img class="image4" src="imagescreditcard.jpeg" alt="A picture of Debit card">
			<br>
			
			<br><br><br>
			
	<p><b>Card details</b></p>
	
	    <label for="Card number">Card number:</label>
		<input type="number" id="card number" name="Cardnumber"  placeholder="**** **** **** ****" required>
		<br><br>
		
		<label for="Name on card">Name on card:</label>
		<input type="text" id="Name on card" name="Nameoncard"  placeholder="Name..." required>
		<br><br>
		
		<label for="Expiry date">Expiry date:</label>
		<input type="date" id="Expiry date" name="Expirydate"  placeholder="**/**" required>
		<br><br>
		
		<label for="Security code">Security code:</label>
		<input type="number" id="Security code" name="Securitycode"  placeholder="***" required>
		<br><br>
		
		<input type="submit" name="submit" value="submit the form">
		
</div>
</form>
 

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
			
<?php 

$con = new mysqli("localhost","root","","payment_db");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error );
}

if(isset($_POST['submit'])){
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $Address = $_POST["Adress"];
    $postcode = $_POST["Postcode"];
    $method = $_POST["Paymentmethod"];
    $Cnumber = $_POST["Cardnumber"];
    $Cname = $_POST["Nameoncard"];
    $expirydate = $_POST["Expirydate"];
	$secucode = $_POST["Securitycode"];

    $sql = "INSERT INTO payment (Fullname,Email,Adress,Postcode, Paymentmethod, Cardnumber, Nameoncard, Expirydate, Securitycode) VALUES ('$name', '$email', '$Address', '$postcode', '$method', '$Cnumber', '$Cname', '$expirydate' , '$secucode');";

    if ($con->query($sql))
    {
        echo "<script>alert('Updated Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Error');".$con_error;
}}

    $con->close();

?>
</body>



</html>