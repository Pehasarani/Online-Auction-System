<?php

require 'config.php';

$Name = $_POST[ "mname" ];

$sql ="DELETE FROM feedback where name = '$Name'";

if($con->query($sql))
{
    echo "<script>
    alert('delete successful');
</script>";
header('location:../read.php');
}
else
{
    echo "<script>
    alert('delete failed');
</script>";

}


?>