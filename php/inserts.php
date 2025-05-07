<?php

require 'config.php'; 

if(isset($_POST["submit"])) {
    
    $ItemTitle = $_POST["title"]; 
    $Description = $_POST["Description"];
    $Category = $_POST["category"];
    $Quantity = $_POST["quantity"];
    $AucDurationHrs = $_POST["auction_duration_hours"];
    $AucDurationMin = $_POST["auction_duration_minutes"];
    $StartingBid = $_POST["starting_bid"];
    $ShippingMethod = $_POST["shipping_method"]; 
    $Condition = $_POST["condition"];
    $height = $_POST["height"];
    $length = $_POST["length"];
    $width = $_POST["width"];
    $weight = $_POST["weight"];
    /*$UploadImg = $_POST["Upload Image/s"];*/


    $sql = "INSERT INTO seller (ItemTitle, Description, Category, Quantity, AucDurationHrs, AucDurationMin, StartingBid, ShippingMethod, `Condition`, height, length,width, weight) 
            VALUES ('$ItemTitle', '$Description', '$Category', '$Quantity', '$AucDurationHrs', '$AucDurationMin', '$StartingBid', '$ShippingMethod', '$Condition', '$height', '$length','$width','$weight')";
    
    if($con->query($sql)) {
        echo "<script>
    alert('insert successful');
</script>";
header('location:../sell.php');
    } else {
        echo "<script>
    alert('insert failed". $con->error."');
</script>";
header('location:inserts.php');
        
    }

 
    $con->close();
}

?>
