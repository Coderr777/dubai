<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}

    $uid=$_GET["uid"];
    $delpackquery=mysqli_query($con,"delete from packages where Package_id=$uid");

    /*
    if ($query) 
    {
        # code...
        echo'succesful';
    }
    */
    header("location:ad_package.php");
?>