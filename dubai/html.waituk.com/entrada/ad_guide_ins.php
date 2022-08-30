<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $gname=$_POST["ad_guide_name"];
    $gtype=$_POST["ad_guide_type"];
    $gimg=$_POST["ad_guide_img"];
    $insert_query=mysqli_query($con,"INSERT INTO `guide`(`guide_name`,`guide_type`,`guide_img`) VALUES ('$gname','$gtype','$gimg')");
    
    /* if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    } */  
    header("location:ad_guide.php");
?>