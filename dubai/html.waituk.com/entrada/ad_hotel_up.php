<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_hotel_idup"];
    $hnm=$_POST["ad_hotel_nameup"];
    $hdt=$_POST["ad_hotel_detailsup"];
    $himg=$_POST["ad_hotel_imgup"];

    $query=mysqli_query($con,"update hotel set Hotel_name='$hnm',Hotel_details='$hdt',Hotel_img='$himg' where Hotel_id=$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_hotel.php");

?>