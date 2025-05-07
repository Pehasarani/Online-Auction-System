<?php
    require 'config.php';

    $name = $_POST["name"];
    $email1 = $_POST["email"];
    $address = $_POST["address"];
    $phone_no = $_POST["phone_number"];
    $password1 = $_POST["password"];

    $signup = "INSERT INTO registered_user VALUES ('','$name', '$email1', '$address', '$phone_no','$password1')";

    if ( $con -> query ($signup))
    {
        echo "<script>
                    alert('Signup successful');
              </script>";
        header ("Location:../login.php");   
    }
    else
    {
        echo "<script>
                alert('Error.$con->error;');
              </script>";
    }
?>