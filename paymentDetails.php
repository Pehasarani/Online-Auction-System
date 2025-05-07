<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

form {
    background-color: #fff;
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="submit"]
{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.btn-delete {
    display: block;
    padding: 8px 16px;
    background-color: #ff4d4d; /* Red color for delete button */
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    margin:auto;
    text-align:center;
}

.btn-delete:hover {
    background-color: #e60000; /* Darker red on hover */
}
    </style>

</head>
<body>

    <form action = "#" method = "POST">
        <label>Email:</label>
        <input type = "email" name = "email" required>
        <input type = "submit" value = "View payment details">
    </form> 
    <div>
        <form method = "post">
            
            <?php
            require 'php/config.php';
            
            if($con->connect_error)
            {
                die("Connection failed".$con->connect_error);
            } 
            
            if(isset($_POST['email'])){
            $email =$_POST["email"];

            $sql1="SELECT * FROM payment WHERE Email = '$email';" ;
            
            $result= $con->query($sql1);
            
            if($result->num_rows>0){
            
                while($row=$result->fetch_assoc()) { ?>
                <br><br>
                <form action="#" method="POST">
                    <label>Card number:</label>
                    <input type = 'text' name = 'cardnumber' value = '<?php echo $row["Nameoncard"] ?>' required>
                    <br><br>
                    <label>Name on card:</label>
                    <input type = 'text' name = 'nameoncard' value = '<?php echo $row["Cardnumber"] ?>' required>
                    <br><br>
                    <label>Expiry month:</label>
                    <input type = 'text' name = 'expiry' value = '<?php echo $row["Expirydate"] ?>' required>
                    <br><br>
                    <label>CVV number:</label>
                    <input type = 'text' name = 'cvv' value = '<?php echo $row["Securitycode"] ?>' required>
                    <br><br>
                    <input type="text" name="id" value='<?php echo $row["PaymentID"] ?>'  hidden>
                    <input type='submit' name='edit'>
                    <a href="paymentDetails.php?delete=true&id=<?php echo $row["PaymentID"] ?>" class="btn-delete"> DELETE</a>
                </form>
                <?php
                }
                
            }
            else
            {
                echo "No Results";
            }
            }
            $con->close();
            
            ?>

            </form>
            
        </table>
    </div>
    
</body>
</html>

<?php
$con=new mysqli("localhost","root","","payment_db");
            
if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
} 

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $crdnum =$_POST["cardnumber"];
    $crdname =$_POST["nameoncard"];
    $expirydate =$_POST["expiry"];
    $cvv =$_POST["cvv"];

    $sql = mysqli_query($con,"UPDATE payment SET cardnumber = '$crdnum',nameoncard = '$crdname',Expirydate= '$expirydate', Securitycode='$cvv' WHERE PaymentID = '$id'; ");
    if($sql === TRUE){
        echo'<script>alert("Updated Successfully");</script>';
    }else{
        echo"<script>alert('Updated Failed');</script>";
    }

}

if(isset($_GET['id']) && isset($_GET['delete'])){
    $id = $_GET['id'];

    $sql = mysqli_query($con,"DELETE FROM payment WHERE PaymentID='$id';");

    if($sql === TRUE){
        echo'<script>alert("Delete Successfully");window.location="index.php";</script>';
    }else{
        echo'<script>alert("Delete Failed!");window.location="index.php";</script>';
    }
}

?>