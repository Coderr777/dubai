<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>

<?php
    $uid=$_GET['uid'];
    $selact="select * from booking_pend where booking_id=$uid";
    $resact=mysqli_query($con,$selact);
    $n=mysqli_num_rows($resact);
    $row=mysqli_fetch_row($resact);
    $to = "$row[2]";
    $subject = "Your Tour Tickets";
    
    $message = "Your Tour to Dubai has been booked successfully , pack your bags to fly to Dubai!!
    
    Tour Date : $row[4] to $row[5]";
    $header = "darpansarda7@gmail.com \r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
   /*if( $retval == true ) {
       echo "Message sent successfully...";
    }else {
       echo "Message could not be sent...";
    }*/

    $insbookconfquery=mysqli_query($con,"INSERT INTO `booking`(`Package_id`, `email`, `name`, `st_date`, `end_date`, `members`, `price`, `Country`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]')");
    $delbookpendquery=mysqli_query($con,"delete from booking_pend where booking_id=$uid");

    header("location:ad_booking_conf.php");
?>