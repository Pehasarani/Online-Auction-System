<?php

    $con = new mysqli("localhost","root","","oas");

    if ($con->connect_error)
    {
        die ("Connection Failed " .$con->connect_error);
    }
    /*else
    {
        echo "Successful";
    }*/
?>