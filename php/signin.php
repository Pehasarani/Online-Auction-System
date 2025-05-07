<?php

    require 'config.php';
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];

    $user = "SELECT * from registered_user where Email = '$email' AND Password = '$password'";
    $user_result = mysqli_query($con,$user);
    $count_user = mysqli_num_rows($user_result);

    if($count_user == 1)
    {
        session_start();
        $_SESSION['role'] = 'user';
        $_SESSION['email'] =  $email;
        header("Location:../index.php");
        exit;
    }


    $admin = "SELECT * FROM administrator WHERE Email = '$email' AND Password = '$password'" ;
    $admin_result = mysqli_query($con, $admin);
    $count_admin = mysqli_num_rows($admin_result);

    if($count_admin == 1)
    {
        session_start();
        $_SESSION['role'] = 'admin';
        $_SESSION['email'] =  $email;
        header("Location:../admin.php");
        exit;
    }

    else
    {
        echo '<script> 
                window.location.href="../login.php";
                alert("Invalid username or password!");
              </script>';
    }

?>