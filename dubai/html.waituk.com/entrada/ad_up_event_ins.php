<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $ename=$_POST["ad_event_name"];
    $edetails=$_POST["ad_event_details"];
    $stdate=$_POST['ad_event_start_date'];
    $enddate=$_POST['ad_event_end_date'];
    $eimg=$_POST["ad_event_img"];
    $insert_query=mysqli_query($con,"INSERT INTO `events`(`event_name`, `event_details`,`event_image`,`event_start_date`,`event_end_date`) VALUES ('$ename','$edetails','$eimg','$stdate','$enddate')");
    
    /*if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_up_event.php");
?>