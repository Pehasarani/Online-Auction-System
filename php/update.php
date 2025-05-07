<?php

require 'config.php';


$Name = $_POST[ "mname" ];
$Contact = $_POST[ "mcontact" ];
$Email = $_POST[ "memail" ];
$Message = $_POST[ "memmsg" ];

if( empty($Name)||empty($Contact)||empty($Email) )
{
    echo "All Required";
}
else
{
    $sql= "UPDATE feedback set name = '$Name', contact= '$Contact', email = '$Email', messages ='$Message' ";

    if($con->query($sql))
    {
        echo "<script>
        alert('Feedback Updated Successfully');
  </script>";
        header('location:../read.php');
    }
    else
    { 
        echo "<script>
        alert('Update failed');
  </script>";
    }


}



?>