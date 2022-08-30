<?php
require 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ad_login.php");
    exit;   
}
?>
<?php
    $uid=$_POST["ad_act_idup"];
    $anm=$_POST["ad_act_nameup"];
    $adt=$_POST["ad_act_detailsup"];
    $aimg=$_POST["ad_act_imgup"];

    $query=mysqli_query($con,"update activities set activity_name='$anm',activity_desc='$adt',activity_img='$aimg' where activity_id=$uid");
    /*if ($query) {
        # code...
        echo'succesful';
    }
    else
    {
        echo mysqli_error($con);
    }*/
    header("location:ad_activities.php");

?>