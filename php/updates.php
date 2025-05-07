<?php

require 'config.php';



$ItemTitle = $_POST[ "title" ];
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



$sql = "UPDATE seller SET Description = '$Description', Category = '$Category', AucDurationHrs = '$AucDurationHrs', AucDurationMin = '$AucDurationMin', Quantity = '$Quantity',
        StartingBid = '$StartingBid', ShippingMethod = '$ShippingMethod', `Condition` = '$Condition', height = '$height', length = '$length', width = '$width', weight = '$weight' WHERE ItemTitle = '$ItemTitle'";


    
    if( $con->query( $sql ) )
    {
        echo "<script>
        alert('update successful');
    </script>";
    header('location:../sell.php');
    }

    else
    {

        echo "<script>
    alert('update failed');
</script>";
header('location:updates.php');

    }




?>