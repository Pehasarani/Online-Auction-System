<?php

require 'config.php';

session_start();

if(empty($_SESSION['role']) || empty($_SESSION['email'])){

    echo "<script>alert('Login to Place Bid')</script>";
    header('location:../login.php');
}
else {
    $addbid = $_POST["new_bid"];

$email = $_SESSION['email'];

$bid_sql = "SELECT * FROM bid WHERE Bid_Amount = (SELECT MAX(Bid_Amount) FROM bid WHERE Item_Id = 5) AND Item_Id = 5";


$bid_result = mysqli_query($con, $bid_sql);

if ($bid_result) {
    $result = mysqli_fetch_assoc($bid_result);



//$sql = "INSERT INTO bid (Item_Id, User_email, Auction_Id, Bid_Amount, Closing_time, Bid_Id)VALUES ($result['Item_Id'], '$email', $result['Auction_Id'], '$addbid','$result['Closing_time']','')";

$sql = "INSERT INTO bid (Item_Id, User_email, Auction_Id, Bid_Amount, Closing_time, Bid_Id) VALUES (" . $result['Item_Id'] . ", '$email', " . $result['Auction_Id'] . ", '$addbid', '" . $result['Closing_time'] . "', '')";



if($con->query($sql))
{
    echo "<script>
    alert('bid added successfully');
</script>";
header('location:../product1.php');
}
else
{
    echo "<script>
    alert('bid failed');
</script>";
header('location:../product1.php');

}
}
}



?>