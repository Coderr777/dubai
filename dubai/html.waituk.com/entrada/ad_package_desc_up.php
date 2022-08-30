<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
$uid=$_POST["pack"];
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
    $query=mysqli_query($con,"update package_desc set Day1='$d1',Day2='$d2', Day3='$d3', Day4='$d4', Day5='$d5', Day6='$d6', Day7='$d7', act1_id='$act1', act2_id='$act2', hotel_id='$htl', guide_id='$gid', pla1_id='$pla1', pla2_id='$pla2', pla3_id='$pla3', pla4_id='$pla4', event_id='$eve' where Package_id =$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_package.php");

?>