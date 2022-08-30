<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $plname=$_POST["ad_place_name"];
    $plimg=$_POST["ad_place_img"];
    $plimg2=$_POST["ad_place_img2"];
    $plimg3=$_POST["ad_place_img3"];
    $pldetails=$_POST["ad_place_details"];
    $pldetails2=$_POST["ad_place_long_details"];
    $insert_query=mysqli_query($con,"INSERT INTO `places`(`Place_name`,`Place_img`,`places_img2`,`places_img3`,`Place_desc`,`places_longdesc`) VALUES ('$plname','$plimg','$plimg2','$plimg3','$pldetails','$pldetails2')");
    
    /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_places.php");
?>