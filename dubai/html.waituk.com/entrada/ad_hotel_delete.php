<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}

    $uid=$_GET["uid"];
    $delhotelquery=mysqli_query($con,"delete from hotel where Hotel_id=$uid");

    /*
    if ($query) 
    {
        # code...
        echo'succesful';
    }
    */
    header("location:ad_hotel.php");
?>