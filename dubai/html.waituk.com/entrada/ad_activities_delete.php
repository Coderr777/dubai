<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}

    $uid=$_GET["uid"];
    $delhotelquery=mysqli_query($con,"delete from activities where activity_id=$uid");

    /*
    if ($query) 
    {
        # code...
        echo'succesful';
    }
    */
    header("location:ad_activities.php");
?>