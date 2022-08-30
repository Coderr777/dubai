<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_event_idup"];
    $enm=$_POST["ad_event_nameup"];
    $stdate=$_POST['ad_event_start_dateup'];
    $enddate=$_POST['ad_event_end_dateup'];
    $edt=$_POST["ad_event_detailsup"];
    $eimg=$_POST["ad_event_imgup"];

    $query=mysqli_query($con,"update events set event_name='$enm',event_details='$edt',event_image='$eimg', event_start_date='$stdate', event_end_date='$enddate' where event_id=$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_up_event.php");

?>