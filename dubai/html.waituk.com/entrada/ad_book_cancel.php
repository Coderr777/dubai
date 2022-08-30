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
    $subject = "Dubai Tour Cancellation";
    
    $message = "Your Tour to Dubai has been cancelled due to some reason , Please Re-book yout tour!";
    $header = "darpansarda7@gmail.com \r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
   /*if( $retval == true ) {
       echo "Message sent successfully...";
    }else {
       echo "Message could not be sent...";
    }*/

    $bookconfquery=mysqli_query($con,"INSERT INTO `booking_cancel`(`Package_id`, `email`, `name`, `st_date`, `end_date`, `members`, `price`, `Country`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]')");
    $delbookpendquery=mysqli_query($con,"delete from booking_pend where booking_id=$uid");

    header("location:ad_booking_cancel.php");
?>