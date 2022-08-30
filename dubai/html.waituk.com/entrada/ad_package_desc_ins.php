<?php
    require 'connection.php';
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: ad_login.php");
        exit;   
    }
    $id=$_POST["id"];
    $d1=$_POST["d1"];
    $d2=$_POST["d2"];
    $d3=$_POST["d3"];
    $d4=$_POST["d4"];
    $d5=$_POST["d5"];
    $d6=$_POST["d6"];
    $d7=$_POST["d7"];
    $act1=$_POST["act1"];
    $act2=$_POST["act2"];
    $htl=$_POST["htl"];
    $gid=$_POST["gid"];
    $pla1=$_POST["pla1"];
    $pla2=$_POST["pla2"];
    $pla3=$_POST["pla3"];
    $pla4=$_POST["pla4"];
    $eve=$_POST["eve"];
    $insert_query=mysqli_query($con,"INSERT INTO `package_desc` (`Package_id`, `Day1`, `Day2`, `Day3`, `Day4`, `Day5`, `Day6`, `Day7`, `act1_id`, `act2_id`, `hotel_id`, `guide_id`, `pla1_id`, `pla2_id`, `pla3_id`, `pla4_id`, `event_id`) VALUES ('$id', '$d1', '$d2', '$d3', '$d4', '$d5', '$d6', '$d7', '$act1', '$act2', '$htl', '$gid', '$pla1', '$pla2', '$pla3', '$pla4', '$eve')");

/*    if($insert_query)
    {
        echo'successful';
    }
    else
    {
        echo mysqli_error($con);
    }
*/   header("location:ad_package.php");
?>