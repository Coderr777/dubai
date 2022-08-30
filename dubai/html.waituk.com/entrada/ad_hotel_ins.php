<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $hname=$_POST["ad_hotel_name"];
    $hdetails=$_POST["ad_hotel_details"];
    $himg=$_POST["ad_hotel_img"];
    $insert_query=mysqli_query($con,"INSERT INTO `hotel`(`Hotel_name`,`Hotel_details`,`Hotel_img`) VALUES ('$hname','$hdetails','$himg')");
    
     /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    }*/   
    header("location:ad_hotel.php");
?>