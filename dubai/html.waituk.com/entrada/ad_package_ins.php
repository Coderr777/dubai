<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $pname=$_POST["ad_pack_name"];
    $ptype=$_POST["ad_pack_type"];
    $pdetails=$_POST["ad_pack_details"];
    $pprice=$_POST["ad_pack_price"];
    $pimg=$_POST["ad_pack_img"];
    $pimg2=$_POST["ad_pack_img2"];
    $insert_query=mysqli_query($con,"INSERT INTO `packages`(`Package_name`, `Package_type`, `Package_details`,`Package_price`,`Package_image`,`Package_img2`) VALUES ('$pname','$ptype','$pdetails','$pprice','$pimg','$pimg2')");
    
    /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_package.php");
?>