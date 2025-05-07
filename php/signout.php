<?php
    require 'config.php';
    session_start();
    if(empty($_SESSION['role']) || empty($_SESSION['email'])){
        header('location:login.php');
    }

    $role = $_SESSION['role'];
    $email = $_SESSION['email'];

    $signout = $_POST["signout"];

    if($signout == 'signout')
    {
        session_unset();
        session_destroy();
    }
    if(empty($_SESSION['role']) || empty($_SESSION['email'])){
        echo "<script>
                alert('Signed out succesfully');
              </script>";
        header('location:../index.php');
    }
    else
    {
        echo "<script>
                alert('Error.$con->error;');
              </script>";
    }
    
?>