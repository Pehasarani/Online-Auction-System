<?php

require 'config.php';


$memName = $_POST[ "mname" ];
$memContact = $_POST[ "mcontact" ];
$mememail = $_POST[ "memail" ];
$memmsg = $_POST[ "memmsg" ];


$sql = "INSERT INTO feedback VALUES ( '$memName', '$memContact', '$mememail', '$memmsg')";

if($con-> query($sql))
{
    echo "<script>
    alert('insert successful');
</script>";
header('location:../contactus.php');

}
else
{
    echo "<script>
    alert('insert failed');
</script>".$con ->error;
}



?>