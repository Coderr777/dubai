<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $aname=$_POST["ad_act_name"];
    $adetails=$_POST["ad_act_details"];
    $aimg=$_POST["ad_act_img"];
    $insert_query=mysqli_query($con,"INSERT INTO `activities`(`activity_name`,`activity_desc`,`activity_img`) VALUES ('$aname','$adetails','$aimg')");
    
    /* if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    } */  
    header("location:ad_activities.php");
?>