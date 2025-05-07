<?php
require 'config.php';

$sql="SELECT * FROM seller;";

$result= $con->query($sql);

if($result->num_rows>0)
{
    echo "<table border= '1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["ItemTitle"]."</td>"."<td>".$row["Description"]."</td>"."<td>".$row["Category"]."</td>"."<td>".$row["Quantity"].
        "</td>"."<td>".$row["AucDurationHrs"]."</td>"."<td>".$row["AucDurationMin"]."</td>"."<td>".$row["StartingBid"].
        "</td>"."<td>".$row["ShippingMethod"]."</td>"."<td>".$row["Condition"]."</td>"."<td>".$row["height"]."</td>"."<td>".$row["length"]."</td>"."<td>".$row["width"]."</td>"."<td>".$row["weight"];
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "No Result";
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocobid</title>
    
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family:sans-serif;
    box-sizing:border-box;

}
body{
   
    justify-content: center;
    align-items: center;
    height:100px; 
    background-image: url("../images/background14.jpeg");
    background-size:cover;
    background-repeat: no-repeat;
    background-position: 95% center;

}
.form-container{
    max-width:650px;
    padding:28px;
    margin: 0 28px;
    border-radius:10px;
    overflow:hidden;
    position: relative;
    left: 251px;
    background-color: #63667ca6;
    box-shadow:0 15px 20px rgba(0,0,0,0.6);
}
h1{
    font-size: 26px;
    font-weight: bold;
    text-align:left;
    color:#fff;
    padding-bottom:8px;
    border-bottom:1px solid silver;

}
.content{
    display: flex;
    flex-wrap: wrap;
    justify-content:space-between;
}

#height{
    position: relative;
    left: 18px;

}
#length{
    position: relative;
    left: 15px;
}
#Width{
    position: relative;
    left: 23px;
}
#Weight{
    position: relative;
    left: 15px;
}
.category{
    display:inline-block;
}

    </style>
</head>

<body>
<br>
<center>
<form action="updates.php" method="post">
            <label for="title">Item Title:</label> <br>
            <input type="text" id="title" name="title" required><br><br>

            <label for="Description">Description</label><br>
            <textarea id="Description" name="Description" rows="8" cols="50" required></textarea><br><br>

            <label for="category">Category:</label><br>
            <input type="checkbox" id="category" name="category" value="category1">
            <label for="category1">Category1</label><br>
            <input type="checkbox" id="category" name="category" value="category2">
            <label for="category2">Category2</label><br>
            <input type="checkbox" id="category" name="category" value="category1">
            <label for="category3">Category3</label><br><br>

            <label for="quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" min="1" required><br><br>

            <label for="auction_duration_hours">Auction Duration (Hours):</label><br>
            <input type="number" id="auction_duration_hours" name="auction_duration_hours" min="0" required><br><br>

            <label for="auction_duration_minutes">Auction Duration (Minutes):</label><br>
            <input type="number" id="auction_duration_minutes" name="auction_duration_minutes" min="0" max="59"
                required><br><br>

            <label for="starting_bid">Starting Bid:</label><br>
            <input type="number" id="starting_bid" name="starting_bid" min="0" required><br><br>

            <label for="shipping_method">Shipping Method:</label><br>
            <select id="shipping_method" name="shipping_method" required>
                <option value="">Standard method</option><br>
                <ption valuue="Standard">Standard</ption><br>
                <option value="Express">Express</option>
                <option value="Pickup">Pickup</option>
            </select><br><br>

            <label for="condition">Condition:</label><br>
            <select id="condition" name="condition" required>
                <option value="">Select Condition</option>
                <option value="new">New</option>
                <option value="used">Used</option>
            </select><br><br>

            <label for= "dimensions" >Dimensions:</label><br>
            <ul>
                <li>
                    <label for="height">Height:</label>
                    <input type="text" id="height" name="height" required>
                </li>
                <li>
                    <label for="length">Length:</label>
                    <input type="text" id="length" name="length" required>
                </li>
                <li>
                    <label for="width">Width:</label>
                    <input type="text" id="width" name="width" required>
                </li>
                <li>
                    <label for="weight">Weight:</label>
                    <input type="text" id="weight" name="weight" required>
                </li>
            </ul>
<br><br>
            <label for="image">Upload Image/s:</label><br>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>

            <input type="submit" value="Update" name="Update"> 
            <br><br>
        </form>

</div>
<div class = "input-container">
    <form method = "post" action = "deletes.php">

    Delete Data : <input type = "text" name = "title" class = "input1"><br><br>
    <input type = "submit" value = "delete" class = "btn"/>
</form>
</center>
</div>

        </fieldset>

</body>
</html>