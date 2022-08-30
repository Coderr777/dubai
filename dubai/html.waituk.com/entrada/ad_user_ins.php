<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $name=$_POST["ad_user_name"];
    $email=$_POST["ad_user_email"];
    $password=$_POST["ad_user_password"];
    $encpass = password_hash($password, PASSWORD_BCRYPT);
    $insert_query=mysqli_query($con,"INSERT INTO `usertable`(`name`, `email`, `password`) VALUES ('$name','$email','$encpass')");
    
    /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo 'error';
    }*/
    header("location:ad_users.php");
?>