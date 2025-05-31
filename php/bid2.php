<?php

require 'config.php';

session_start();

if(empty($_SESSION['role']) || empty($_SESSION['email'])){

    echo "<script>alert('Login to Place Bid')</script>";
    header('location:../login.php');
    exit();
}
else {
    $addbid = $_POST["new_bid"];

$email = $_SESSION['email'];

$bid_sql = "SELECT * FROM bid WHERE Bid_Amount = (SELECT MAX(Bid_Amount) FROM bid WHERE Item_Id = 5) AND Item_Id = 5";


$bid_result = mysqli_query($con, $bid_sql);

$item_id = 7;
$auction_id = "NULL";
$closing_time = "NULL";

if ($bid_result && $row = mysqli_fetch_assoc($bid_result)) {
    $auction_id = $row['Auction_Id'] ? intval($row['Auction_Id']) : "NULL";
    $closing_time = $row['Closing_time'] ? "'".$con->real_escape_string($row['Closing_time'])."'" : "NULL";
} else {
    $auction_id = "NULL";
    $closing_time = "NULL";
}


$sql = "INSERT INTO bid (item_Id, user_Id, auction_Id, bid_amount, bid_time, id) VALUES (?, ?, $auction_id, ?, $closing_time, '')";
$stmt = $con->prepare($sql);
$stmt->bind_param("isd", $item_id, $user_Id, $addbid);


if($stmt->execute())
{
    echo "<script>
    alert('bid added successfully');
</script>";
header('location:../product2.php');
exit();
}
else
{
    echo "<script>
    alert('bid failed');
</script>";
header('location:../product2.php');
exit();
}
}



?>