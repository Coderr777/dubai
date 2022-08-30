<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>

<html>
   
   <head>
   </head>
   
   <body>
      <?php
      $fid=$_POST['fid'];
      $em=$_POST['em'];
      $msg=$_POST['fer'];
      $sub=$_POST['sub'];
      $seluser="select * from usertable where email='$em'";
      $resuser=mysqli_query($con,$seluser);
      $n=mysqli_num_rows($resuser);
      $row=mysqli_fetch_row($resuser);
      
      
      $to = "$em";
         $subject = "$sub";
         
         $message = "$msg";
         $header = "darpansarda7@gmail.com \r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         /*
        if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/
     $query=mysqli_query($con,"update feedback set repchk='replied' where feedback_id=$fid");
/*          if ($query) {
            # code...
            echo'succesful';
        }
        else
        {
            echo mysqli_error($con);
        }*/
        
    header("location:ad_feedback.php");
      ?>
      
   </body>
</html>