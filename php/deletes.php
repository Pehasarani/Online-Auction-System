<?php

require 'config.php';

$ItemTitle = $_POST[ "title" ];

$sql = "DELETE FROM seller where ItemTitle = '$ItemTitle'";

if( $con->query($sql) )
{
    echo "<script>
    alert('delete successful');
</script>";
header('location:../sell.php');
}
else
{
    echo "<script>
    alert('delete failed');
</script>";
header('location:reads.php');
}
?>